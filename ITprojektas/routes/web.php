<?php

use App\Http\Controllers\CommentControler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserControler;
use App\Models\Post;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('post/create', [PostController::class, 'fillDropdown'])->middleware('can:create, App\Models\Post');
Route::post('post/store', [PostController::class, 'store'])->middleware('can:create, App\Models\Post');
Route::get('post/{id}', [PostController::class, 'index']);
Route::get('post/delete/{id}', [PostController::class, 'delete'])->middleware('can:delete, App\Models\Post');

Route::resource('users', UserControler::class);
Route::resource('comments', CommentControler::class);
// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('home.index');
// });
