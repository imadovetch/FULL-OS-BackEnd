<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CHAT\NonFriendController;



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
// Route::get('/test', [NonFriendController::class, 'test']);
Route::get('/', function () {
    return view('welcome');
});

