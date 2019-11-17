<?php  

	require_once "controllers/template.controller.php";
	require_once "controllers/movies.controller.php";

	require_once "models/template.model.php";
	require_once "models/movies.model.php";

	require_once "models/routes.php";
	
	$template = new TemplateController();
	$template -> template();

