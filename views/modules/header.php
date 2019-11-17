<?php 
    
    $mainUrl = Route::ctrlRoute();

?>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="font-family: Montserrat, sans-serif;">
        <div class="container"><a class="navbar-brand" href="<?php echo $mainUrl; ?>"><img class="logo" src="<?php echo $mainUrl; ?>src/plugins/assets/img/Recurso%202.png"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $mainUrl; ?>pagina-principal">Inicio</a></li>                   
                    <div class="dropdown dropStyle">
                        <a href="#" class="dropdown-toggle text-muted" data-toggle="dropdown">Categorías</a>
                        <div class="dropdown-menu">
                            <?php 

                                $categories = MoviesController::ctrlShowCategories();

                                foreach ($categories as $key => $value) {

                                    echo '
                                        

                                        <a href="'.$mainUrl.'categoria/'.$value["category_route"].'" class="dropdown-item">'.$value["genre"].'</a>

                                    ';

                                }

                            ?>
                        </div>
                    </div>  
                    <div class="dropdown dropStyle">
                        <a href="#" class="dropdown-toggle text-muted" data-toggle="dropdown">Agregadas este mes</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Another action</a>
                        </div>
                    </div>
                   
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Mi lista de películas</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Mi perfil</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Iniciar sesión</a></li>
                </ul>
        </div>
        </div>
    </nav>
   
 
   
    </div>
    
</body>
