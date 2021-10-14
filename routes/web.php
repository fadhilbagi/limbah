<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LimbahController;
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
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('dash', ['as' => 'dashboad', 'uses' => 'App\Http\Controllers\UserController@dash']);
Route::get('limbah', [LimbahController::class, 'index'])->name('limbah.index');
Route::get('/', function () {
    return view('welcome');
});
