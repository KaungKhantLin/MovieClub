<?php

namespace MovieCrazy\Http\Controllers;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

use MovieCrazy\Http\Controllers\Controller;

use MovieCrazy\LatestMovies;

class BackendLatestMovieController extends Controller {

	public function __construct() {
		$this->middleware('auth');

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index() {

		$latestmovies = LatestMovies::latest('release_date')->paginate(8);

		return view('backend.latest_movies.latest_movies_list')->with('latestmovies', $latestmovies);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return view('backend.latest_movies.latest_movie_create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request) {

		$filename = null;

		if (\Input::file()) {

			$image    = \Input::file('coverpic');
			$filename = time().'.'.$image->getClientOriginalExtension();

			$path = public_path('cover_img/'.$filename);

			$img = Image::make($image->getRealPath())->resize(341, 341)->save($path);
			//return $img->response('jpg');

		}

		$latestmovies = LatestMovies::create(array
			('movie_name'   => $request->input('movie_name'),
				'movie_type'   => $request->input('movie_type'),
				'release_date' => $request->input('release_date'),
				'director'     => $request->input('director'),
				'writter'      => $request->input('writter'),
				'overview'     => $request->input('overview'),
				'remark'       => $request->input('remark'),
				'overview'     => $request->input('overview'),
				'coverpic'     => $filename,
				'youtubelink'  => $request->input('youtubelink')
			));

		if ($latestmovies) {

			return $this->index();
		} else {

		}

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
		$latestmovies = LatestMovies::find($id);
		return view('backend.latest_movies.latest_movie_edit')
			->with('latestmovies', $latestmovies);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request) {
		$up = LatestMovies::findOrFail($id);
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
		$del = LatestMovies::find($id)->delete();
		if ($del) {
			return $this->index();
		}
		return ['del' => 0];
	}
}
