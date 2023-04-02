<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CheckOutController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

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

// Display Welcome
Route::get('/Welcome', function () {
    return view('customer.welcome');
})->name('welcome');
// Sign In
Route::post('/SignIn',[UserController::class, 'login'])->name('auth.signin');
// Sign Up
Route::post('/SignUp',[UserController::class, 'store'])->name('auth.signup');
// Logout
Route::get('/Logout', function(){
    Auth::logout();
    return redirect()->route('welcome');
})->name('logout');

// Display Admin Home
Route::get('/Home',[UserController::class, 'AdminHome'])->name('home.admin');
// Display Admin Management
Route::get('/Product',[UserController::class, 'AdminProduct'])->name('product.admin');
// Display Admin Upload Product
Route::get('/AddProduct',[UserController::class, 'UploadProduct'])->name('upload.Product'); // FIX
// Display Admin Category
Route::get('/Category',[CategoryController::class, 'index'])->name('category.admin');
// Display Add Admin Category
Route::get('/UploadCategory',[CategoryController::class, 'create'])->name('upload.category');
// Function Add Admin Category
Route::post('/SuccessCategory',[CategoryController::class, 'store'])->name('category.store');
// Display Edit Admin Category
Route::get('/EditCategory/{id}',[CategoryController::class, 'edit'])->name('edit.category');
// Function Edit Admin Category
Route::post('/SuccessUpdateCategory/{id}',[CategoryController::class, 'update'])->name('update.category');
// Function Delete Category Admin
Route::get('/DeleteCategory/{id}',[CategoryController::class, 'destroy'])->name('delete.category');
// Display Admin-Staff
Route::get('/Staff', [UserController::class, 'staff'])->name('auth.staff');
// Display Add Account Admin-Staff
Route::get('/AddAccount',[UserController::class, 'showAddAccount'])->name('add.account');
// Function Add Account Admin - Cusstomer
Route::post('/UploadAccount',[UserController::class, 'store1'])->name('upload.account.admin');
// Display Brand Admin-Staff
Route::get('/Brand',[BrandController::class, 'showBrand'])->name('show.brand');
// Display Add Brand Admin-Staff
Route::get('/ShowAddBrand',[BrandController::class, 'addBrand'])->name('add.brand');
// Function Add Brand Admin-Staff
Route::post('/BrandStore',[BrandController::class, 'store'])->name('brand.store');
// Display Edit Brand Admin-Staff
Route::get('/BrandEdit/{id}',[BrandController::class, 'edit'])->name('brand.edit');
// Function Edit Brand Admin-Staff
Route::post('/BrandUpdate/{id}',[BrandController::class, 'update'])->name('brand.update');
// Function Delete Brand Admin-Staff
Route::get('/BrandDelete/{id}',[BrandController::class, 'destroy'])->name('brand.destroy');
// Display Profile
Route::get('/Profile/{id}',[UserController::class, 'displayProfile'])->name('display.profile');
// Display Admin Product Sale %
Route::get('/ProductSale',[UserController::class, 'AdminProductSale'])->name('display.product.sale');
// Function Update Profile Admin
Route::post('/UpdateProfile',[UserController::class,'updateProfile'])->name('update.profile.admin');
// Display Change Password Admin
Route::get('/ChangePass',[UserController::class, 'Password'])->name('display.change.pwd');
// Function Change Pwd Admin
Route::post('/NewPwd',[UserController::class,'changePwd'])->name('pwd.new');

// Function Admin Upload Product
Route::post('/UploadProduct',[ProductController::class, 'store'])->name('add.product');
// Display & Function Update Product
Route::get('/UpdateProdcut/{id}', [ProductController::class , 'edit'])->name('update.product');
Route::post('/UpdateProductSuccess', [ProductController::class, 'update'])->name('update.product.success');
// Function Delete Product
Route::get('/DeleteProduct/{id}',[ProductController::class, 'delete'])->name('delete.product');
// Function Search Product Customer
Route::post('/CustomerSearch',[ProductController::class, 'search'])->name('customer.search');
// Function Search Product Admin
Route::post('/AdminSearch', [UserController::class, 'search'])->name('admin.search');

// Display Customer
Route::get('/',[CustomerController::class, 'Customer'])->name('customer');
// Add Product -> Cart - Customer
Route::get('/CartProduct/{id_product}',[CustomerController::class, 'cart'])->name('cart.product');
// Display Cart - Customer
Route::get('/ShowCart/{id_customer}',[CustomerController::class,'showCart'])->name('show.cart');
Route::get('/ShowCart',[CustomerController::class,'showCart_NoUser']);
// Display Detail Product
Route::get('/DetailProduct/{id}',[CustomerController::class, 'Detail_Product'])->name('detail.product');
// Display Profile Customer
Route::get('Account',[CustomerController::class, 'AccountCustomer'])->name('show.account');
// Function Update Profile Customer
Route::post('/UpdateProfileCustomer',[CustomerController::class,'updateProfileCustomer'])->name('customer.profile.update');
// Display Check Out Customer
Route::get('CheckOut',[CustomerController::class,'DisplayCheckOut'])->name('customer.checkout');
// Function Check Out Customer
Route::post('Order',[CheckOutController::class,'AddOrder'])->name('order.customer'); 