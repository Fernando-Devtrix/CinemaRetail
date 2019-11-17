<div class="container">

	<h1>Peliculas agregadas este mes</h1>
	
	<?php

		$order = "date";

		$allMovies = MoviesController::ctrlListMovies($order);

		foreach ($allMovies as $key => $value) {

			$movie_style = json_decode($value["movie_img_style"], true);

			echo
				'<div class="row">
					<div class="'.$movie_style["Col"].'">
					    <figure class="figure">
							<figcaption class="figure-caption">'.$value["title"].'</figcaption>
					    	<img src="'.$value["image_route"].'" alt="img" class="'.$movie_style["BootstrapClass"].' image'.$movie_style["Num"].' movies">
						</figure>		
					</div>	
				</div>';		
			
		}

	?>


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
	
	<div class="row 4ImagesCollection">
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image7.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image8.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image9.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image10.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">			
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
	</div>
	
</div>

<hr />

<div class="container">

	<h2>Películas de terror</h2>
	
	<div class="row 4ImagesCollection">
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image11.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image12.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image13.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image14.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">			
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
	</div>
	
</div>

<hr />

<div class="container">

	<h2>Películas de comedia</h2>
	
	<div class="row 4ImagesCollection">
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image15.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image16.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image17.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image18.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">			
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
			<figcaption class="figure-caption">Movie Name</figcaption>
	</div>
	
</div>

<hr />

<div class="container">

	<h2>Ver las películas y novedades</h2>
	
	<div class="row 4ImagesCollection">
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image19.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image20.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image21.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image22.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">			
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
	</div>
	
	<br />
	
	<div class="row 4ImagesCollection">
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image23.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image24.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image25.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image26.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">			
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
	</div>
	
	<br />
	
	<div class="row 4ImagesCollection">
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image27.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image28.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image29.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-6">
			<img src="views/img/mainPage/Image30.png" class="rounded fourImagesCollection movies" width="250" height="350" alt="...">			
			<figcaption class="figure-caption">Movie Name</figcaption>
		</div>
	</div>
	
</div>


<br />
<br />
