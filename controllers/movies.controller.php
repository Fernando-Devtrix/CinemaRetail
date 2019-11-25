<?php 
	
	class MoviesController {

		/*=================================
		=     List all Movies in db       =
		==================================*/

		static public function ctrlListMovies($order) {

			$table = "movies";

			$answer = MoviesModel::mdlListMovies($table, $order);

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

	}