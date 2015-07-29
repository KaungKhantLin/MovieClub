<?php

namespace MovieCrazy;

use Illuminate\Database\Eloquent\Model;

class TheraterMovie extends Model {

	protected $table = "therater_movies";

	protected $fillable = ['latestmovies_id', 'therater_name', 'region', 'address', 'showday', 'showtime', 'remark', 'show_movie'];

	public static $rules = [
		'latestmovies_id' => 'required',
		'therater_name'   => 'required',
		'region'          => 'required',
		'address'         => 'required',
		'showday'         => 'required',
		'showtime'        => 'required',
		'show_movie'      => 'required',

	];

	public function latestmovies() {
		return $this->hasOne('MovieCrazy\LatestMovies', 'movie_name', 'show_movie');

	}

}
