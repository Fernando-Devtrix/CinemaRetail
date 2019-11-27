<?php 

	require_once "conection.php";

 	class UsersModel {

 		/*=============================================
						SIGN UP USER
		=============================================*/

		static public function mdlSignUpUser($table, $data) {

			$stmt = Conection::conect()->prepare("INSERT INTO $table(name, password, email) VALUES(:name, :password, :email)");

			$stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
			$stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
			

			if ($stmt->execute()) {

				return "ok";
				
			} else {

				return "error";

			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
						SHOW USER
		=============================================*/

		static public function mdlShowUser($table, $item, $value) {

			$stmt = Conection::conect()->prepare("SELECT * FROM $table WHERE $item = :$item");

			$stmt->bindParam(":".$item, $value, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetch();

			$stmt->close();

			$stmt = null;

		}
 		
 	}