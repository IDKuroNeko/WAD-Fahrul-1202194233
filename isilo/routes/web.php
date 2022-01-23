<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::group(['middleware' => ['auth']], function () { 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //product route
    Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('product', [ProductController::class, 'index'])->name('product.index');
    Route::get("/product/create/{id}", function(){
        return view("product.create");
     })->name("product.create.order");


    //order route
    Route::resource('order', App\Http\Controllers\OrderController::class);
    Route::put('order/show/{id}', [App\Http\Controllers\OrderController::class, 'show_update'])->name('order.show.update');
    Route::put('order/shipping/update/{id}', [App\Http\Controllers\OrderController::class, 'shipping'])->name('order.shipping.update');
    Route::get("/order/method/{id}", function(){
        return view("order.method");
     })->name("order.method");
     Route::get("/order/shipping/{id}", function(){
        return view("order.shipping");
     })->name("order.shipping");
     Route::get('/order/checkout/{id}', [App\Http\Controllers\OrderController::class, 'checkout'])->name('order.checkout');
     Route::get('/order/payment/{id}', [App\Http\Controllers\OrderController::class, 'payment'])->name('order.payment'); 
     Route::get('/order/payment/update/{id}', [App\Http\Controllers\OrderController::class, 'payment_update'])->name('order.payment.update'); 
     Route::get('/order/address/{id}', [App\Http\Controllers\OrderController::class, 'address'])->name('order.address'); 
     Route::post('/order/address/update/{id}', [App\Http\Controllers\OrderController::class, 'address_update'])->name('order.address.update');
     Route::put('/order/service/update/{id}', [App\Http\Controllers\OrderController::class, 'service_update'])->name('order.service.update');
     Route::get('/admin' , [App\Http\Controllers\OrderController::class, 'admin_index'])->name('order.admin'); 
     Route::put('/admin/confirmation/{id}', [App\Http\Controllers\OrderController::class, 'confirmation'])->name('order.confirmation');    
     Route::get('/product/design/create', [App\Http\Controllers\ProductController::class, 'design'])->name('product.design');
     Route::post('/product/design/store', [App\Http\Controllers\ProductController::class, 'design_store'])->name('product.design.store');    
});



Route::get('/about', function () {
    return view('about.index');
})->name('about.index');

Route::get("/service", function(){
    return view("service.index");
 })->name("service.index");

Route::get('portofolio', [App\Http\Controllers\ProductController::class, 'portofolio'])->name('portofolio.index');
