<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('users', 'UserController')->middleware('auth');


// Route controller shop*


Route::resource('categories', 'CategoriesController');

Route::resource('products', 'ProductsController');

Route::resource('orderStatuses', 'OrderStatusController');

Route::resource('deliveries', 'DeliveryController');

Route::resource('banners', 'BannerController');

Route::resource('customers', 'CustomerController');

Route::resource('orders', 'OrderController');



// router front end


//trang chu



//Route::get('/trang-chu', 'HomeController@getIndex');

// Route::get('/', function () {
//     return view('clothshop.index');
// });

//Route::get('/loai-sp', function () {
//    return view('clothshop.categories');  //giao diện không thôi thì làm như 3 cái này
//});

// Route::get('/sanpham', function () {
//     return view('clothshop.products');
// });

//Route::get('/dangnhap', function () {
//    return view('clothshop.login');
//});

//Route::get('/taotaikhoan', function () {
//    return view('clothshop.register');
//});

// Route::get('/chitietsp', function () {
//     return view('clothshop.singleproduct');
// });

//Route::get('/giohang', function () {
//    return view('clothshop.shopcart');
//});

Route::get('/diachigiaohang', function () {
    return view('clothshop.shipaddress');
});

Route::get('/hinhthucthanhtoan', function () {
    return view('clothshop.payment');
});

Route::get('/xacnhanthanhtoan', function () {
    return view('clothshop.summary');
});

Route::get('/hoantatdonhang', function () {
    return view('clothshop.finish');
});

Route::get('/thongtin', function () {
    return view('clothshop.about');
})->name('thongtin');

Route::get('/lienhe', function () {
    return view('clothshop.contact');
})->name('lienhe');







Route::get('/', 'PageController@getIndex')->name('trangchu');

Route::get('/sanpham', 'PageController@getProduct')->name('sanpham');

Route::get('/chi-tiet-sanpham/{id}', 'PageController@productDetail')->name('productDetail');

Route::get('/loai-san-pham/{id}', 'PageController@getProductCategories')->name('productCategories');

Route::get('/add-to-cart/{id}', 'PageController@getAddToCart')->name('addToCart');

Route::get('/checkout', 'PageController@getCheckout')->name('checkout');

Route::post('/checkout', 'PageController@postCheckout')->name('checkout');

Route::get('/del-cart/{id}', 'PageController@getDelItemsCart')->name('dellProductCart');

Route::get('/count', 'PageController@count')->name('count');

Route::get('/dashboard', 'PageController@dashboard')->name('dashboard');



