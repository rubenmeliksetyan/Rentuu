<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
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
Route::prefix('v1')->group(static function () {
    Route::prefix('articles')->controller(ArticleController::class)->group(static function () {
        Route::get('/',  'index');

        Route::prefix('{slug}')->group(static function () {
            Route::get('/',  'show');
            Route::put('/like',  'like');
        });
//        dd(request());
        Route::post('/{article:slug}/comments', [CommentController::class, 'create']);
    });

    Route::prefix('tags')->controller(TagController::class)->group(static function () {
        Route::get('/',  'index');
    });
});

