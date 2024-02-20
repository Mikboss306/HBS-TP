<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/articles', [ArticleController::class, 'store']);
Route::delete('/articles/{article}', [ArticleController::class, 'destroy']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{article}', [ArticleController::class, 'show']);
