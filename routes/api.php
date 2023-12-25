<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseMaterialController;

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

Route::middleware([])->group(function () {
    Route::get('/courses', [CourseController::class, 'index']);
    Route::post('/courses', [CourseController::class, 'store']);
    Route::get('/courses/{id}', [CourseController::class, 'show']);
    Route::put('/courses/{id}', [CourseController::class, 'update']);
    Route::delete('/courses/{id}', [CourseController::class, 'destroy']);
});

Route::middleware([])->group(function () {
    Route::get('/courses/{course_id}/materials', [CourseMaterialController::class, 'index']);
    Route::post('/materials', [CourseMaterialController::class, 'store']);
    Route::get('/materials/{id}', [CourseMaterialController::class, 'show']);
    Route::put('/materials/{id}', [CourseMaterialController::class, 'update']);
    Route::delete('/materials/{id}', [CourseMaterialController::class, 'destroy']);
});
