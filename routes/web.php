<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/courses', 'CourseController');
//Route::resource('/mentors', 'MentorController');
//

// Route::group(['middleware' => ['auth','admin']], function() {
//     Route::get('/admin' , function(){
//         return view('admin.dashboard.dashboard');
//     });

// });
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('/users', 'UsersController',['except'=>['show','create','store']]);
        Route::resource('/mentors', 'MentorController');
        Route::resource('/colleges', 'CollegeController');
        
});



