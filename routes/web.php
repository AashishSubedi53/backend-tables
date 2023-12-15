<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ItemsController;

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

Route::get('/', [TestController::class, 'index'])->name('home');

Route::get('/home/videos', function () {
    return view('home');

});
Route::get('/contact', [TestController::class, 'contact'])->name('contact');
Route::get('/form', [TestController::class, 'form'])->name('form');
Route::get('/about/videos', function () {
    return view('about');

});


Route::get('/about', function () {
    return view('about');

})->name('about');

Route::get('/products', [TestController::class, 'products'])->name('products');
Route::get('/products/{id}', [TestController::class, 'product'])->name('product');
Route::post('/product-form', [TestController::class, 'productForm'])->name('product-form');


// Routes for items

Route::get('/items', [ItemsController::class, 'items'])->name('items');
Route::get('items/add', [ItemsController::class, 'add'])->name('add');
Route::post('items/add', [ItemsController::class, 'addItems'])->name('addItems');
Route::get('items/edit/{id}', [ItemsController::class, 'editItems'])->name('editItems');
Route::post('items/edit/{id}', [ItemsController::class, 'updateItems'])->name('updateItems');
Route::post('items/{id}/delete', [ItemsController::class, 'deleteItems'])->name('deleteItems');


// Routes for itemsCategory

Route::get('/itemsCategory', [ItemsController::class, 'itemsCategory'])->name('itemsCategory');
Route::get('/itemsCategory/add', [ItemsController::class, 'addCategory'])->name('addCategory');
Route::post('/itemsCategory/add', [ItemsController::class, 'addItemsCategory'])->name('addItemsCategory');
Route::get('/itemsCategory/edit/{id}', [ItemsController::class, 'editCategory'])->name('editCategory');
Route::post('/itemsCategory/edit/{id}', [ItemsController::class, 'updateCategory'])->name('updateCategory');
Route::post('/itemsCategory/{id}/delete', [ItemsController::class, 'deleteCategory'])->name('deleteCategory');

// Routes for blog

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/compose', [BlogController::class, 'composeBlog'])->name('composeBlog');
Route::post('/blog/compose', [BlogController::class, 'insertBlog'])->name('insertBlog');
Route::get('/blog/edit/{id}', [BlogController::class, 'editBlog'])->name('editBlog');
Route::post('/blog/edit/{id}', [BlogController::class, 'updateBlog'])->name('updateBlog');
Route::post('/blog/{id}/delete', [BlogController::class, 'deleteBlog'])->name('deleteBlog');




// Routes for blog category

Route::get('/blogCategory', [BlogController::class, 'blogCategory'])->name('blogCategory');
Route::get('/blogCategory/add', [BlogController::class, 'addBlogCategory'])->name('addBlogCategory');
Route::post('/blogCategory/add', [BlogController::class, 'insertBlogCategory'])->name('insertBlogCategory');
Route::get('/blogCategory/edit/{id}', [BlogController::class, 'editBlogCategory'])->name('editBlogCategory');
Route::post('/blogCategory/edit/{id}', [BlogController::class, 'updateBlogCategory'])->name('updateBlogCategory');
Route::post('/blogCategory/{id}/delete', [BlogController::class, 'deleteBlogCategory'])->name('deleteBlogCategory');


