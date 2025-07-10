<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AdminInstructorController;
use App\Http\Controllers\backend\AdminProfileController;

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CouponController;
use App\Http\Controllers\backend\CourseController;
use App\Http\Controllers\backend\CourseLectureController;
use App\Http\Controllers\backend\CourseSectionController;
use App\Http\Controllers\backend\InfoBoxController;
use App\Http\Controllers\backend\InstructorController;
use App\Http\Controllers\backend\InstructorProfileController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\UserProfileController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\CourseDetailController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\frontend\WhishlistController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//Admin Login
Route::get('/admin/login', [AdminController::class,'login'])->name('admin.login');

Route::middleware(['auth', 'verified','role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    Route::post('/logout', [AdminController::class,'logout'])->name('logout');

    // Admin Profile Routes
    Route::get('/profile',[AdminProfileController::class,'index'])->name('profile');
    Route::post('/profile/store',[AdminProfileController::class,'store'])->name('profile.store');
    Route::get('/setting',[AdminProfileController::class,'setting'])->name('setting');
    Route::post('/password/update',[AdminProfileController::class,'passwordUpdate'])->name('password.update');
    
    // Category Crud
    Route::resource('category',CategoryController::class);
    Route::resource('subcategory',SubCategoryController::class);

    // Manage silder
    Route::resource('slider', SliderController::class);

    // Manage Infobox 
    Route::resource('infobox', InfoBoxController::class);

     // Control Instructor
    Route::resource('instructor', AdminInstructorController::class);
    Route::post('/update-status',[AdminInstructorController::class,'updateStatus'])->name('instructor.status');
    Route::get('/instructor-active-list',[AdminInstructorController::class,'instructorsActive'])->name('active.list');
});

//Instructor login
Route::get('/instructor/login', [InstructorController::class,'login'])->name('instructor.login');

Route::middleware(['web','auth', 'verified','role:instructor'])->prefix('instructor')->name('instructor.')->group(function () {
    Route::get('/dashboard', [InstructorController::class,'dashboard'])->name('dashboard');
    Route::post('/logout', [InstructorController::class,'logout'])->name('logout');
   // Profile Routes
    Route::get('/profile',[InstructorProfileController::class,'index'])->name('profile');
    Route::post('/profile/store',[InstructorProfileController::class,'store'])->name('profile.store');
    Route::get('/setting',[InstructorProfileController::class,'setting'])->name('setting');
    Route::post('/password/update',[InstructorProfileController::class,'passwordUpdate'])->name('password.update');

    //Manage Courses
    Route::resource('course', CourseController::class);
    //Manage Course section
    Route::resource('course-section', CourseSectionController::class);
    //Manage Course lecture
    Route::resource('lecture', CourseLectureController::class);

    Route::get('/get-subcategories/{categoryId}', [CategoryController::class,'getSubcategories']);

    // Manage coupon
    Route::resource('coupon',CouponController::class);

    
  
    
});

// User Routes
Route::middleware(['web','auth', 'verified','role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserController::class,'dashboard'])->name('dashboard');
   
   // Profile Routes
    Route::get('/profile',[UserProfileController::class,'index'])->name('profile');
    Route::post('/profile/store',[UserProfileController::class,'store'])->name('profile.store');
    Route::get('/setting',[InstructorProfileController::class,'setting'])->name('setting');
    Route::post('/password/update',[UserProfileController::class,'passwordUpdate'])->name('password.update');

    //Manage Courses
    Route::resource('course', CourseController::class);
    //Manage Course section
    Route::resource('course-section', CourseSectionController::class);
    //Manage Course lecture
    Route::resource('lecture', CourseLectureController::class);

    Route::get('/get-subcategories/{categoryId}', [CategoryController::class,'getSubcategories']);
    // Wishlist route
    Route::get('/wishlist', [WhishlistController::class, 'index'])->name('wishlist.index');
    Route::get('/wishlist-data', [WhishlistController::class, 'getWishlist'])->name('wishlist.data');
    Route::delete('/wishlist/{id}', [WhishlistController::class, 'destroy'])->name('wishlist.destroy');

    
  
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PageController::class, 'index'])->name('front.home');
Route::get('/course-details/{slug}', [PageController::class, 'courseDetails'])->name('course.details');
Route::post('/wishlist/add', [WhishlistController::class, 'addToWishlist'])->name('wishlist.store');
Route::get('/wishlist/all', [WhishlistController::class, 'allWishlist'])->name('wishlist.all');


Route::get('/cart-page',[CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('/cart/all', [CartController::class, 'cartAll'])->name('cart.all');
Route::get('/fetch/cart',[CartController::class, 'fetchCart'])->name('cart.fetch');
Route::delete('/remove/cart', [CartController::class, 'removeCart'])->name('cart.destroy');

// Chekout route
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.store');

Route::post('/apply-coupon', [CouponController::class, 'applyCoupon'])->name('coupon.apply');




require __DIR__.'/auth.php';
