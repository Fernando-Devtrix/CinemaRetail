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

 		
 	}