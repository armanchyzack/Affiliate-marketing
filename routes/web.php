<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController\ProductController;
use App\Http\Controllers\BackendController\CategoryController;
use App\Http\Controllers\FrontEndController\AllBlogController;
use App\Http\Controllers\BackendController\DashboardController;
use App\Http\Controllers\BackendController\NavBarController;
use App\Http\Controllers\FrontEndController\IndexController;

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
//! Front-end route start
Route::controller(IndexController::class)->group(function(){
    route::get('/', 'index')->name('view');

});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('all-blog')->name('all.blog')->controller(AllBlogController::class)->group(function(){
    route::get('/', 'viewBlog')->name('view');

});

//! Front-end route end
//! back-end route start
Route::get('/dashboard', [DashboardController::class, 'index'])->name('view.dashboard');
Route::prefix('nav-bar')->name('navbar.')->controller(NavBarController::class)->group(function(){
    route::get('/', 'view')->name('view');
    route::post('/add', 'insert')->name('add');
    route::put('/update/{navs:id}', 'update')->name('update');
});

Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function(){
    route::get('/', 'viewCategory')->name('view');
    route::post('/add', 'insertCategory')->name('add');
    route::get('/all', 'allCategory')->name('all');
    route::get('/edit/{categories:id}', 'editCategory')->name('edit');
    route::put('/edit/{categories:slug}', 'updateCategory')->name('update');
    route::delete('/delete/{categories:slug}', 'deleteCategory')->name('delete');
    route::get('/changeStatus{categories}', 'changeCategoryStatus')->name('status');
});
Route::prefix('sub-category')->name('sub.category.')->controller(CategoryController::class)->group(function(){
    route::get('/', 'viewCategory')->name('view');
    route::post('/add', 'insertSubCategory')->name('add');
    route::get('/all', 'allSubCategory')->name('all');
    route::get('/changeStatus{sub_categories}', 'changeStatus')->name('status');
    route::get('/edit/{sub_categories:id}', 'editSubCategory')->name('edit');
    route::put('/update/{sub_categories:id}', 'updateSubCategory')->name('update');
    route::delete('/delete/{sub_categories:slug}', 'deleteSubCategory')->name('delete');

});
Route::prefix('product')->name('product.')->controller(ProductController::class)->group(function(){
    route::get('/', 'viewProduct')->name('view');
    route::post('/add', 'insertProduct')->name('add');
    route::get('fetch-sub-category/{id}', 'fetchSubCategory')->name('fetch.subcategory');
    route::get('/all', 'allProduct')->name('all');
    route::get('/changeStatus{products}', 'changeProductStatus')->name('status');
    route::get('/edit/{products:id}', 'editProduct')->name('edit');
    route::put('/update/{products:id}', 'updateProduct')->name('update');
    route::delete('/delete/{products:id}', 'deleteProduct')->name('delete');
});
//! back-end route end

