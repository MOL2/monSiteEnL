<?php

use App\Http\Controllers\LivreController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Models\Post;
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
//    dd(Post::all());
    return view('layout.app');
});

Route::get('presentation', function () {
    return view('presentation');
});

Route::get('aPropo', function () {
    return view('aPropo');
});

Route::get ('pageA', [ ProjectController::class,'index']);

Route::get ('pageB/{id}', [ ProjectController::class,'test']);

Route::resource ('posts', PostController::class);

Route::resource ('livres', LivreController::class);
