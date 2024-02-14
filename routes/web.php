<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;

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

route::get('/test', function () {
    return view('hello');
});

route::get('/parent', function () {
    return view('admin.parent');
});

route::resource('/about', AboutController::class);

route::get('/profile-index', [ProfileController::class, 'index']) -> name('profileroute');
