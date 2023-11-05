<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/greeting')->controller(PostController::class)->group(function () {

    Route::get('/', 'racine')->name('index');

    Route::get('/{slug}-{id}', 'slug')->where([
        'slug' => '[A-Za-z0-9\-]+',
        'id' => '[0-9]+'
    ])->name('greeting');
});


