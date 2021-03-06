<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('controls', [App\Http\Controllers\ControlPanelController::class, 'index'])->name('controls.index');
Route::get('store', [App\Http\Controllers\StorePanelController::class, 'index'])->name('stores.index');
Route::get('view-course', [App\Http\Controllers\CoursesController::class, 'index'])->name('course.index');
Route::get('show-course/{course}', [App\Http\Controllers\CoursesController::class, 'show'])->name('course.show');


//Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','App\Http\Controllers\RoleController');
    Route::resource('users','App\Http\Controllers\UserController');
//});


Route::resource('menu','App\Http\Controllers\MenuController');
Route::resource('categories','App\Http\Controllers\CategoryController');
Route::resource('offers','App\Http\Controllers\OfferController');
Route::resource('opinions','App\Http\Controllers\OpinionController');
Route::resource('abouts','App\Http\Controllers\AboutController');
Route::resource('contacts','App\Http\Controllers\ContactController');
Route::resource('products','App\Http\Controllers\ProductController');
Route::resource('certificates','App\Http\Controllers\CertificateController');
Route::resource('courses','App\Http\Controllers\CourseController');
Route::resource('participations','App\Http\Controllers\ParticipationController');
Route::resource('events','App\Http\Controllers\EventController');
Route::resource('franchises','App\Http\Controllers\FranchiseController');
Route::resource('jobs','App\Http\Controllers\JobController');




