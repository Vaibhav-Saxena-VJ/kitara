<?php

use Illuminate\Support\Facades\Route;


// Jfinmate wali
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoanApplicationController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\TinyMCEController;
use App\Http\Controllers\ContactController;
// use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index']);

Route::get('/about-us', function () {
    return view('frontend.about-us');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/contactus', function () {
    return view('frontend.contactus');
});

Route::post('/contact', [ContactController::class, 'handleContactForm'])->name('contact.submit');

Route::get('/salesforce-development', function () {
    return view('frontend.salesforce-development');
});

Route::get('/implementation-services', function () {
    return view('frontend.implementation-services');
});

Route::get('/community-cloud-implementation', function () {
    return view('frontend.community-cloud-implementation');
});

Route::get('/data-migration', function () {
    return view('frontend.data-migration');
});

Route::get('/field-service-lightning-implementation', function () {
    return view('frontend.field-service-lightning-implementation');
});

Route::get('/integration', function () {
    return view('frontend.integration');
});

Route::get('/salesforce-support', function () {
    return view('frontend.salesforce-support');
});

Route::get('/products', function () {
    return view('frontend.products');
});


// Jfinmate k addresses
require __DIR__.'/auth.php';

//permission
    Route::prefix('admin')->group(function () {
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);
//roles
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class,'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class,'givePermissionToRole']);
});

Route::get('/blog-detail', function () {
    return view('frontend.blog-details');
})->name('blog.detail');;


Route::get('/blog', [BlogController::class, 'bloglist']);

//blog crud
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', BlogCategoryController::class);
    Route::resource('blogs', BlogController::class);
});

Route::post('/blogs/comment', [BlogController::class, 'storeComment'])->name('blogs.comment');
Route::get('/blogs/id/{id}', [BlogController::class, 'showById'])->name('blogs.showById');
Route::patch('/admin/blogs/{id}/toggle-status', [BlogController::class, 'toggleStatus'])->name('admin.blogs.toggleStatus');
Route::get('/admin/blog-comments', [BlogController::class, 'pendingComments'])->name('admin.blog-comments');
Route::post('/admin/blog-comments/{id}/approve', [BlogController::class, 'approveComment'])->name('admin.blog-comments.approve');
Route::delete('/admin/blog-comments/{id}', [BlogController::class, 'deleteComment'])->name('admin.blog-comments.delete');


Route::post('/upload-image', [TinyMCEController::class, 'uploadImage'])->name('image.upload');

//user routes
Route::get('login', [AdminController::class, 'loginView'])->name('login');
Route::post('userLogin', [FrontendController::class, 'userLogin'])->name('userLogin');
Route::get('logout', [FrontendController::class, 'logout'])->name('logout');
Route::get('forgot', [FrontendController::class, 'forgot'])->name('forgot');
Route::get('userAuth/{user_id}/{auth_code}', [FrontendController::class, 'activate'])->name('activate');

//reset password
Route::post('reset_password_link', [FrontendController::class, 'reset_password_link'])->name('reset_password_link');
Route::get('reset_password/{auth_id}', [FrontendController::class, 'reset_password'])->name('reset_password');
Route::post('update_password', [FrontendController::class, 'update_password'])->name('update_password');


Route::middleware('isAdmin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/admindashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
});

//admin user profile

Route::get('admin/profile/edit', [ProfileController::class, 'editProfile'])->name('admin.profile.edit');
Route::post('admin/profile/update', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
Route::get('admin/profile', [ProfileController::class, 'showProfile'])->name('admin.profile');
//customer register
Route::post('/register', [UsersController::class, 'registerUser'])->name('registerUser');


Route::middleware('isAdmin')->group(function () {
    Route::get('admin/profile/edit', [ProfileController::class, 'editProfile'])->name('admin.profile.edit');
    Route::post('admin/profile/update', [ProfileController::class, 'updateProfile'])->name('admin.profile.update');
});

// Temporary redirect (default)
Route::redirect('/admin/dashboard', '/admin/blogs', 302);