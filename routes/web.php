<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GraphicDesignController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NiceToMeetYouController;
use App\Http\Controllers\UxUiDesignController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/nice-to-meet-you', [NiceToMeetYouController::class, 'index']);
Route::get('/services/ux-ui-design', [UxUiDesignController::class, 'index']);
Route::get('/services/graphic-design', [GraphicDesignController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact.index');
Route::post('/contact', [ContactController::class, 'sendEmail'])
    ->name('contact.sendEmail');



