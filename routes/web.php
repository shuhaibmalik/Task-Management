<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//     return view('welcome');
// });
Route::get('/', [HomeController::class,'index']);
Route::post('/login', [HomeController::class, 'login'])->name('login');
Route::get('/task', [HomeController::class,'viewTask'])->name('task');
Route::get('/add_task', [HomeController::class, 'addTask'])->name('add_task');
Route::post('/create_task', [HomeController::class, 'createTask'])->name('create_task');
Route::put('/update_status', [HomeController::class, 'statusUpdate']);

