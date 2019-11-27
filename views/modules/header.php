<?php 
    
    $mainUrl = Route::ctrlRoute();

?>

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
                                    

                                    <a href="'.$mainUrl.''.$value["category_route"].'" class="dropdown-item">'.$value["genre"].'</a>
                                    
                                ';

                            }

                        ?>
                    </div>
                </div>  
                <div class="dropdown dropStyle">
                    <a href="#" class="dropdown-toggle text-muted" data-toggle="dropdown">Agregadas este mes</a>
                    <div class="dropdown-menu">
                        <?php 

                            $order = "date";
                            $limit = 7;

                            $lastMovies = MoviesController::ctrlListMovies($order, $limit);

                            foreach ($lastMovies as $value) {

                                echo '
                                    <a href="#" class="dropdown-item">'.$value["title"].'</a>
                                ';
                                
                            }

                        ?>

                    </div>

                </div>

                <?php 

                if (isset($_SESSION["verifySession"])) {

                    if ($_SESSION["verifySession"] == "ok") {

                        echo '
                           
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Mi lista de películas</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Mi perfil</a></li> 
                            <li class="nav-item" role="presentation"><a class="nav-link" href="'.$mainUrl.'salir">Cerrar cuenta</a></li> 

                        ';
                        
                    } 
                    
                } else {

                        echo '

                        <li class="nav-item" role="presentation"><a class="nav-link" href="#loginModal" data-toggle="modal">Iniciar sesión</a></li>
                        
                        <li style="margin-top: 7px;"> | </li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="#signUpModal" data-toggle="modal">Crear cuenta</a></li>
                    
                        ';


                    }

                ?>
                
            </ul>
         </div>
    </div>

    <!--=====================================
            LOGIN MODAL 
    ======================================-->

    <div class="modal fade formModal" id="loginModal" role="dialog">

        <div class="modal-content modal-dialog">

            <form method="post"> 

                <div class="text-center first-part">
                    <h1 class="tittle-1">¡Bienvenido de Nuevo!</h1>
                    <p class="parrafo-1">
                        Ingresa tus datos para continuar si no te has registrado hazlo&nbsp;<a class="text-primary link-1" data-dismiss="modal" data-toggle="modal" href="#signUpModal">aquí</a>
                    </p>
                    <div>
                        <img src="<?php echo $mainUrl; ?>src/plugins/assets/img/Usuario.png" class="userImg" alt="userLogin">
                    </div>
                </div>

                <div class="text-center" style="padding-top: 50px;">
                    <input class="bg-white border-dark shadow-none correo-electronico" type="email" id="loginEmail" name="loginEmail" placeholder="Nombre de usuario" required>
                </div>

            
                <div class="text-center First-part-2-sus">
                    <input class="bg-white border-dark password-1" type="password" id="loginPassword" name="loginPassword" placeholder="Contraseña" required style="width: 450px; height: 35px;">
                </div>

                <div class="text-center parte-inicio">
                    
                    <?php 

                        $login = new UsersController();
                        $login -> ctrlLoginUser();

                    ?>

                    <input class="btn btn-primary btn-iniciar-sesión btnLogUser" type="submit" value="Iniciar Sesión"/>
                </div>

            </form>

        </div>

    </div>

    <!--=====================================
            SIGN UP MODAL 
    ======================================-->

    <div class="modal fade formModal" id="signUpModal" role="dialog">

        <div class="modal-content modal-dialog">

            <form method="post"> 

                <div class="signupAlignment row d-lg-flex">

                <div class="col-lg-5 col-xl-5 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xl-end align-items-xl-center">

                <img src="<?php echo $mainUrl; ?>src/plugins/assets/img/Usuario.png" style="width: 200px;"></div>

                      <div class="col-lg-5 col-xl-4 text-center" style="padding: 15px;">

                          <input class="bg-white border-dark shadow-none correo-electronico" type="text" id="registerUser" name="registerUser" required style="width: 250px;margin-left: 10px;" placeholder="Nombre de usuario">

                          <p></p>

                          <input class="bg-white border-dark shadow-none correo-electronico" type="text" id="registerEmail" name="registerEmail" required style="width: 250px;margin-left: 10px;" placeholder="Correo electronico">

                          <p></p>
                         
                          <input class="bg-white border-dark shadow-none correo-electronico" type="password" id="registerPassword" name="registerPassword" required style="width: 250px;margin-left: 10px;" placeholder="Contraseña">
                          
                          
                            <div class="text-center parte-inicio">
                                <?php 

                                    $register = new UsersController();
                                    $register -> ctrlSignUpUser();

                                ?>
                                <input class="btn btn-primary btn-iniciar-sesión" data-bs-hover-animate="pulse" type="submit" value="Registrarse"/>
                            </div>

                        </div>

                </div>    

            </form>

        </div>

    </div>

</nav>


