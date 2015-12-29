<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','public_view_controller@index');

Route::get('/contact','public_view_controller@contact');
    
Route::get('/gallery','public_view_controller@gallery');
        
Route::get('/about','public_view_controller@about');
            
Route::get('/publication','public_view_controller@publication');
                
Route::get('/teachers','public_view_controller@teachers');

Route::get('/standards','public_view_controller@standards');

Route::get('/reviews','public_view_controller@reviews');

Route::get('/jobs','public_view_controller@jobs');

Route::get('/job','public_view_controller@job');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
