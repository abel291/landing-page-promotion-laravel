<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Form;
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


// Route::get('/', function () {
//     return view('app');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/delete-promotion', [HomeController::class, 'deletePromotion'])->name('deletePromotion');

Route::get('/export-promotion-list', [HomeController::class, 'exportPromotionList'])->name('exportPromotionList');
