<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmelController;
use App\Http\Controllers\ProductsController;

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

Route::controller(AmelController::class)->group(function () {
    Route::get('/home', [AmelController::class, 'homepage']);
    Route::get('/about', [AmelController::class, 'about']);
    Route::get('/admin', [AmelController::class, 'admin']);
    Route::get('/contact', [AmelController::class, 'contact']);
    Route::get('/menu', [AmelController::class, 'menust']);
});

Route::controller(ProductsController::class)->group(function (){
    Route::get('/admin', 'index')->name('m_menu');
    Route::post('/admin', 'store');
    Route::post('/admin/edit/{id}', 'edit')->name('m_menu_edit');
    Route::post('/admin/remove/{id}', 'destroy')->name('m_menu_remove');

});