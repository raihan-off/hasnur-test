<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseMaterialController;

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



Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::post('/courses', [CourseController::class, 'store']);
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::get('/courses/{course_id}/materials', [CourseController::class, 'showCourseMaterials'])->name('courses.materials');

Route::get('/courses/{course_id}/materials', [CourseMaterialController::class, 'index'])->name('courseMaterials');
Route::post('/materials', [CourseMaterialController::class, 'store']);
Route::get('/materials/{id}', [CourseMaterialController::class, 'show']);
Route::put('/materials/{id}', [CourseMaterialController::class, 'update']);
Route::delete('/materials/{id}', [CourseMaterialController::class, 'destroy']);