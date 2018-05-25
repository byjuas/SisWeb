<?php
/* -------------------------
  Autor: Obed Alvarado
  Web: obedalvarado.pw
  Mail: info@obedalvarado.pw
  --------------------------- */
session_start();
if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
    header("location: login.php");
    exit;
}

/* Connect To Database */
require_once ("../Backend/config/db.php"); //Contiene las variables de configuracion para conectar a la base de datos
require_once ("../Backend/config/conexion.php"); //Contiene funcion que conecta a la base de datos

$active_productos = "active";
$title = "Inventario | Simple Stock";
?>

<?php
require_once ("../Backend/config/db.php"); //Contiene las variables de configuracion para conectar a la base de datos
require_once ("../Backend/config/conexion.php"); //Contiene funcion que conecta a la base de datos
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">

    <head>
        <?php include ('../head.php'); ?>
        </head>

    <body>
        <?php include ('../Navbar.php'); ?>

        <section id="content">

            <div class="container">

                <section id="content">

                    <!--breadcrumbs start-->
                    <div id="breadcrumbs-wrapper">
                        <!-- Search for small screen -->
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input " placeholder="Explore Materialize">
                        </div>

                    </div>

                    <div class="container">

                        <div id="chart-dashboard" >
                            <div class="row">
                                <div class="col s12">
                                    <nav class="red">
                                        <div class="nav-wrapper">
                                            <div class="col s12 m12  hide-on-med-and-down">
                                                <ul>
                                                    <li>

                                                        <div class="header-search-wrapper hide-on-med-and-down">
                                                            <i class="mdi-action-search"></i>
                                                            <input type="text" name="Search" id="q" class="header-search-input z-depth-2" placeholder="Buscar" onkeyup='load(1);'>
                                                        </div>
                                                    </li>
                                                    <li class="right" >

                                                        <a href="#" class="email-menu"><i class="mdi-navigation-menu"></i></a>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </nav>
                                </div>

                                <div id="resultados"> </div>
                                <div class='outer_div'> </div>
                                <!-- Compose Email Trigger -->
                                <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                                    <a class="btn-floating btn-large red modal-trigger" href="#modal1">
                                        <i class="mdi-editor-border-color"></i>
                                    </a>
                                </div>



                                <!-- Compose Email Structure -->
                                <div id="modal1" class="modal ">
                                    <div class="modal-content ">
                                       <nav id="header"class="red ">
                                            <div class=" nav-wrapper">
                                                <div class="left col s12 m5 l5">
                                                    <ul>
                                                        <li><a href="#!" class="email-menu"><i class="modal-action modal-close  mdi-hardware-keyboard-backspace"></i></a>
                                                        </li>
                                                        <li><a href="#!" class="email-type">Registrar Nuevo Usuarario</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col s12 m7 l7 hide-on-med-and-down">
                                                    <ul class="right">
                                                        <li><a href="#!"><i class="mdi-editor-attach-file"></i></a>
                                                        </li>
                                                        <li><a href="#!"><i class="modal-action modal-close  mdi-content-send"></i></a>
                                                        </li>
                                                        <li><a href="#!"><i class="mdi-navigation-more-vert"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </nav>
                                    </div>


                                    <div class="model-email-content">
                                        <div class="row">
                                            <form class="col s12">

                                                <div class="input-field col s12 ">
                                                    <ul id="select-options-a497ea3a-d314-e1f5-b896-9ccd4328f93f" class="dropdown-content select-dropdown" style="width: 405px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;">

                                                        <li class=""><span>Business</span></li>
                                                    </ul>
                                                    <select class="initialized" name="rol">
                                                        <option value="" disabled="" selected="">Seleccciona departamento</option>
                                                        <?php
                                                        $query_departamento = mysqli_query($con, "select * from rol order by nombre");
                                                        while ($rw = mysqli_fetch_array($query_departamento)) {
                                                            ?>
                                                            <option value="<?php echo $rw['idrol']; ?>"><?php echo $rw['nombre']; ?></option>			
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <label>Departamento</label>
                                                </div>   
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-account-circle prefix"></i>
                                                        <input type="text"  id="nombre_cliente" >
                                                        <input  type='hidden'id="id_cliente" class="validate" autocomplete="off">
                                                        <label for="nombre_cliente">Nombre</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-account-circle prefix"></i>
                                                        <input  id="apellidos" disabled="true" type="text" class="validate" readonly="true">
                                                        <label for="last_name">Apellidos</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-account-circle prefix"></i>
                                                        <input id="mail" type="email" disabled="true"  class="validate" readonly="true">
                                                        <label for="last_name">Email</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-account-circle prefix"></i>
                                                        <input id="dni" type="text" class="validate" disabled="true" readonly="" >
                                                        <label for="last_name">DNI</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-account-circle prefix"></i>
                                                        <input id="last_name" type="password" class="validate">
                                                        <label for="last_name">Contraseña</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <i class="mdi-action-account-circle prefix"></i>
                                                        <input id="last_name" type="password" class="validate">
                                                        <label for="last_name">Validar Contraseña   </label>
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </section>

            </div>

        </section>



        <?php include ('../footer.php'); ?>


        <script src="../js/users.js" type="text/javascript"></script>
        
        
        
        
       

    </body>

</html>




