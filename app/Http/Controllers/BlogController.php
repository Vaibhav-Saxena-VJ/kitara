<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 'published')->paginate(10);
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = BlogCategory::all();
        return view('blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048',
            'is_featured' => 'nullable|boolean',
            'latest' => 'nullable|boolean',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destination = public_path('storage/blogs');

            if (!file_exists($destination)) {
                mkdir($destination, 0755, true);
            }

            $image->move($destination, $filename);
            $imagePath = 'storage/blogs/' . $filename;
        }

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image' => $imagePath,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'published_at' => now(),
            'status' => $request->status,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created.');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all();
        return view('blogs.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_featured' => 'nullable|boolean',
            'latest' => 'nullable|boolean',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destination = public_path('storage/blogs');

            if (!file_exists($destination)) {
                mkdir($destination, 0755, true);
            }

            $image->move($destination, $filename);
            $imagePath = 'storage/blogs/' . $filename;
        } else {
            $imagePath = $blog->image;
        }

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image' => $imagePath,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'status' => $request->status,
            'is_featured' => $request->has('is_featured'),
            'latest' => $request->has('latest'),
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }

    public function show($slug){
        $blog = Blog::join('blog_categories', 'blogs.category_id', '=', 'blog_categories.id')
            ->where('blogs.slug', $slug)
            ->select('blogs.*', 'blog_categories.name as category_name')
            ->firstOrFail();

        $comments = BlogComment::where('blog_id', $blog->id)
            ->where('is_approved', 1)
            ->latest()
            ->get();

        $featuredProperties = DB::table('properties')
            ->join('price_range', 'properties.price_range_id', '=', 'price_range.range_id')
            ->join('property_category', 'properties.property_type_id', '=', 'property_category.pid')
            ->where('properties.is_featured', 1)
            ->where('properties.is_active', 1)
            ->select(
                'properties.properties_id', 'properties.title', 'properties.address', 'properties.builder_name',
                'properties.s_price', 'properties.is_featured', 'properties.localities', 'properties.city',
                'property_category.category_name', 'price_range.from_price', 'properties.select_bhk', 'properties.area',
                'price_range.from_price', 'price_range.to_price'
            )
            ->get();

        $propertyImages = DB::table('property_images')
            ->whereIn('properties_id', $featuredProperties->pluck('properties_id'))
            ->select('properties_id', 'image_url')
            ->orderBy('is_featured', 'DESC')
            ->get()
            ->groupBy('properties_id');

        foreach ($featuredProperties as $featured) {
            $featured->image = isset($propertyImages[$featured->properties_id])
                ? env('baseURL') . "/" . $propertyImages[$featured->properties_id]->first()->image_url
                : env('baseURL') . "/theme/frontend/img/default.jpg";
        }

        $featuredBlogs = Blog::where('is_featured', 1)
            ->where('is_active', 1)
            ->select('id', 'title', 'image', 'slug', 'created_at')
            ->orderBy('created_at', 'DESC')
            ->take(5)
            ->get();

        return view('blogs.show', compact('blog', 'featuredProperties', 'featuredBlogs', 'comments'))
            ->with([
                'meta_title' => $blog->meta_title ?? 'Default Property Title',
                'meta_description' => $blog->meta_description ?? 'Default Property Description',
                'meta_keywords' => $blog->meta_keywords ?? 'Default Keywords'
            ]);
    }

    public function toggleStatus($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->is_active = !$blog->is_active;
        $blog->save();

        return redirect()->back()->with('success', 'Blog status updated successfully.');
    }

    public function bloglist(){
        $blogs = Blog::with('category')
            ->where('status', 'published')
            ->where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('frontend.blogs-grid', compact('blogs'));
    }

    public function storeComment(Request $request)
    {
        $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        BlogComment::create($request->only('blog_id', 'name', 'email', 'message'));

        return back()->with('success', 'Comment submitted successfully.');
    }

    public function pendingComments()
    {
        $comments = BlogComment::where('is_approved', 0)->latest()->get();
        return view('blogs.blog-comments.index', compact('comments'));
    }

    public function approveComment($id)
    {
        BlogComment::where('id', $id)->update(['is_approved' => 1]);
        return back()->with('success', 'Comment approved successfully.');
    }

    public function deleteComment($id)
    {
        BlogComment::where('id', $id)->delete();
        return back()->with('success', 'Comment deleted successfully.');
    }

    public function showById($id)
    {
        $blog = Blog::join('blog_categories', 'blogs.category_id', '=', 'blog_categories.id')
            ->where('blogs.id', $id)
            ->select('blogs.*', 'blog_categories.name as category_name')
            ->firstOrFail();

        $comments = BlogComment::where('blog_id', $id)
            ->where('is_approved', 1)
            ->latest()
            ->get();

        $featuredProperties = DB::table('properties')
            ->join('price_range', 'properties.price_range_id', '=', 'price_range.range_id')
            ->join('property_category', 'properties.property_type_id', '=', 'property_category.pid')
            ->where('properties.is_featured', 1)
            ->where('properties.is_active', 1)
            ->select(
                'properties.properties_id', 'properties.title', 'properties.address', 'properties.builder_name',
                'properties.s_price', 'properties.is_featured', 'properties.localities', 'properties.city',
                'property_category.category_name', 'price_range.from_price', 'properties.select_bhk', 'properties.area',
                'price_range.from_price', 'price_range.to_price'
            )
            ->get();

        $propertyImages = DB::table('property_images')
            ->whereIn('properties_id', $featuredProperties->pluck('properties_id'))
            ->select('properties_id', 'image_url')
            ->orderBy('is_featured', 'DESC')
            ->get()
            ->groupBy('properties_id');

        foreach ($featuredProperties as $featured) {
            $featured->image = isset($propertyImages[$featured->properties_id])
                ? env('baseURL') . "/" . $propertyImages[$featured->properties_id]->first()->image_url
                : env('baseURL') . "/theme/frontend/img/default.jpg";
        }

        $featuredBlogs = Blog::where('is_featured', 1)
            ->where('is_active', 1)
            ->select('id', 'title', 'image', 'created_at')
            ->orderBy('created_at', 'DESC')
            ->take(5)
            ->get();

        return view('blogs.show', compact('blog', 'featuredProperties', 'featuredBlogs', 'comments'))
            ->with([
                'meta_title' => $blog->meta_title ?? 'Default Property Title',
                'meta_description' => $blog->meta_description ?? 'Default Property Description',
                'meta_keywords' => $blog->meta_keyword ?? 'Default Keywords'
            ]);
    }
}