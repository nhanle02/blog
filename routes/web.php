<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
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
Route::group([
    'prefix' => 'admin'
], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');

    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('admin.users.store');

    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');

    Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('admin.users.delete'); 

    Route::get('/posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');

    Route::get('/tags', [TagController::class, 'index'])->name('admin.tags.index');
    Route::get('/tags/create', [TagController::class, 'create'])->name('admin.tags.create');
    Route::post('/tags/store', [TagController::class, 'store'])->name('admin.tags.store');
    Route::get('/tags/edit/{id}', [TagController::class, 'edit'])->name('admin.tags.edit');
    Route::post('/tags/update/{id}', [TagController::class, 'update'])->name('admin.tags.update');
    Route::delete('/tags/delete/{id}', [TagController::class, 'delete'])->name('admin.tags.delete');

    // category
    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    // delete and update categories
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete'); 


    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    
    Route::get('/pages', [PageController::class, 'index'])->name('admin.pages.index');
    Route::get('/pages/create', [PageController::class, 'create'])->name('admin.pages.create');

    Route::get('/comments', [CommentController::class, 'index'])->name('admin.comments.index');

    Route::get('/settings', [SettingController::class, 'setting'])->name('admin.settings.index');
});
