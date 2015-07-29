<?php

namespace MovieCrazy\Http\Controllers;

use MovieCrazy\Http\Controllers\Controller;
use MovieCrazy\LatestMovies;

class HomeController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index() {

		$latestmovies = LatestMovies::latest('release_date')->simplePaginate(8);

		return view('frontend.home')->with('latestmovies', $latestmovies);
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
	 * @return Response
	 */
	public function store() {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {

		$moviedetails = LatestMovies::where("movie_name", $id)->get();

		return view('frontend.moviedetails')->with('moviedetails', $moviedetails);

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
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
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
