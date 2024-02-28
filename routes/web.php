<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/home',[AdminController::class, 'index']);
route::get('/', [AdminController::class, 'home']);
route::get('/createcars',[AdminController::class, 'createcars']);
route::post('/addcars',[AdminController::class, 'addcars']);
route::get('/viewcars',[AdminController::class, 'viewcars']);
route::get('/reserve/{id}',[HomeController::class,'reserve']);
route::post('/addreserve/{id}',[HomeController::class, 'addreserve']);

route::get('/reservation',[AdminController::class,'reservation']);







