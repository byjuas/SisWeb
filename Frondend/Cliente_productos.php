<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }

	/* Connect To Database*/
	require_once ("../Backend/config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../Backend/config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$active_productos="active";
	$title="Inventario | Simple Stock";
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
     <?php include ('../head.php'); ?>
    </head>
    <body>
        <?php include ('../Navbar_clientes.php'); ?>
        
         <!-- START CONTENT -->
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
                <a class="btn-floating btn-large">
                  <i class="mdi-action-stars"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
                                <!-- Compose Email Structure -->
                                
                            </div>

                        </div>
                    </div>

                </section>

            </div>

        </section>
        
         <?php include ('../footer.php');?>
         <script src="../js/prod_cliente.js" type="text/javascript"></script>
    </body>
</html>
