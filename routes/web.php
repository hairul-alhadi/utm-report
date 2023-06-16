<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/admin',[App\Http\Controllers\Auth\LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[App\Http\Controllers\Auth\LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[App\Http\Controllers\Auth\RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[App\Http\Controllers\Auth\RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',function(){
    return view('admin.admin');
})->middleware('auth:admin');

Route::resource('reports', App\Http\Controllers\ReportController::class);

Route::get('generate_pdf', [App\Http\Controllers\ReportController::class, 'generatePdf'])->name('reports.generate-pdf');

