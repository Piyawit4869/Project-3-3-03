<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ListController;
use App\Http\Controllers\ProfileController;

// ส่วนของ Shop
use App\Http\Controllers\Shop\GoodsController;
use App\Http\Controllers\Shop\DetailController;
use App\Http\Controllers\Shop\OrderController;

// ส่วนของ Page
use App\Http\Controllers\Page\IndexController;
use App\Http\Controllers\Page\MenuController;
use App\Http\Controllers\Page\PromoteController;
use App\Http\Controllers\Page\GalleryController;
use App\Http\Controllers\Page\ContactController;
use App\Http\Controllers\Page\AboutController;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('page.index');
});

Route::get('/dashboard', function () {
    $u = User::all();
    $c = Category::all();
    $p = Product::all();
    return view('dashboard',compact('u','c','p'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//เมนู User
Route::get('admin/user/index',[UserController::class, 'index'])->name('u.index');

//เมนู Category
Route::get('admin/category/index',[CategoryController::class, 'index'])->name('c.category');
Route::get('admin/category/create',[CategoryController::class,'create'])->name('c.create');
Route::post('admin/category/insert',[CategoryController::class, 'insert']);
Route::get('admin/category/edit/{id}',[CategoryController::class, 'edit']);
Route::post('admin/category/update/{id}',[CategoryController::class, 'update']);
Route::get('admin/category/delete/{id}',[CategoryController::class, 'delete']);

//เมนู Products
Route::get('admin/product/product',[ProductController::class, 'index'])->name('p.product');
Route::get('admin/product/create',[ProductController::class,'create'])->name('p.create');
Route::post('admin/product/insert',[ProductController::class, 'insert']);
Route::get('admin/product/edit/{id}',[ProductController::class, 'edit'])->name('p.edit');
Route::post('admin/product/update/{id}',[ProductController::class, 'update']);
Route::get('admin/product/delete/{id}',[ProductController::class, 'delete']);

//เมนู List
Route::get('admin/list/index',[ListController::class, 'index'])->name('l.index');

// ส่วนของหน้า Shop
Route::get('shop/goods', [GoodsController::class, 'goods'])->name('shop.goods');
Route::get('shop/detail', [DetailController::class, 'detail'])->name('shop.detail');
Route::get('shop/order', [OrderController::class, 'order'])->name('shop.order');
// การสั่งซื้อสินค้า ส่งข้อมูลเข้า Database
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

//เมนู Gallery
Route::get('admin/gallery/index', [GalleryController::class, 'index'])->name('g.index');
Route::get('admin/gallery/create',[GalleryController::class,'create'])->name('g.create');
Route::post('admin/gallery/insert',[GalleryController::class, 'insert']);
Route::get('admin/gallery/edit/{id}',[GalleryController::class, 'edit'])->name('g.edit');
Route::post('admin/gallery/update/{id}',[GalleryController::class, 'update']);
Route::get('admin/gallery/delete/{id}',[GalleryController::class, 'delete']);

//เมนู Promotion
Route::get('admin/promote/index', [PromoteController::class, 'index'])->name('pm.index');
Route::get('admin/promote/create',[PromoteController::class,'create'])->name('pm.create');
Route::post('admin/promote/insert',[PromoteController::class, 'insert']);
Route::get('admin/promote/edit/{id}',[PromoteController::class, 'edit'])->name('pm.edit');
Route::post('admin/promote/update/{id}',[PromoteController::class, 'update']);
Route::get('admin/promote/delete/{id}',[PromoteController::class, 'delete']);

//เมนู Contact
Route::get('admin/contact/index', [ContactController::class, 'index'])->name('con.index');
Route::post('admin/contact/insert',[ContactController::class, 'insert']);

// ส่วนของหน้า page
Route::get('page/index', [IndexController::class, 'index'])->name('page.index');
Route::get('page/menu', [MenuController::class, 'menu'])->name('page.menu');
Route::get('page/promote', [PromoteController::class, 'promote'])->name('page.promote');
Route::get('page/gallery', [GalleryController::class, 'gallery'])->name('page.gallery');
Route::get('page/about', [AboutController::class, 'about'])->name('page.about');
Route::get('page/contact', [ContactController::class, 'contact'])->name('page.contact');
