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

// Route::get('/', function () {
//     return view('pages.home');
// });

//Page
Route::get('/',[HomeController::class, 'index']);
Route::get('/book-detail/{book_id}',[HomeController::class, 'bookDetail']);


//Admin
Route::get('/admin',[AdminController::class, 'showAdminPage']);
Route::get('/add-book',[AdminController::class, 'showAddPage']);
Route::post('/add',[AdminController::class, 'addBook']);
Route::get('/list-book',[AdminController::class, 'showListPage']);
