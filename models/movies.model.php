<?php 
	
	require_once "conection.php";

	class MoviesModel {

		static public function mdlListMovies($table, $order) {

			$stmt = Conection::conect()->prepare("SELECT * FROM $table ORDER BY $order DESC LIMIT 3");

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
	}