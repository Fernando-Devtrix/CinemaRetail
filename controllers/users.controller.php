<?php  

	class UsersController {

		/*=============================================
						SIGNUP USER
		=============================================*/

		public function ctrlSignUpUser() {

			if (isset($_POST["registerUser"])) {

				if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["registerUser"]) &&
					preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["registerEmail"]) &&
					preg_match('/^[a-zA-Z0-9]+$/', $_POST["registerPassword"])) {

				   	$crypt = crypt($_POST["registerPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					$data = array("name" => $_POST["registerUser"],
								  "password" => $crypt,
								  "email" => $_POST["registerEmail"]);

					$table = "users";

					$answer = UsersModel::mdlSignUpUser($table, $data);

					if ($answer == "ok") {

						echo '

						<script>
							swal({
							  title: "Good job!",
							  text: "Usuario registrado correctamente!",
							  icon: "success"
							});
						</script>
						
						';
						
					}
				
				}

			}
		
		}

		/*=============================================
						LOGIN USER
		=============================================*/

		// public function ctrlLoginUser() {
		
		// 	if (isset($_POST["loginEmail"])) {
				
		// 		if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginEmail"]) &&
		// 			preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginPassword"])) {

		// 			$crypt = crypt($_POST["loginPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

		// 			$table = "usuarios";
		// 			$item = "email";
		// 			$value = $_POST["loginEmail"];

		// 			$answer = UsersModel::mdlShowUser($table, $item, $value);

		// 			if ($answer["email"] == $_POST["loginEmail"] && $answer["password"] == $crypt) {	
						
		// 					$_SESSION["verifySession"] = "ok";
		// 					$_SESSION["id"] = $answer["id"];
		// 					$_SESSION["name"] = $answer["nombre"];
		// 					$_SESSION["photo"] = $answer["foto"];
		// 					$_SESSION["email"] = $answer["email"];
		// 					$_SESSION["password"] = $answer["password"];
		// 					$_SESSION["mode"] = $answer["modo"];

		// 					echo '

		// 					<script>

		// 						console.log("loged in");

		// 					</script>';
						
		// 			} else {

		// 				echo '

		// 				<script> 

		// 					swal({
		// 						  title: "¡ERROR!",
		// 						  text: "¡Por favor revise la bandeja de entrada o la carpeta de SPAM de su correo para verififcar la dirección de correo electrónico '.$answer["email"].'!",
		// 						  icon:"error",
		// 						  button: {
		// 						    text: "Cerrar",
		// 						  },
		// 						});

		// 				</script>';

		// 				}

		// 		}

		// 	}
		
		// }
	}