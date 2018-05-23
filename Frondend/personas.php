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
        <?php include ('../Navbar.php'); ?>


        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper">
                <!-- Search for small screen -->
                <div class="header-search-wrapper grey hide-on-large-only">
                    <i class="mdi-action-search active"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                </div>

            </div>

            <div class="container">

                <div id="mail-app" class="section">
                    <div class="row">
                        <div class="col s12">
                            <nav class="red">
                                <div class="nav-wrapper">
                                    <div class="col s12 m14 24 hide-on-med-and-down">
                                        <ul>
                                            <li><a href="#!" class="email-menu"><i class="mdi-navigation-menu"></i></a>
                                            </li>
                                            <li><a href="#!" class="email-type">Gestion de Afiliados</a>
                                            </li>
                                            <li class="right"><a href="#!"><i class="mdi-action-search right"></i></a>
                                            </li>


                                        </ul>
                                    </div>


                                </div>
                            </nav>
                        </div>
                        <div class="col s12">


                            <div id="email-details" class="col s12 m14 24 card-panel">

                                <div class="email-content-wrap">
                                    <div class="row">

                                        <!--Iniciode la tabla-->
                                        <div class="col s12 m12 l12">
                                            <table class="striped">
                                                <thead>
                                                    <tr>
                                                        <th data-field="no">Id</th>
                                                        <th data-field="item">Nombres</th>
                                                        <th data-field="uprice">Apellidos</th>
                                                        <th data-field="price">Email</th>
                                                        <th data-field="price">RUC</th>
                                                        <th data-field="price">DNI</th>
                                                        <th data-field="price">Fech/N</th>
                                                        <th data-field="price">telefono</th>
                                                        <th data-field="price">direccion</th>
                                                        <th data-field="price">id_dep</th>
                                                        <th data-field="price">id-Banco</th>
                                                        <th data-field="price">N°-cuenta</th>
                                                        <th data-field="price">N°-pago</th>
                                                        <th data-field="price">Banco-op</th>
                                                        <th data-field="price">Patro</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Jeiner</td>
                                                        <td>Castro</td>
                                                        <td>Tecjeiner@gmil.com</td>
                                                        <td>12345678901</td>
                                                        <td>75053012</td>
                                                        <td>10-06-98</td>
                                                        <td>961590878</td>
                                                        <td>villa rica</td>
                                                        <td>2</td>
                                                        <td>5</td>
                                                        <td>51234567890123</td>
                                                        <td>123456</td>
                                                        <td>BCP</td>
                                                        <td>40017574</td>
                                                    </tr>
                                                    
                                                    




                                                </tbody>


                                            </table>  
                                            <ul class="pagination">
                                                <li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>
                                                <li class="active"><a href="#!">1</a></li>
                                                <li class="waves-effect"><a href="#!">2</a></li>
                                                <li class="waves-effect"><a href="#!">3</a></li>
                                                <li class="waves-effect"><a href="#!">4</a></li>
                                                <li class="waves-effect"><a href="#!">5</a></li>
                                                <li class="waves-effect"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>
                                            </ul
                                        </div>
                                        <!--Fin de la tabla-->

                                    </div>



                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- Compose Email Trigger -->
                    <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                        <a class="btn-floating btn-large red modal-trigger" href="#modal1">
                            <i class="mdi-editor-border-color"></i>
                        </a>
                    </div>

                     <?php
                 require_once ("../Backend/config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	         require_once ("../Backend/config/conexion.php");//Contiene funcion que conecta a la base de datos
                     ?>

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
                        </div>>
                        
                        
                        <div class="model-email-content">
                            <div class="row">
                                <form class="col s12">
                                    <!--<div class="row">
                                      <div class="input-field col s12">
                                        <input id="from_email" type="email" class="validate">
                                        <label for="from_email">From</label>
                                      </div>
                                    </div> -->
                                         <div class="input-field col s12 ">
                                    <ul id="select-options-a497ea3a-d314-e1f5-b896-9ccd4328f93f" class="dropdown-content select-dropdown" style="width: 405px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;">

                                        <li class=""><span>Business</span></li></ul>
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
                                                <input id="nombre_cliente" type="text" class="validate">
                                                <input id="id_cliente" type='hidden'>
                                                <label for="nombre_cliente">Nombre</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input  id="apellidos" type="text" class="validate">
                                                <label for="last_name">Apellidos</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="mail" type="email" class="validate">
                                                <label for="last_name">Email</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" class="validate">
                                                <label for="last_name">Usuario</label>
                                            </div>
                                        </div>
                                    <div class="row">
                                            <div class="input-field col s6">
                                                <input id="last_name" type="password" class="validate">
                                                <label for="last_name">Contraseña</label>
                                            </div>
                                            <div class="input-field col s6">
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
            <!--end container-->


        </section>

        <?php include ('../footer.php'); ?>
         
        <script>
		$(function() {
						$("#nombre_cliente").autocomplete({
							source: "../Backend/autocomplete/usuarios.php",
							minLength: 2,
							select: function(event, ui) {
								event.preventDefault();
								$('#id_cliente').val(ui.item.id_cliente);
								$('#nombre_cliente').val(ui.item.nombre_cliente);
								$('#tel1').val(ui.item.telefono_cliente);
								$('#mail').val(ui.item.email_cliente);
																
								
							 }
						});
						 
						
					});
					
	$("#nombre_cliente" ).on( "keydown", function( event ) {
						if (event.keyCode== $.ui.keyCode.LEFT || event.keyCode== $.ui.keyCode.RIGHT || event.keyCode== $.ui.keyCode.UP || event.keyCode== $.ui.keyCode.DOWN || event.keyCode== $.ui.keyCode.DELETE || event.keyCode== $.ui.keyCode.BACKSPACE )
						{
							$("#id_cliente" ).val("");
							$("#tel1" ).val("");
							$("#mail" ).val("");
											
						}
						if (event.keyCode==$.ui.keyCode.DELETE){
							$("#nombre_cliente" ).val("");
							$("#id_cliente" ).val("");
							$("#tel1" ).val("");
							$("#mail" ).val("");
						}
			});	
	</script>

    </body>


</html>




