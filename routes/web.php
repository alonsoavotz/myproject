<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UsersController;
use App\Models\User;
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

Route::post('/users', [UsersController::class, 'store']);
Route::post('/contacts', [ContactsController::class, 'store']);
Route::post('/tasks', [TasksController::class, 'store']);