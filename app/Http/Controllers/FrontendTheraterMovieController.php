<?php

namespace MovieCrazy\Http\Controllers;

use Illuminate\Http\Request;

use MovieCrazy\Http\Controllers\Controller;

use MovieCrazy\LatestMovies;
use MovieCrazy\TheraterMovie;

class FrontendTheraterMovieController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$theratermovies = TheraterMovie::latest('showday')->simplePaginate(8);
		;
		return view('frontend.moviestherater')->with('theratermovies', $theratermovies);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$theratermovies = LatestMovies::where("movie_name", $id)->get();
		$theratershow   = TheraterMovie::where("show_movie", $id)->get();

		return view('frontend.movietheraterdetails')

			->with('theratermovies', $theratermovies)
			->with('theratershow', $theratershow);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}
}
