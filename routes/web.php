<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

route::get('/addfood', [AdminController::class, 'addfood']);
route::post('/addfood', [AdminController::class, 'addfooddb']);
route::get('/orders', [AdminController::class, 'orders']);
route::get('/showsproducts', [AdminController::class, 'showsproducts']);
//usercontroller
route::get('/home', [HomeController::class, 'home']);
route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/Orders', [HomeController::class, 'Orders']);