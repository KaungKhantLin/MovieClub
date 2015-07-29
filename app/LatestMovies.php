<?php

namespace MovieCrazy;

use Illuminate\Database\Eloquent\Model;

class LatestMovies extends Model {
	protected $table = "latestmovies";

	protected $fillable = ['movie_name', 'movie_type', 'release_date', 'director', 'writter', 'overview', 'remark', 'coverpic', 'youtubelink'];

}
