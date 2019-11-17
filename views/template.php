<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<meta name="title", content="Cinema Retail"> 

	<title>Cinema Retail</title>

	<?php 

		$icon = TemplateController::ctrlTemplateIcon();

		echo '<link rel="icon" href="'.$icon["tab_icon"].'">';

		$mainUrl = Route::ctrlRoute();
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

	$routes = array();

	$route = null;

	if (isset($_GET["route"])) {

		$routes =  explode("/", $_GET["route"]);

		if ($routes[0] == "pagina-principal") {
			
			include "modules/main-page.php";

		} else if ($routes[1] == "accion" || $routes[1] == "accion-aventura" ) {

			include "modules/categories.php";
			
		} 

	} else {

		include "modules/landing-page.php";

	}



?>


</body>
</html>	