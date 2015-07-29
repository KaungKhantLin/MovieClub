<?php

namespace MovieCrazy\Http\Controllers;

use Illuminate\Http\Request;
use MovieCrazy\Http\Controllers\Controller;
use MovieCrazy\LatestMovies;
use MovieCrazy\TheraterMovie;

class TheratersMovies extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct() {
		$this->middleware('auth');

	}

	public function index() {
		$data = LatestMovies::all();

		return view('frontend.theratersmovies')->with('latestmovies', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request) {

		$theratersmovies = TheraterMovie::create(array
			('movie_name'    => $request->input('movie_name'),
				'show_movie'    => $request->input('show_movie'),
				'therater_name' => $request->input('therater_name'),
				'region'        => $request->input('region'),
				'address'       => $request->input('address'),
				'showday'       => $request->input('showday'),
				'showtime'      => $request->input('showtime'),
				'remark'        => $request->input('remark'),

			));

		if ($theratersmovies) {

			return $this->index();
		}

		// $validator = \Validator::make($data = \Input::except('_token'), TheraterMovie::$rules);

		// if ($validator           ->fails()) {
		// 	return \Redirect::back()->withErrors($validator)->withInput();
		// }

		// TheraterMovie::create(
		// 	array('latestmovies_id' => ($data['show_movie']), 'therater_name' => ($data['therater_name']), 'region' => ($data['region']), 'address' => $data['address'], 'showday' => $data['showday'], 'showtime' => $data['showtime'], 'remark' => $data['remark'], 'show_movie' => $data['show_movie']));

		// return $this->index();

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		
		
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
