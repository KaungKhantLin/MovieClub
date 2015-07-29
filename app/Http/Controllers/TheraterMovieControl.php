<?php

namespace MovieCrazy\Http\Controllers;

use Illuminate\Http\Request;
use MovieCrazy\Http\Controllers\Controller;
use MovieCrazy\TheraterMovie;

class TheraterMovieControl extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

		$theratermovie = TheraterMovie::latest('created_at')->paginate(8);
		return view('backend.controltheratermovie.index')->with('theratermovie', $theratermovie);
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
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$movies = TheraterMovie::find($id);
		return view('backend.controltheratermovie.edit')
			->with('movies', $movies);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id) {
		$up = TheraterMovie::findOrFail($id);
		$up->update($request->all());

		return $this->index();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$del = TheraterMovie::find($id)->delete();
		if ($del) {
			return $this->index();
		}
		return ['del' => 0];
	}
}
