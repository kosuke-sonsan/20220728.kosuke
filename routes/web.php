<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Ask;

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


Route::get('/contact', [TestController::class, 'index'])->name('form.show');
Route::post('/contact', [TestController::class, 'post'])->name('form.post');

Route::get('/contact/confirm', [TestController::class, 'confirm'])->name('confirm.show');
Route::post('/contact/confirm', [TestController::class, 'send'])->name('confirm.send');

Route::get('/contact/thanks', [TestController::class, 'send'])->name('send');
Route::post('/contact/thanks', [TestController::class, 'send'])->name('send.show');

Route::get('/contact', [TestController::class, 'regist'])->name('back');

Route::get('/admin/login', function () {
    return view('adminLogin');
})->middleware('guest:admin');

Route::get('/admin/dashboard', function(){
  return view('adminDashboard');
})->middleware('auth:admin');

Route::post('/admin/login', [\App\Http\Controllers\AdminController::class, 'adminLogin'])->name('admin.login');

Route::get('/admin/logout', [\App\Http\Controllers\AdminController::class, 'adminLogout'])->name('admin.logout');

Route::get('/admin/register', [\App\Http\Controllers\RegisterController::class, 'adminRegisterForm'])->middleware('auth:admin');

Route::post('/admin/register', [\App\Http\Controllers\RegisterController::class, 'adminRegister'])->middleware('auth:admin')->name('admin.register');

Route::post('admin/serach', [TestController::class, 'serach'])->middleware('auth:admin')->name('admin.serach');