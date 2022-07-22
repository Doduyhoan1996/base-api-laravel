<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ConfigController;
use App\Http\Controllers\Api\OptionController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\TopicController;
use App\Http\Controllers\Api\UserController;
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

//api route category
Route::group(['prefix' => 'category'], static function () {
    Route::post('/', [CategoryController::class, 'list']);
    Route::post('create-update', [CategoryController::class, 'createOrUpdate']);
    Route::post('show', [CategoryController::class, 'show']);
});

//api route config
Route::group(['prefix' => 'config'], static function () {
    Route::post('/', [ConfigController::class, 'list']);
    Route::post('create-update', [ConfigController::class, 'createOrUpdate']);
    Route::post('show', [ConfigController::class, 'show']);
});

//api route option
Route::group(['prefix' => 'option'], static function () {
    Route::post('/', [OptionController::class, 'list']);
    Route::post('create-update', [OptionController::class, 'createOrUpdate']);
    Route::post('show', [OptionController::class, 'show']);
});

//api route option
Route::group(['prefix' => 'tag'], static function () {
    Route::post('/', [TagController::class, 'list']);
    Route::post('create-update', [TagController::class, 'createOrUpdate']);
    Route::post('show', [TagController::class, 'show']);
});

//api route option
Route::group(['prefix' => 'topic'], static function () {
    Route::post('/', [TopicController::class, 'list']);
    Route::post('create-update', [TopicController::class, 'createOrUpdate']);
    Route::post('show', [TopicController::class, 'show']);
});

//api route user
Route::group(['prefix' => 'user'], static function () {
    Route::post('/', [UserController::class, 'list']);
    Route::post('create-update', [UserController::class, 'createOrUpdate']);
    Route::post('show', [UserController::class, 'show']);
    Route::post('delete', [UserController::class, 'delete']);
});

//api auth
Route::group(['prefix' => 'auth'], static function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});
