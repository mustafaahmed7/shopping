<?php

Route::get('admin/test',function (){

    return view('admin.test');
});
Auth::routes();

//Admin
Route::get('/admin', 'Admin\AdminController@index')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin Category
Route::get('/admin/category', 'Admin\CategoryController@category')
        ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/category/add', 'Admin\CategoryController@addGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/category/add', 'Admin\CategoryController@addPost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/category/update/{id?}', 'Admin\CategoryController@updateGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/category/update', 'Admin\CategoryController@updatePost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/category/delete/{id?}', 'Admin\CategoryController@deleteGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin Products
Route::get('/admin/product', 'Admin\ProductController@index')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/product/add', 'Admin\ProductController@addGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/product/add', 'Admin\ProductController@addPost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/product/update/{id?}', 'Admin\ProductController@updateGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/product/update/image/{id?}','Admin\ProductController@removeImageGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin Post Update Products
Route::post('/admin/product/update', 'Admin\ProductController@updatePost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/product/delete/{id?}', 'Admin\ProductController@deleteGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin Settings
Route::get('/admin/settings', 'Admin\SettingsController@settingsGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin Slider
Route::get('/admin/settings/slider', 'Admin\SliderController@sliderGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/settings/slider/add', 'Admin\SliderController@addSliderPost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/settings/slider/add', 'Admin\SliderController@addSliderGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/settings/slider/delete/{id?}', 'Admin\SliderController@deleteSliderGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/settings/slider/update', 'Admin\SliderController@updateSliderPost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/settings/slider/update/{id?}', 'Admin\SliderController@updateSliderGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin Media
Route::get('/admin/media', 'Admin\MediaController@media')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/media/add', 'Admin\MediaController@addMediaGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/media/add', 'Admin\MediaController@addMediaPost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/media/update/{id?}', 'Admin\MediaController@updateMediaGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/media/update', 'Admin\MediaController@updateMediaPost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/media/delete/{id?}', 'Admin\MediaController@deleteMediaGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin Orders
Route::get('/admin/order', 'Admin\OrdersController@orders')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/order/detail/{id?}', 'Admin\OrdersController@detail')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/order/delete/{id?}', 'Admin\OrdersController@deleteOrderGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin Mail
Route::get('/admin/mail', 'Admin\MailController@mail')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/mail', 'Admin\MailController@send')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin User
Route::get('/admin/user', 'Admin\UserController@user')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/user/update/{id?}', 'Admin\UserController@userUpdateGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin Shipping
Route::get('/admin/shipping', 'Admin\ShippingController@shipping')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/shipping/add', 'Admin\ShippingController@addShippingGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/shipping/update/{id?}', 'Admin\ShippingController@updateShippingGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/shipping/add', 'Admin\ShippingController@addShippingPost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/shipping/update', 'Admin\ShippingController@updateShippingPost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Admin Coupons
Route::get('/admin/coupon', 'Admin\CouponController@coupon')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/coupon/add', 'Admin\CouponController@addCouponGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/coupon/add', 'Admin\CouponController@addCouponPost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/coupon/update/{id?}', 'Admin\CouponController@updateCouponGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::post('/admin/coupon/update', 'Admin\CouponController@updateCouponPost')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);
Route::get('/admin/coupon/delete/{id?}', 'Admin\CouponController@deleteCouponGet')
    ->middleware(\App\Http\Middleware\RolesMiddleware::class);

//Home
Route::get('/', 'IndexController@index');
Route::get('/profile', 'HomeController@index')->name('profile');

//Categories
Route::get('/category/{title?}', 'CategoryController@categoryGet');

//Cart
Route::get('/cart', 'CartController@cart');
Route::get('/cart/add/{id?}', 'CartController@cartAddGet');
Route::get('/cart/remove/{id?}', 'CartController@cartRemoveGet');
Route::get('/cart/update/{id?}/{quantity?}', 'CartController@cartUpdateGet');
Route::get('/cart/qty/{id?}/{quantity?}', 'CartController@addCartWithQtyGet');

//Checkout
Route::get('/cart/checkout', 'CheckoutController@checkout');
Route::post('/cart/checkout', 'CheckoutController@checkoutPost');

//Products
Route::get('/product/{id?}', 'ProductController@productByIdGet');

//Search
Route::get('/search/{search?}', 'SearchController@search');

//WishList
Route::get('/wishlist', 'WishListController@wishlist');

//BestSeller
Route::get('/best', 'BestSellerController@bestseller');

//Thank You Order Shipped
Route::get('/thank-you', 'CheckoutController@thank_you');