<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTheraterMovieTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('therater_movies', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('latestmovies_id');
				$table->string('therater_name');
				$table->string('region');
				$table->text('address');
				$table->date('showday');
				$table->time('showtime');
				$table->string('show_movie');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('therater_movies');
	}
}
