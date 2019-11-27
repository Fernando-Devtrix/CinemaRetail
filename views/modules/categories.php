<?php 

	$mainUrl = Route::ctrlRoute();

	$item = "category_route";

	$value = $routes[0];

	$quitDash = str_replace("-", ", ", $routes[0]);

	// var_dump($value);

	$listMoviesGenres = MoviesController::ctrlListMoviesByGenre($item, $value);

	// var_dump($listMoviesGenres);

	echo '<h1 class="container">Categoria(s): '.$quitDash.'</h1>';

		

?>

<div class="container">	
	
	<div class="row 4ImagesCollection">
		
			<?php  

				foreach ($listMoviesGenres as $key => $value) {
		
					echo '
					<div class="col-xl-3 col-lg-3 col-md-3 col-6">
					
						<img src="'.$mainUrl.''.$value["image_route"].'" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
						<figcaption class="figure-caption">'.$value["title"].'</figcaption>


					</div>
					';

				}

			?>
	
	</div>
	
</div>