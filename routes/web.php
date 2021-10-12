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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'supplierHome'])->name('supplier.home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_admin');

///COMPANY///
//PRODUCT
Route::get('/product/index', [App\Http\Controllers\Company\ProductController::class, 'index'])->name('productIndex');
Route::get('/product/add', [App\Http\Controllers\Company\ProductController::class, 'create'])->name('productAdd');
Route::post('product/store', [App\Http\Controllers\Company\ProductController::class, 'store'])->name('productStore'); 
Route::get('product/edit/{product:uuid}', [App\Http\Controllers\Company\ProductController::class, 'edit'])->name('productEdit');
Route::post('product/update/{product}', [App\Http\Controllers\Company\ProductController::class, 'update'])->name('productUpdate');  
Route::get('product/delete/{product}', [App\Http\Controllers\Company\ProductController::class, 'delete'])->name('productDelete');

//SUPPLIER
Route::get('/supplier/index', [App\Http\Controllers\Company\SupplierController::class, 'index'])->name('supplierIndex');


///SUPPLIER///
//COMPONENT
Route::get('/component/index', [App\Http\Controllers\Supplier\ComponentController::class, 'index'])->name('componentIndex');
Route::get('/component/add', [App\Http\Controllers\Supplier\ComponentController::class, 'create'])->name('componentAdd');
Route::post('/component/store', [App\Http\Controllers\Supplier\ComponentController::class, 'store'])->name('componentStore');
Route::get('component/edit/{component}', [App\Http\Controllers\Supplier\ComponentController::class, 'edit'])->name('componentEdit');
Route::post('component/update/{component}', [App\Http\Controllers\Supplier\ComponentController::class, 'update'])->name('componentUpdate');
Route::get('component/delete/{component}', [App\Http\Controllers\Supplier\ComponentController::class, 'delete'])->name('componentDelete');

//PRODUCT
