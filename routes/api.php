<?php

use App\Http\Controllers\ApiPostController;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\post;


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





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/posts', [ApiPostController::class, 'getAllPosts']);
    Route::get('/posts/{id}', [ApiPostController::class, 'show']);
    Route::post('/post', [ApiPostController::class, 'store']);
    Route::put('/posts/{id}', [ApiPostController::class, 'update']);
    Route::delete('/posts/{id}', [ApiPostController::class, 'destroy']);
    
    Route::get('/users/popular', [ApiUserController::class, 'getMostPopular']);
    Route::post('/users/{user}/rate', [ApiUserController::class, 'rateUser']);
    Route::get('/users/favorate/{user}', [ApiUserController::class, 'getFavorate']);
    Route::post('/users/favorate', [ApiUserController::class, 'addToFavorate']);
    Route::delete('/users/favorate', [ApiUserController::class, 'removeFromFavorate']);

    Route::get('/admin/posts', [ApiPostController::class, 'getAdminPosts']);
    Route::post('/admin/posts/{post}/approve', [ApiPostController::class, 'adminApprovePost']);

    Route::post('/logout', [AuthController::class,'logout']);
});