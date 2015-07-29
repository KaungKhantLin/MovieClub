<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('search', array(
		'as'   => 'search',
		'uses' => 'SearchController@index',
	));

Route::resource('ourabout', "AboutController");

Route::resource('/', "HomeController");

Route::group(['prefix' => 'circle'],

	function () {
		Route::resource("d2tk/latestmovie", "BackendLatestMovieController");
		Route::resource("d2tk/theratermovie", "TheraterMovieControl");

	});

Route::resource("home", "HomeController");
Route::resource("theratershow", "TheratersMovies");
Route::resource('theratermovies', "FrontendTheraterMovieController");

Route::group(['prefix' => 'auth'], function () {

		Route::get('login', 'Auth\AuthController@getLogin');
		Route::post('login', 'Auth\AuthController@postLogin');
		Route::get('logout', 'Auth\AuthController@getLogout');

		// Registration routes...
		Route::get('register', 'Auth\AuthController@getRegister');
		Route::post('register', 'Auth\AuthController@postRegister');
	});

Route::get("getdata", function () {

		$term = Input::get('term');
		$results = array();

		$queries = DB::table('latestmovies')
			->where('movie_name', 'LIKE', '%'.$term.'%')
		->take(5)->get();

		foreach ($queries as $query) {
			$results[] = ['id' => $query->id, 'value' => $query->movie_name];
		}

		return Response::json($results);

	});
