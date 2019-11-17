<?php 

	require_once "conection.php";

	class TemplateModel {

		static public function mdlTemplateIcon($table) {

			$stmt = Conection::conect()->prepare("SELECT * FROM $table");
			$stmt -> execute();
			return $stmt -> fetch();
			
			$stmt -> close();
		}
		
	}