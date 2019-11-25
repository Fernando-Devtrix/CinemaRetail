<?php 
	
	class MoviesController {

		/*=================================
		=     List all Movies in db       =
		==================================*/

		static public function ctrlListMovies($order, $limit) {

			$table = "movies";

			$answer = MoviesModel::mdlListMovies($table, $order, $limit);

			return $answer;

		}

		public function ctrlShowCategories() {

			$table = "movies";

			$answer = MoviesModel::mdlShowCategories($table);

			return $answer;

		}

		static public function ctrlListMoviesByGenre($item, $value) {

			$table = "movies";

			$answer = MoviesModel::mdlListMoviesByGenre($item, $value, $table);

			return $answer;

		}

		static public function ctrlGetMoviesBySpecificGenre($genre, $order, $numberOfResults) {

			$table = "movies";

			$answer = MoviesModel::mdlGetMoviesBySpecificGenre($table, $genre, $order, $numberOfResults);

			return $answer;

		}

	}