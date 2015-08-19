<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});

Route::get('/', function()
{
	//return redirect('hotel');
        return Redirect('hotel');
});

Route::get('/', function()
{
	return Redirect::route('hotel.index');
});

Route::resource('/hotel','HotelController');

Route::post('/hotel/searchdata', 'HotelController@search');
Route::post('/hotel/searchdata/{postdata}', 'HotelController@search');

Route::post('/hotel/searchdatasort', 'HotelController@searchdatasort');
Route::post('/hotel/searchdatasort/{postdata}', 'HotelController@searchdatasort');

Route::get('hotel/delete/{id}',[
    'uses'=>'HotelController@destroy',
    'as'=>'hotel.destroy'
]);
