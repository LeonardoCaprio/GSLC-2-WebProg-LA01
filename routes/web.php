<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
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

Route::get('/addForm', [CourseController::class, 'addForm'])->name('add_form_view');
Route::post('/addForm', [CourseController::class, 'addLogic'])->name('add_logic');
Route::get('/course', [CourseController::class, 'course'])->name('course_view');
Route::get('/', [CourseController::class, 'home'])->name('home_view');
