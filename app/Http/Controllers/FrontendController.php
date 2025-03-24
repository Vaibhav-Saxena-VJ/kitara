<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use App\Models\PasswordResets;




class FrontendController extends Controller
{
    public function userLogin(Request $req)
{
    // Validate the input
    $req->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ], [
        'email.required' => 'The email field is required.',
        'email.email' => 'Please provide a valid email address.',
        'password.required' => 'The password field is required.',
        'password.min' => 'Password must be at least 6 characters.',
    ]);

    $email = $req->input('email');
    $p = md5($req->input('password'));

    // Fetch user data including the password
    $users = DB::select('
        SELECT u.id, u.name, u.email_id, u.password, p.mobile_no, r.id as role_id, r.name as role_name, u.is_email_verify
        FROM users u
        JOIN profile p ON u.id = p.user_id
        JOIN roles r ON r.id = u.role_id
        WHERE u.email_id = ?
    ', [$email]);

    if (count($users) === 0) {
        // Username (email) not found
        return redirect()->back()->with('error', 'Incorrect username.');
    }

    $user = $users[0]; // Assuming there is only one matching user

    // Check password and email verification
    if ($user->password !== $p) {
        // Password does not match
        return redirect()->back()->with('error', 'Incorrect password.');
    }

    if (!$user->is_email_verify) {
        // Email not verified
        return redirect()->back()->with('error', 'Email not verified.');
    }

    // Set session variables
    Session::put('username', $user->name);
    Session::put('role_name', $user->role_name);
    Session::put('user_id', $user->id);
    Session::put('role_id', $user->role_id);
    Session::put('email', $user->email_id);

    // Redirect based on role_id
    switch ($user->role_id) {
        case 5:
            return redirect('broker/allLoansApplications');
        case 4:
            return redirect('admin/dashboard');
        case 2:
            return redirect('agent/agentDashboard');
        case 3:
            return redirect('partner/partnerDashboard');
        case 1:
            return redirect('/');
        default:
            return redirect('/');
    }
}

    public function activate($user_id, $auth_code)
    {
        $userAuth = DB::table('users')
            ->where('id', $user_id)
            ->where('email_otp', $auth_code)
            ->get();


        $is_active = $userAuth[0]->is_email_verify;

        if ($is_active == 0) {
            $update = DB::table('users')
                ->where('id', $user_id)
                ->update(['is_email_verify' => 1, 'updated_at' => Carbon::now()]);
            $result =  array('status' => 'success', 'message' => "Congratulation! Your account is activated successfully...!!!");
        } else {
            $result =  array('status' => 'failed', 'message' => "Your account is already activated...!");
        }

        return view('frontend/account_activation', compact('result'));
        // print json_encode($result);
    }


    function reset_password_link(Request $request){

        $validator = Validator::make($request->all(), ['email' => 'required',]);

        if (!$validator->passes()) {
            return redirect('forgot')->with('error', 'The Email Address field is empty.');
        } else {
            $user = DB::table('users')
            ->where('email_id', $request->email)
            ->first();
            if($user){

                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                $auth_id = substr(str_shuffle($permitted_chars), 0, 10);
                $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
                $expDate = date("Y-m-d H:i:s", $expFormat);

                $email = $request->email;
                $name = $user->name;
                $msg = env('baseURL') . "/reset_password/".$auth_id;
                $temp_id = 2;

                $values = [
                    'email' => $email,
                    'token' => $auth_id,
                    'exp_date' => $expDate,
                    'user_id' => $user->id
                ];

                // die;
                $addExp = PasswordResets::create($values);

                //calling UsersController temail function from FrontendController
                app(UsersController::class)->temail($email, $name, $msg, $temp_id);

                return redirect('forgot')->with('status', 'We sent an email to your registered email-id to help you recover your account. Please login into your email account and click on the link we sent to reset your password');
            }else{
                return redirect('forgot')->with('error', 'Sorry, no user exists on our system with that email');
            }
        }
    }

    
    function reset_password($auth_id){
        $curDate = date("Y-m-d H:i:s");
        $user = DB::table('password_resets')->where('token', $auth_id)->first();
        if ($user) {
            if ($user->exp_date >= $curDate) {
                if ($user->is_verified == 1) {
                    return redirect('forgot')->with('error', 'The link is expired. You have already used this link to reset your password. Please enter Email ID again to generate to reset link.');
                } else {
                    session()->put('email_id', $user->email);
                    session()->put('user_id', $user->user_id);
                    session()->put('auth_id', $auth_id);
                    return view('frontend.reset_password');
                }
            } else {
                return redirect('forgot')->with('error', 'The link is expired. You are trying to use the expired link which as valid only 24 hours (1 days after request).');
            }
        } else {
            return redirect('forgot')->with('error', 'Authentication failed!');
        }

    }

    function update_password(Request $req){

        $validator = Validator::make($req->all(), [
            'password' => 'required',
        ]);

        if (!$validator->passes()) {
            return redirect('reset_password/'.$req->auth_id)->with('error', 'The Password field is empty.');
        } else {
            $first_password = $req->input('password');
            $second_password = $req->input('cpassword');
            $email = $req->input('email');
            $user_id = $req->input('user_id');

            $check = strcmp($first_password, $second_password);
            if ($check == 0) {
                // $pwd = Hash::make($second_password);
                $users = DB::table('users')->where('email_id', $email)->where('id', $user_id)->first();
                if ($users) {
                    DB::table('users')->where('email_id', $email)->where('id', $user_id)->update(['password' => md5($first_password)]);
                    $update = PasswordResets::where('token', $req->auth_id)->update(['is_verified' =>  1]);
                    return redirect('/')->with('status', 'Password updated.');

                }
            } else {
                return redirect('reset_password/'.$req->auth_id)->with('error', 'Password and Confirmed Password do not match');
            }
        }
    }

    

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    function forgot(){
        return view('frontend.forgot');
    }

    public function TestView(){
        return view('frontend.test');
    }

    public function ContactView()
    {
        return view('frontend.contact');
    }

    public function RegisterView()    {
        return view('registration');
    }

    public function ServicesView()    {
        return view('frontend.services');
    }
    public function AboutView(){
        return view('frontend.about');
    }
    public function PrivacyView(){
        return view('frontend.privacy');
    }
    public function TermCondView(){
        return view('frontend.termcond');
    }

    public function PropDetailsView($property_id) {
        $propertyDetails = DB::select('
            SELECT * FROM properties as p
            JOIN price_range as pr ON p.price_range_id = pr.range_id
            JOIN property_category as pc ON pc.pid = p.property_type_id
            WHERE p.properties_id = ?', [$property_id]);
    
        if (empty($propertyDetails)) {
            abort(404); // Property not found
        }
    
        // Extract locality from the fetched property
        $locality = $propertyDetails[0]->localities;
    
        // Fetch additional images
        $additionalImages = DB::table('property_images')
            ->where('properties_id', $property_id)
            ->get();
    
        // Fetch properties from the same locality, excluding the current property
        $localityProperties = DB::table('properties')
            ->where('localities', $locality)
            ->where('properties_id', '!=', $property_id)
            ->where('is_active', 1)
            ->select('properties_id', 'title', 'builder_name', 'address', 'select_bhk', 'area',  'meta_title', 'meta_description', 'meta_keywords')
            ->limit(10) // Limit to 10 for better performance
            ->get();
    
        // Fetch images for locality properties
        $propertyImages = DB::table('property_images')
            ->whereIn('properties_id', $localityProperties->pluck('properties_id'))
            ->select('properties_id', 'image_url')
            ->get()
            ->groupBy('properties_id');
    
        // Assign images to each locality property
        foreach ($localityProperties as $localityProperty) {
            $localityProperty->image = isset($propertyImages[$localityProperty->properties_id])
                ? $propertyImages[$localityProperty->properties_id]->first()->image_url
                : 'default.jpg';
        }
    
        // Pass data to view
        $data = [
            'propertie_details' => $propertyDetails,
            'additional_images' => $additionalImages,
            'localityProperties' => $localityProperties
        ];
    
        return view('frontend.property-details-test', compact('data'))
        ->with([
            'meta_title' => $propertyDetails[0]->meta_title ?? 'Default Property Title',
            'meta_description' => $propertyDetails[0]->meta_description ?? 'Default Property Description',
            'meta_keywords' => $propertyDetails[0]->meta_keywords ?? 'Default Keywords'
        ]);
    }
    
    // Loan Application
    public function ProfessionalDetailView(){
        return view('frontend.professional-info');
    }

    public function CalculatorView(){
        return view('frontend.calculator');
    }
    public function properties()
    {
        $data['allProperties'] = DB::table('properties')
            ->join('price_range', 'properties.price_range_id', '=', 'price_range.range_id')
            ->join('property_category', 'properties.property_type_id', '=', 'property_category.pid')
            ->where('properties.is_active', 1)
            ->select(
                'properties.properties_id', 'properties.title', 'properties.property_type_id', 
                'properties.builder_name', 'properties.select_bhk', 'properties.address', 
                'properties.facilities', 'properties.beds', 'properties.baths', 'properties.balconies', 
                'properties.parking', 'properties.contact', 'price_range.from_price', 'price_range.to_price', 
                'property_category.category_name', 'properties.property_details', 
                'properties.localities', 'properties.city', 'properties.area',
                'properties.is_featured'
            )
            ->paginate(700);
    
        $data['category'] = DB::table('property_category')->get();
        $data['range'] = DB::table('price_range')->get();
    
        // Fetch first image for each property
        $propertyImages = DB::table('property_images')
            ->select('properties_id', 'image_url')
            ->whereIn('properties_id', $data['allProperties']->pluck('properties_id'))
            ->orderBy('is_featured', 'DESC') 
            ->get()
            ->groupBy('properties_id');
    
        // Attach images to properties
        foreach ($data['allProperties'] as $property) {
            $property->image = isset($propertyImages[$property->properties_id]) 
                ? $propertyImages[$property->properties_id]->first()->image_url 
                : 'default.jpg';
        }
    
        // Fetch **Featured Properties**
        $data['featuredProperties'] = DB::table('properties')
            ->join('price_range', 'properties.price_range_id', '=', 'price_range.range_id')
            ->join('property_category', 'properties.property_type_id', '=', 'property_category.pid')
            ->where('properties.is_featured', 1)
            ->where('properties.is_active', 1)
            ->select(
                'properties.properties_id', 'properties.title', 'properties.address', 'properties.builder_name',
                'properties.s_price', 'properties.is_featured', 'properties.localities', 'properties.city',
                'property_category.category_name', 'price_range.from_price', 'properties.select_bhk', 'properties.area','price_range.from_price', 'price_range.to_price'
            )
            ->get();
    
        // Attach images to **Featured Properties**
        foreach ($data['featuredProperties'] as $featured) {
            $featured->image = isset($propertyImages[$featured->properties_id]) 
                ? $propertyImages[$featured->properties_id]->first()->image_url 
                : 'default.jpg';
        }
    
        // **Existing Localities Data with Property Count**
        $data['localities'] = DB::table('properties')
            ->select('localities', 'city', \DB::raw('COUNT(*) as property_count'), \DB::raw('MAX(image) as image'))
            ->groupBy('localities', 'city')
            ->get();
    
        // **Fetch Three Selected Localities**
        $selectedLocalities = DB::table('selected_localities')
        ->join('localities', 'selected_localities.locality_id', '=', 'localities.id')
        ->select('localities.id', 'localities.name')
        ->limit(3)
        ->get();
        
        $data['blogs'] = DB::table('blogs')
            ->join('blog_categories', 'blogs.category_id', '=', 'blog_categories.id')
            ->where('blogs.status', 'published')
            ->select('blogs.*', 'blog_categories.name as category_name')
            ->paginate(10);
    // Fetch **Properties for Each Selected Locality (First 2 Properties)**
        $data['selectedLocalities'] = [];
            foreach ($selectedLocalities as $locality) {
                $properties = DB::table('properties')
                    ->where('localities', 'LIKE', "%{$locality->name}%")
                    ->where('is_active', 1)
                    ->select('properties_id', 'title', 'builder_name') // Remove 'image' from selection
                    ->limit(2)
                    ->get();

                // Attach images from `property_images` table
                $propertyImages = DB::table('property_images')
                    ->whereIn('properties_id', $properties->pluck('properties_id'))
                    ->select('properties_id', 'image_url')
                    ->orderBy('is_featured', 'DESC') 
                    ->get()
                    ->groupBy('properties_id');

                foreach ($properties as $property) {
                    $property->image = isset($propertyImages[$property->properties_id])
                        ? env('baseURL') . "/" . $propertyImages[$property->properties_id]->first()->image_url
                        : env('baseURL') . "/theme/frontend/img/default.jpg"; // Use default if no image
                }

                $data['selectedLocalities'][] = [
                    'locality' => $locality->name,
                    'properties' => $properties
                ];
            }
        return view('frontend.properties', compact('data'));
    }
        
    public function search_properties(Request $request)
{
    $range_id = $request->range_id;
    $category_type = $request->category_type;
    $location_name = $request->location_name;
    $property_type_id = $request->property_type_id; // Get from AJAX request

    // Start building the query
    $query = DB::table('properties')
        ->join('price_range', 'properties.price_range_id', '=', 'price_range.range_id')
        ->join('property_category', 'properties.property_type_id', '=', 'property_category.pid')
        ->where('properties.is_active', 1);

    // Filter by property type (Buy = 1, Commercial = 2, Rent = 3)
    if (!empty($property_type_id)) {
        $query->where('properties.property_type_id', $property_type_id);
    }

    // Apply additional filters if selected
    if (!empty($category_type)) {
        $query->where('properties.property_type_id', $category_type);
    }

    if (!empty($range_id)) {
        $query->where('properties.price_range_id', $range_id);
    }

    if (!empty($location_name)) {
        $query->where('properties.localities', 'LIKE', "%{$location_name}%");
    }

    // Select the required columns
    $data['allProperties'] = $query->select(
        'properties.properties_id', 'properties.title', 'properties.image',
        'properties.property_type_id', 'properties.builder_name', 'properties.select_bhk',
        'properties.address', 'properties.facilities', 'properties.contact',
        'price_range.from_price', 'price_range.to_price', 'property_category.category_name',
        'properties.property_details'
    )->paginate(700);

    // Get category & price range data for filters
    $data['category'] = DB::table('property_category')->get();
    $data['range'] = DB::table('price_range')->get();

    // Return the results dynamically for AJAX
    return view('frontend.searchResult', compact('data'))->render();
}

    public function ReferralsView(){
        return view('frontend.referrals');
    }

    public function HomeLoanView(){
        return view('frontend.allLoans.home');
    }

    public function LAPLoanView(){
        return view('frontend.allLoans.loan-against-property');
    }

    public function ProjectLoanView(){
        return view('frontend.allLoans.project');
    }

    public function OverdraftLoanView(){
        return view('frontend.allLoans.overdraft-facility');
    }

    public function LRDLoanView(){
        return view('frontend.allLoans.lrd');
    }
    
    public function MSMELoanView(){
        return view('frontend.allLoans.msme');
    }
}