<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashbordController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
})->name('welcome');
Route::get('main{id?}', [MainController::class, 'MainView'])->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


#brands 
Route::get('show-brands', [BrandController::class, 'GetBrands'])->name('show-brands');
Route::post('add-brand', [BrandController::class, 'AddBrand'])->name('add-brand');
Route::get('delete-brand/{id}',[BrandController::class, 'DeleteBrands'])->name('delete-brand');
Route::get('edit-brand/{id}', [BrandController::class, 'EditBrands'])->name('edit-brand');
Route::post('update-brand', [BrandController::class, 'UpdateBrands'])->name('update-brand');


#product
Route::get('show-products/{category}', [ProductController::class, 'GetProduct'])->name('show-products');
Route::post('add-product', [ProductController::class, 'AddProduct'])->name('add-product');
Route::get('delete-product/{id}',[ProductController::class, 'DeleteProduct'])->name('delete-product');
Route::get('edit-product/{id}', [ProductController::class, 'EditProduct'])->name('edit-product');
Route::post('update-product', [ProductController::class, 'UpdateProduct'])->name('update-product');

#cart
Route::get('cart', [CartController::class, 'ShowCart'])->name('cart');
Route::get('addtocart/{id}', [CartController::class, 'AddtoCart'])->name('addtocart');
Route::get('addcart/{id}', [CartController::class, 'AddCart'])->name('addcart');
Route::get('deletecart/{did}', [CartController::class, 'DeleteItemCart'])->name('deletecart');
Route::get('removecart/{did}', [CartController::class, 'RemoveCart'])->name('removecart');
Route::get('invoice',[CartController::class, 'Invoice'])->name('invoice')->middleware('auth');
Route::get('resetcart',[CartController::class, 'ResetCart'])->name('resetcart');
    


#dashbord
Route::get('/controlpanel', [DashbordController::class, 'GetAll'])->name('controlpanel');
Route::get('add-brand-view', [DashbordController::class, 'AddBrandView'])->name('add-brand-view');
Route::get('add-category-view', [DashbordController::class, 'AddCategoryView'])->name('add-category-view');
Route::get('add-product-view', [DashbordController::class, 'AddProductView'])->name('add-product-view');