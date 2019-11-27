

<div class="container">	

	<h1>Peliculas agregadas este mes</h1>

	<div class="row">

		<?php 

			$mainUrl = Route::ctrlRoute();

			$order = "date";
			$limit = "3";

			$allMovies = MoviesController::ctrlListMovies($order, $limit);			

			foreach ($allMovies as $value) {
				
				echo '


		
					<div class="col-xl-4 col-lg-4 col-md-4">
						<a href="'.$mainUrl.''.$value["name_route"].'">
							<img src="'.$mainUrl.''.$value["image_route"].'" class="rounded fourImagesCollection movies" width="350" height="450" alt="...">
							<figcaption class="figure-caption">'.$value["title"].'</figcaption>
						</a>
					</div>

				';

			}

		?>

	</div>		
	
</div>



<div class="container">
	<h2 class="">Película Recomendada</h2>
		<figure class="figure">
			<img src="views/img/mainPage/Image31.png" alt="img" width="1080" height="540" class="image31 movies">
			<figcaption class="figure-caption">Pulp Fiction.</figcaption>
		</figure>
</div>

<div class="container">	

	<h2>Películas de acción</h2>

	<div class="row">

		<?php 

			$genre = "Accion";
			$order = "date";
			$numberOfResults = 	4;

			$actionMovies = MoviesController::ctrlGetMoviesBySpecificGenre($genre, $order, $numberOfResults);
			
			foreach ($actionMovies as $value) {
				
				echo '
		
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
						<a href="'.$mainUrl.''.$value["name_route"].'">
							<img src="'.$mainUrl.''.$value["image_route"].'" class="rounded fourImagesCollection movies" width="350" height="450" alt="...">
							<figcaption class="figure-caption">'.$value["title"].'</figcaption>
						</a>
					</div>

				';

			}

		?>

	</div>		
	
</div>

<hr>

<div class="container">	

	<h2>Películas de terror</h2>

	<div class="row">

		<?php 

			$genre = "Terror";
			$order = "date";
			$numberOfResults = 	4;

			$terrorMovies = MoviesController::ctrlGetMoviesBySpecificGenre($genre, $order, $numberOfResults);
			
			foreach ($terrorMovies as $value) {
				
				echo '
		
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
						<a href="'.$mainUrl.''.$value["name_route"].'">
							<img src="'.$mainUrl.''.$value["image_route"].'" class="rounded fourImagesCollection movies" width="350" height="450" alt="...">
							<figcaption class="figure-caption">'.$value["title"].'</figcaption>
						</a>
					</div>

				';

			}

		?>

	</div>		
	
</div>

<hr />

<div class="container">	

	<h2>Películas de comedia</h2>

	<div class="row">

		<?php 

			$genre = "Comedia";
			$order = "date";
			$numberOfResults = 	4;

			$comedyMovies = MoviesController::ctrlGetMoviesBySpecificGenre($genre, $order, $numberOfResults);
			
			foreach ($comedyMovies as $value) {
				
				echo '
		
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
						<a href="'.$mainUrl.''.$value["name_route"].'">
							<img src="'.$mainUrl.''.$value["image_route"].'" class="rounded fourImagesCollection movies" width="350" height="450" alt="...">
							<figcaption class="figure-caption">'.$value["title"].'</figcaption>
						</a>
					</div>

				';

			}

		?>

	</div>		
	
</div>

<hr />

<div class="container">

	<h2>Ver las películas y novedades</h2>
	
	<div class="row">

		<?php  

			$order = "date";
			$limit = "12";

			$allMovies = MoviesController::ctrlListMovies($order, $limit);

			foreach ($allMovies as $value) {

				echo '
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
						<a href="'.$mainUrl.''.$value["name_route"].'">
							<img src="'.$mainUrl.''.$value["image_route"].'" class="rounded fourImagesCollection movies" width="350" height="450" alt="...">
							<figcaption class="figure-caption">'.$value["title"].'</figcaption>
						</a>
					</div>
				';
				
			}

		echo'

		</div>
		
		<br />
		
		<div class="row">

		';

		?>
		
</div>


<br />
<br />
