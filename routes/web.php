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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('test','UserController@test');
Auth::routes();


Route::get('/','PageController@index');
Route::post('/user_register','UserController@register');
Route::get('/user_register_form',function (){
    return view ('auth.register');
});
Route::post( 'user_login','UserController@login');
Route::get('/logout_user', 'UserController@logout_user');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'UserController@dashboard')->name('dashboard'); 
    Route::get('/create_record','RecordController@form'); 
    Route::post( '/store_record','RecordController@store');
    Route::get( '/category', 'UserController@category');
    Route::get( '/add_category', 'UserController@add_category');
    Route::post( '/add_category','UserController@store_category');
    Route::get('/change_role/{id}','UserController@change_role');
    Route::get( '/projects','TaskController@show');
    Route::get( '/project_details/{id}','TaskController@details');
    Route::get('apply_for_project/{id}', 'TaskController@apply_for_project');
    Route::get('/search','TaskController@search');
    Route::post('send_proposal/{id}','ProposalController@proposal');
    Route::get('pro_request','ProposalController@pro_request');
    Route::get('teams','UserController@team');
    Route::get('logs','TaskLogController@index');
});
Route::get('test',function (){
return view('back.project.userproject');
});

Route::get('events','EventController@index')->name('events.index');
Route::post('events','EventController@addEvent')->name('events.add');
Route::get( '/addevents','EventController@addEventForm');
Route::get( '/eventDetails','EventController@eventDetails');
Route::get( 'event_delete/{id}','EventController@delete');
