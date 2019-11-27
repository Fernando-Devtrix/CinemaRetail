<?php 
	
	require_once "conection.php";

	class MoviesModel {

		static public function mdlListMovies($table, $order, $limit) {

			$stmt = Conection::conect()->prepare("SELECT * FROM $table ORDER BY $order DESC LIMIT $limit");

			$stmt -> execute();

			return $stmt -> fetchAll();
			
			$stmt -> close();

		}

		public function mdlShowCategories($table) {	

			$stmt = Conection::conect()->prepare("SELECT DISTINCT genre, category_route FROM $table");

			$stmt -> execute();

			return $stmt -> fetchAll();
			
			$stmt -> close();

		}

		static public function mdlListMoviesByGenre($item, $value, $table) {

			$stmt = Conection::conect()->prepare("SELECT * FROM $table WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();
			
			$stmt -> close();

		}

		static public function mdlGetMoviesBySpecificGenre($table, $genre, $order, $numberOfResults) {

			$stmt = Conection::conect()->prepare("SELECT * FROM $table WHERE genre like '%$genre%' ORDER BY $order LIMIT $numberOfResults");

			$stmt -> execute();

			return $stmt -> fetchAll();
			
			$stmt -> close();

			$stmt = null;


		}

		/*=============================================
					INFO MOVIES
		=============================================*/

		static public function mdlShowMovieInfo($table, $item, $value) {

			$stmt = Conection::conect()->prepare("SELECT * FROM $table WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
			
			$stmt -> close();

			$stmt = null;
		}

		/*=============================================
					SHOW CATEGORIES
		=============================================*/

		static public function ctrlShowMoviesCategories($table, $item, $value) {

			if ($item != null) {
				
				$stmt = Conection::conect()->prepare("SELECT * FROM $table WHERE $item = :$item");

				$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			} else {

				$stmt = Conection::conect()->prepare("SELECT * FROM $table");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}
			
			$stmt -> close();

			$stmt = null;
		}

	}