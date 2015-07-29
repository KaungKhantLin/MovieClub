<?php

namespace MovieCrazy\Http\Controllers;
use MovieCrazy\Http\Controllers\Controller;
use MovieCrazy\LatestMovies;

class SearchController extends Controller {
	public function index() {
		if (\Input::has('query')) {
			$query = \Input::get('query');

			$moviedetails = LatestMovies::where('movie_name', '=', $query)->get();

			return view('frontend.moviedetails')->with('moviedetails', $moviedetails);

		}
	}
}