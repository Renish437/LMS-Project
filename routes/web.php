<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\AdminCourseController;
use App\Http\Controllers\backend\AdminInstructorController;
use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\backend\BackendOrderController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CouponController;
use App\Http\Controllers\backend\CourseController;
use App\Http\Controllers\backend\CourseLectureController;
use App\Http\Controllers\backend\CourseSectionController;
use App\Http\Controllers\backend\InfoBoxController;
use App\Http\Controllers\backend\InstructorController;
use App\Http\Controllers\backend\InstructorProfileController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\UserProfileController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\CourseDetailController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\frontend\SocialController;
use App\Http\Controllers\frontend\WhishlistController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('front.home');
Route::get('/course-details/{slug}', [PageController::class, 'courseDetails'])->name('course.details');
Route::post('/wishlist/add', [WhishlistController::class, 'addToWishlist'])->name('wishlist.store');
Route::get('/wishlist/all', [WhishlistController::class, 'allWishlist'])->name('wishlist.all');
Route::get('/cart-page',[CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('/cart/all', [CartController::class, 'cartAll'])->name('cart.all');
Route::get('/fetch/cart',[CartController::class, 'fetchCart'])->name('cart.fetch');
Route::delete('/remove/cart', [CartController::class, 'removeCart'])->name('cart.destroy');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/apply-coupon', [CouponController::class, 'applyCoupon'])->name('coupon.apply');
Route::get('/subcategory/{slug}', [PageController::class, 'subcategory'])->name('front.subcategory');
Route::get('/all-categories', [PageController::class, 'allCategories'])->name('front.all-categories');
Route::get('/category/{slug}', [PageController::class, 'category'])->name('front.category.single');
Route::middleware('auth')->group(function () {
    Route::post('/order',[OrderController::class,'order'])->name('order.store');
    Route::get('/payment-success',[OrderController::class,'success'])->name('success');
    Route::get('/payment-cancel',[OrderController::class,'cancel'])->name('cancel');
});
//Admin Login
Route::get('/admin/login', [AdminController::class,'login'])->name('admin.login');
//Instructor login
Route::get('/instructor/login', [InstructorController::class,'login'])->name('instructor.login');

// User Routes
Route::middleware(['web','auth', 'verified','role:user','prevent-back-history'])->prefix('user')->name('user.')->group(function () {
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
// Instructor Routes
Route::middleware(['web','auth', 'verified','role:instructor','prevent-back-history'])->prefix('instructor')->name('instructor.')->group(function () {
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
//Admin Routes
Route::middleware(['auth', 'verified','role:admin','prevent-back-history'])->prefix('admin')->name('admin.')->group(function () {
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

    // Manage Setting 
    Route::get('/stripe-setting', [SettingController::class,'stripeSetting'])->name('stripe.setting');
    Route::post('/stripe-setting/update', [SettingController::class,'updateStripeSettings'])->name('stripe.settings.update');
    // Google setting
    Route::get('/google-setting', [SettingController::class,'googleSetting'])->name('google.setting');
    Route::post('/google-setting/update', [SettingController::class,'updateGoogleSettings'])->name('google.settings.update');
    // Github setting
    Route::get('/github-setting', [SettingController::class,'githubSetting'])->name('github.setting');
    Route::post('/github-setting/update', [SettingController::class,'updateGithubSettings'])->name('github.settings.update');
    
     // Manage Course by admin
    Route::resource('course', AdminCourseController::class);

    Route::post('/course/update-status',[AdminCourseController::class,'updateStatus'])->name('course.status');
    
    // Manage order 
    Route::get('/order', [BackendOrderController::class,'adminView'])->name('order.index');
    Route::get('/order/{id}', [BackendOrderController::class,'adminShow'])->name('order.show');
    // Route::post('/order/update', [OrderController::class,'update'])->name('order.update');

    //

  

});







require __DIR__.'/auth.php';
