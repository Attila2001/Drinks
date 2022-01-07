<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\drinkPostController;
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
Route::get( '/drinks', [ drinkPostController::class, 'index' ]);
Route :: get ( '/drinks/{drinkPost}' , [ drinkPostController::class, 'show' ]);
Route::get( '/drinks/create/post', [ drinkPostController::class, 'create' ]);
Route::post( '/drinks/create/post', [ drinkPostController::class, 'store' ]);
Route::get( '/drinks/{drinkPost}/edit', [ drinkPostController::class, 'edit' ]);
Route::put( '/drinks/{drinkPost}/edit', [ drinkPostController::class, 'update' ]);
Route::delete( '/drinks/{drinkPost}', [ drinkPostController::class, 'remove' ]);