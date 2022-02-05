<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LibraryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/books', [BookController::class,'index']);
//Route::get('/authors',[AuthorController::class,'index']);
//Route::get('/libraries',[LibraryController::class,'index']);

Route::resource('books',BookController::class);
Route::resource('authors',AuthorController::class);
Route::resource('libraries',LibraryController::class);

Route::get('/book/{id}', [BookController::class, 'show']);
Route::get('/book/search/{name}',[BookController::class,'search']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });
    Route::post('/createlibrary',[LibraryController::class, 'store']);
    Route::delete('/books/delete/{id}',[BookController::class,'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});