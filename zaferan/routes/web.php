<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
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
    return view('client.index');
});
Route::get('/contact', function () {
    return view('client.contact');
});
Route::get('/about', function () {
    return view('client.about');
});
Route::post('/contact', [ContactController::class, 'sendComment'])
->name('contact');
Route::get('/blog', [BlogController::class, 'viewblog'])
->name('viewblog');
Route::get('/blog/{slug}', [BlogController::class, 'viewpostblog'])
->name('viewpostblog');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/order', [OrderController::class, 'order'])
->middleware('auth')
->name('order');
Route::post('/order', [OrderController::class, 'createorder'])
->middleware('auth')
->name('createorder');
require __DIR__.'/auth.php';

Route::get('/admin', [AdminController::class, 'admin'])
->middleware('is_admin')
->name('admin');
Route::get('/admin/orders', [OrderController::class, 'orders'])
->middleware('is_admin')
->name('adminorders');
Route::post('/admin/orders/approve', [OrderController::class, 'approveorders'])
->middleware('is_admin')
->name('approveorders');
Route::post('/admin/orders/disapprove', [OrderController::class, 'disapproveorders'])
->middleware('is_admin')
->name('disapproveorders');
Route::get('/admin/posts', [BlogController::class, 'showposts'])
->middleware('is_admin')
->name('showposts');
Route::get('/admin/blog/new', [BlogController::class, 'showformpost'])
->middleware('is_admin')
->name('showformpost');
Route::post('/admin/blog/savepost', [BlogController::class, 'addblogpost'])
->middleware('is_admin')
->name('savepost');
Route::get('/admin/contacts', [ContactController::class, 'showcontacts'])
->middleware('is_admin')
->name('showcontacts');