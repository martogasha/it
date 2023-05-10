<?php

use App\Http\Controllers\IndexController;
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
Route::get('contacts', [IndexController::class, 'contact']);
Route::get('news', [IndexController::class, 'news']);
Route::get('newsDetail', [IndexController::class, 'newsDetail']);
Route::get('Networking', [IndexController::class, 'Networking']);
Route::get('websiteDesign', [IndexController::class, 'websiteDesign']);
Route::get('softwareDevelopment', [IndexController::class, 'softwareDevelopment']);
Route::get('digitalMarketing', [IndexController::class, 'digitalMarketing']);

