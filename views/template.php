<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<meta name="title", content="Cinema Retail"> 

	<title>Cinema Retail</title>

	<?php 

		session_start();

		$mainUrl = Route::ctrlRoute();

		$icon = TemplateController::ctrlTemplateIcon();

		echo '<link rel="icon" href="'.$mainUrl.$icon["tab_icon"].'">';


	?>

	<!-- Plugins CSS -->

    <link rel="stylesheet" href="<?php echo $mainUrl; ?>src/plugins/assets/css/styles.min.css">

    <link rel="stylesheet" href="<?php echo $mainUrl; ?>src/plugins/assets/fonts/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo $mainUrl; ?>src/plugins/assets/bootstrap/css/bootstrap.min.css">

	<!-- Customed Style Sheets  -->

	<link rel="stylesheet" type="text/css" href="<?php echo $mainUrl; ?>views/css/main-page.css"/>

	<link rel="stylesheet" type="text/css" href="<?php echo $mainUrl; ?>views/css/landing-page.css"/>

	<link rel="stylesheet" type="text/css" href="<?php echo $mainUrl; ?>views/css/header.css"/>

	<!-- Plugins JS -->

	<script src="<?php echo $mainUrl; ?>src/plugins/assets/js/jquery.min.js"></script>

    <script src="<?php echo $mainUrl; ?>src/plugins/assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo $mainUrl; ?>src/plugins/assets/js/script.min.js"></script>

    <script src="<?php echo $mainUrl; ?>views/js/users.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- <script rel="stylesheet" href="views/js/plugins/bootstrap.min.js"></script> -->

</head>
<body>

<?php 

	/*=============================================
						HEADER            
	=============================================*/

	include "modules/header.php";

	/*=============================================
					DINAMIC CONTENT            
	=============================================*/

	// $routes = array();

	$infoMovie = null;

	$route = null;	

	if (isset($_GET["route"])) {

		$routes =  explode("/", $_GET["route"]);
		// var_dump($routes[0]);

		// $route = $_GET["route"];
		// var_dump($routes);


		$item = "name_route";
		$value = $routes[0]; 


		// FRIENDLY URL'S INFO MOVIES

		$infoMovieRoute = MoviesController::ctrlShowMovieInfo($item, $value);

		if($value == $infoMovieRoute["name_route"]) {

			$infoMovie = $value; 

		};

		var_dump($infoMovieRoute); 

		if ($routes[0] == "pagina-principal") {
			
			include "modules/main-page.php";

		} else if ($routes[0] == null ||
					$routes[0] == "accion" || 
					$routes[0] == "accion-aventura" ||
					$routes[0] == "accion-misterio" ||
					$routes[0] == "terror-ciencia-ficcion-accion" ||
					$routes[0] == "terror" ||
					$routes[0] == "terror-drama" ||
					$routes[0] == "ciencia-ficcion" ||
					$routes[0] == "romance-comedia" ||
					$routes[0] == "comedia" ||
					$routes[0] == "drama" ||
					$routes[0] == "infantil" ||
					$routes[0] == "cienciaficcion" ||
					$routes[0] == "ciencia-ficcion" ||
					$routes[0] == "aterror-ciencia-ficcion"
		) {
			
			include "modules/categories.php";

		} else if ($infoMovie != null) {
			
			include "modules/infomovie.php";

		} else if ($routes[0] == "salir") {
			
			include "modules/logout.php";

		}

	} else {

		include "modules/landing-page.php";

	}



?>


</body>
</html>	