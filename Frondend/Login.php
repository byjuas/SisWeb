    <?php
    if (version_compare(PHP_VERSION, '5.3.7', '<')) {
        exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
    } else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
        // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
        // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
        require_once("libraries/password_compatibility_library.php");
    }

    // include the configs / constants for the database connection
    require_once("../Backend/config/db.php");

    // load the login class
    require_once("../Backend/classes/Login.php");

    // create a login object. when this object is created, it will do all login/logout stuff automatically
    // so this single line handles the entire login process. in consequence, you can simply ...
    $login = new Login();

    // ... ask if we are logged in here:
    if ($login->isUserLoggedIn() == true) {
        // the user is logged in. you can do whatever you want here.
        // for demonstration purposes, we simply show the "you are logged in" view.
        
        if ($_SESSION['rol'] == 1) {
            header("location: ../Frondend/index.php");
        } else if ($_SESSION['rol'] == 2) {
                header("location: ../Frondend/index.php");
        }
    } else {
        ?>
    <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="msapplication-tap-highlight" content="no">
            <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
            <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">

            <title></title>

            <link rel="icon" href="../images/favicon/favicon-32x32.png" sizes="32x32">
            <!-- Favicons-->
            <link rel="apple-touch-icon-precomposed" href="../images/favicon/apple-touch-icon-152x152.png">
            <!-- For iPhone -->
            <meta name="msapplication-TileColor" content="#00bcd4">
            <meta name="msapplication-TileImage" content="../images/favicon/mstile-144x144.png">
            <!-- For Windows Phone -->

            <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
            <link href="../css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
            <!-- Custome CSS-->    
            <link href="../css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
            <link href="../css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

            <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
            <link href="../js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
            <link href="../js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

        </head>
        <body class="cyan">
            <!-- Start Page Loading -->
            <div id="loader-wrapper">
                <div id="loader"></div>        
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
            <!-- End Page Loading -->



            <div id="login-page" class="row">
                <div class="col s12 z-depth-4 card-panel">
                    <form class="login-form" method="post" name="loginform" action="login.php">
                        <?php
                        // show potential errors / feedback (from login object)
                        if (isset($login)) {
                            if ($login->errors) {
                                ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <strong>Error!</strong> 

                                    <?php
                                    foreach ($login->errors as $error) {
                                        echo $error;
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            if ($login->messages) {
                                ?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <strong>Aviso!</strong>
                                    <?php
                                    foreach ($login->messages as $message) {
                                        echo $message;
                                    }
                                    ?>
                                </div> 
                                <?php
                            }
                        }
                        ?>



                        <div class="row">
                            <div class="input-field col s12 center">
                                <img src="../images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
                                <p class="center login-form-text">Material Design Admin Template</p>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="mdi-social-person-outline prefix"></i>
                                <input id="username" type="text" name="user_name">
                                <label for="username" class="center-align">Usuario</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="mdi-action-lock-outline prefix"></i>
                                <input id="password" type="password" name="user_password">
                                <label for="password">Contraseña</label>
                            </div>
                        </div>
                        <div class="row">          
                            <div class="input-field col s12 m12 l12  login-text">
                                <input type="checkbox" id="remember-me" />
                                <label for="remember-me">Recordarme</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light col s12" name="login">Iniciar Sesion</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 m6 l6">
                                <p class="margin medium-small"><a href="Registrar.php">Registrarse!</a></p>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <p class="margin right-align medium-small"><a href="page-forgot-password.html">Olvidar Contraseña</a></p>
                            </div>          
                        </div>

                    </form>
                </div>
            </div>



            <!-- ================================================
              Scripts
              ================================================ -->

            <!-- jQuery Library -->
            <script type="text/javascript" src="../js/plugins/jquery-1.11.2.min.js"></script>
            <!--materialize js-->
            <script type="text/javascript" src="../js/materialize.min.js"></script>
            <!--prism-->
            <script type="text/javascript" src="../js/plugins/prism/prism.js"></script>
            <!--scrollbar-->
            <script type="text/javascript" src="../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

            <!--plugins.js - Some Specific JS codes for Plugin Settings-->
            <script type="text/javascript" src="../js/plugins.min.js"></script>
            <!--custom-script.js - Add your own theme custom JS-->
            <script type="text/javascript" src="../js/custom-script.js"></script>

        </body>
    </html>

    <?php
}
