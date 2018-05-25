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
        <?php include ('../Navbar_clientes.php'); ?>


        <!-- START CONTENT -->
        <section id="content">        

            <!--start container-->
            <div class="container">

                <div id="profile-page" class="section" >
                    <!-- profile-page-header -->
                    <div id="profile-page-header" class="card " style="margin-left: 200px; margin-right: 200px;"> 
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="../images/user-profile-bg.jpg" alt="user background">                    
                        </div>
                        <figure class="card-profile-image">
                            <img src="../images/avatar.jpg" alt="profile image" class="circle z-depth-2 responsive-img activator">
                        </figure>
                        <div class="card-content">
                            <div class="row">                    
                                <div class="col s3 offset-s2">                        
                                    <h4 class="card-title grey-text text-darken-4">Roger Waters</h4>
                                    <p class="medium-small grey-text">Cliente</p>                        
                                </div>
                                <div class="col s2 center-align">
                                    <h4 class="card-title grey-text text-darken-4">10+</h4>
                                    <p class="medium-small grey-text">Afiliados</p>                        
                                </div>
                                <div class="col s2 center-align">
                                    <h4 class="card-title grey-text text-darken-4">6</h4>
                                    <p class="medium-small grey-text">Completed Projects</p>                        
                                </div>                    
                                <div class="col s2 center-align">
                                    <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>
                                    <p class="medium-small grey-text">Ganancia</p>                        
                                </div>                    
                                <div class="col s1 right-align">
                                    <a class="btn-floating activator waves-effect waves-light darken-2 right">
                                        <i class="mdi-action-perm-identity"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <p>
                                <span class="card-title grey-text text-darken-4">Jeiner Castro <i class="mdi-navigation-close right"></i></span>
                                <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</span>
                            </p>

                            <p> I am good at containing small bits of information. </p>

                            <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                            <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
                            <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
                            <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
                        </div>
                    </div>

                    <div id="profile-page-content" class="col s12 z-depth-4 card-panel" style="margin-left: 200px; margin-right: 200px;">


                        <div id="profile-page-wall" class="col s12 m8">
                            <!-- profile-page-wall-share -->
                            <div id="profile-page-wall-share" class="row">
                                <div class="col s12">
                                    <ul class="tabs tab-profile z-depth-1 light-blue">
                                        <li class="tab col s3"><a class="white-text waves-effect waves-light active" href="#UpdateStatus"><i class="mdi-editor-border-color"></i> Mi Informacion</a>
                                        </li>
                                        <li class="tab col s3"><a class="white-text waves-effect waves-light" href="#AddPhotos"><i class="mdi-image-camera-alt"></i> Agregar Nuevo Miembro</a>
                                        </li>
                                        <li class="tab col s3"><a class="white-text waves-effect waves-light" href="#CreateAlbum"><i class="mdi-image-photo-album"></i> Editar Informacion</a>
                                        </li>                      
                                    </ul>
                                    <!-- UpdateStatus-->
                                    <div id="UpdateStatus" class="tab-content col s12  grey lighten-4">
                                        <div class="row">
                                            
                                            <div class="input-field col s10">
                                                
                                                

                                                <form class="col s12"  method="" name="" action="" style="margin-left: 100px; margin-right: 200px;">
                                                    <div class="row">
                                                        <div class="input-field col s12 center">
                                                            <h6>Mi Informacion</h6>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="input-field col s6">

                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-social-person-outline prefix"></i>
                                                                    <input id="username" type="text" name="nombres" disabled="true">
                                                                    <label for="username" class="center-align">Nombres</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-social-person-outline prefix"></i>
                                                                    <input id="username" type="text" name="apellidos" disabled="true">
                                                                    <label for="username" class="center-align">Apellidos</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-communication-email prefix"></i>
                                                                    <input id="email" type="email" name="email" disabled="true">
                                                                    <label for="email" class="center-align">Email</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                                    <input id="password" type="text" name="ruc" disabled="true">
                                                                    <label for="password">N°RUC</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-communication-email prefix"></i>
                                                                    <input id="email" type="text" name="dni" disabled="true">
                                                                    <label for="email" class="center-align"> (DNI)</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-communication-email prefix"></i>
                                                                    <input disabled="true" type="text" name="fechaNacimiento" class="datepicker picker__input" readonly="" id="P75191522" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P75191522_root"><div class="picker" id="P75191522_root" tabindex="0" aria-hidden="true"><div class="picker__holder">
                                                                            <div class="picker__frame">
                                                                                <div class="picker__wrap">
                                                                                    <div class="picker__box"><div class="picker__date-display">
                                                                                            <div class="picker__weekday-display">Wednesday</div>
                                                                                            <div class="picker__month-display"><div>May</div>

                                                                                            </div>
                                                                                            <div class="picker__day-display">
                                                                                                <div>16</div>

                                                                                            </div>
                                                                                            <div class="picker__year-display">
                                                                                                <div>2018</div>

                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="picker__calendar-container">
                                                                                            <div class="picker__header">
                                                                                                <select class="picker__select--month browser-default" aria-controls="P75191522_table" title="Select a month" disabled="disabled"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4" selected="">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><select class="picker__select--year browser-default" aria-controls="P75191522_table" title="Select a year" disabled="disabled"><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018" selected="">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="P75191522_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="P75191522_table" title="Next month"> </div></div><table class="picker__table" id="P75191522_table" role="grid" aria-controls="P75191522" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">S</th><th class="picker__weekday" scope="col" title="Monday">M</th><th class="picker__weekday" scope="col" title="Tuesday">T</th><th class="picker__weekday" scope="col" title="Wednesday">W</th><th class="picker__weekday" scope="col" title="Thursday">T</th><th class="picker__weekday" scope="col" title="Friday">F</th><th class="picker__weekday" scope="col" title="Saturday">S</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1524978000000" role="gridcell" aria-label="29 April, 2018">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1525064400000" role="gridcell" aria-label="30 April, 2018">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525150800000" role="gridcell" aria-label="1 May, 2018">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525237200000" role="gridcell" aria-label="2 May, 2018">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525323600000" role="gridcell" aria-label="3 May, 2018">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525410000000" role="gridcell" aria-label="4 May, 2018">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525496400000" role="gridcell" aria-label="5 May, 2018">5</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525582800000" role="gridcell" aria-label="6 May, 2018">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525669200000" role="gridcell" aria-label="7 May, 2018">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525755600000" role="gridcell" aria-label="8 May, 2018">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525842000000" role="gridcell" aria-label="9 May, 2018">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525928400000" role="gridcell" aria-label="10 May, 2018">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526014800000" role="gridcell" aria-label="11 May, 2018">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526101200000" role="gridcell" aria-label="12 May, 2018">12</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526187600000" role="gridcell" aria-label="13 May, 2018">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526274000000" role="gridcell" aria-label="14 May, 2018">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526360400000" role="gridcell" aria-label="15 May, 2018">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1526446800000" role="gridcell" aria-label="16 May, 2018" aria-selected="true" aria-activedescendant="true">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526533200000" role="gridcell" aria-label="17 May, 2018">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526619600000" role="gridcell" aria-label="18 May, 2018">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today" data-pick="1526706000000" role="gridcell" aria-label="19 May, 2018">19</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526792400000" role="gridcell" aria-label="20 May, 2018">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526878800000" role="gridcell" aria-label="21 May, 2018">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526965200000" role="gridcell" aria-label="22 May, 2018">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527051600000" role="gridcell" aria-label="23 May, 2018">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527138000000" role="gridcell" aria-label="24 May, 2018">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527224400000" role="gridcell" aria-label="25 May, 2018">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527310800000" role="gridcell" aria-label="26 May, 2018">26</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527397200000" role="gridcell" aria-label="27 May, 2018">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527483600000" role="gridcell" aria-label="28 May, 2018">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527570000000" role="gridcell" aria-label="29 May, 2018">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527656400000" role="gridcell" aria-label="30 May, 2018">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527742800000" role="gridcell" aria-label="31 May, 2018">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1527829200000" role="gridcell" aria-label="1 June, 2018">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1527915600000" role="gridcell" aria-label="2 June, 2018">2</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528002000000" role="gridcell" aria-label="3 June, 2018">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528088400000" role="gridcell" aria-label="4 June, 2018">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528174800000" role="gridcell" aria-label="5 June, 2018">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528261200000" role="gridcell" aria-label="6 June, 2018">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528347600000" role="gridcell" aria-label="7 June, 2018">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528434000000" role="gridcell" aria-label="8 June, 2018">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528520400000" role="gridcell" aria-label="9 June, 2018">9</div></td></tr></tbody></table></div><div class="picker__footer"><button class="btn-flat picker__today" type="button" data-pick="1526706000000" aria-controls="P75191522" disabled="disabled">Today</button><button class="btn-flat picker__clear" type="button" data-clear="1" aria-controls="P75191522" disabled="disabled">Clear</button><button class="btn-flat picker__close" type="button" data-close="true" aria-controls="P75191522" disabled="disabled">Close</button></div></div></div></div></div></div>
                                                                    <label for="dob" class="active">Fecha/Nac:</label>

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="row">

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-communication-email prefix"></i>
                                                                    <input id="email" type="text" name="telefono" disabled="true">
                                                                    <label for="email" class="center-align">Telefono:</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                                    <input id="password" type="text" name="direccion" disabled="true">
                                                                    <label for="password">Direccion</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">


                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                                    <input id="password" type="text" name="numero_cuenta" disabled="true">
                                                                    <label for="password">Numero de Cuenta</label>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                                    <input id="password" type="text" name="numero_cuenta" disabled="true">
                                                                    <label for="password">Numero de Cuenta</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="input-field col s12 center">
                                                            <h6>Informacion Bancaria</h6>

                                                        </div>
                                                    </div>
                                                    <div class="row">


                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                                    <input id="password" type="text" name="numero_cuenta" disabled="true">
                                                                    <label for="password">Numero de Cuenta</label>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                                    <input id="password" type="text" name="numero_cuenta" disabled="true">
                                                                    <label for="password">Numero de Cuenta</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    




                                                </form>
                                                
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- AddPhotos -->
                                    <div id="AddPhotos" class="tab-content col s12  grey lighten-4">
                                        <div class="row">
                                            <div class="col s2">
                                                <img src="../images/avatar.jpg" alt="" class="circle responsive-img valign profile-image-post">
                                            </div>
                                            <div class="input-field col s10">
                                                <textarea id="textarea" row="2" class="materialize-textarea"></textarea>
                                                <label for="textarea" class="">Share your favorites photos!</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m6 share-icons">
                                                <a href="#"><i class="mdi-image-camera-alt"></i></a>
                                                <a href="#"><i class="mdi-action-account-circle"></i></a>
                                                <a href="#"><i class="mdi-hardware-keyboard-alt"></i></a>
                                                <a href="#"><i class="mdi-communication-location-on"></i></a>
                                            </div>
                                            <div class="col s12 m6 right-align">
                                                <!-- Dropdown Trigger -->
                                                <a class='dropdown-button btn' href='#' data-activates='profliePost2'><i class="mdi-action-language"></i> Public</a>

                                                <!-- Dropdown Structure -->
                                                <ul id='profliePost2' class='dropdown-content'>
                                                    <li><a href="#!"><i class="mdi-action-language"></i> Public</a></li>
                                                    <li><a href="#!"><i class="mdi-action-face-unlock"></i> Friends</a></li>                              
                                                    <li><a href="#!"><i class="mdi-action-lock-outline"></i> Only Me</a></li>
                                                </ul>

                                                <a class="waves-effect waves-light btn"><i class="mdi-maps-rate-review left"></i>Post</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CreateAlbum -->
                                    <div id="CreateAlbum" class="tab-content col s12  grey lighten-4">
                                        <div class="row">

                                            <div class="input-field col s10">






                                                <form class="col s12"  method="" name="" action="" style="margin-left: 100px; margin-right: 200px;">
                                                    <div class="row">
                                                        <div class="input-field col s12 center">
                                                            <h5>Editar Informacion</h5>
                                                            <p class="center">Join to our community now !</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="input-field col s6">

                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-social-person-outline prefix"></i>
                                                                    <input id="username" type="text" name="nombres">
                                                                    <label for="username" class="center-align">Nombres</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-social-person-outline prefix"></i>
                                                                    <input id="username" type="text" name="apellidos">
                                                                    <label for="username" class="center-align">Apellidos</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-communication-email prefix"></i>
                                                                    <input id="email" type="email" name="email">
                                                                    <label for="email" class="center-align">Email</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                                    <input id="password" type="text" name="ruc">
                                                                    <label for="password">N°RUC</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-communication-email prefix"></i>
                                                                    <input id="email" type="text" name="dni">
                                                                    <label for="email" class="center-align"> (DNI)</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-communication-email prefix"></i>
                                                                    <input type="text" name="fechaNacimiento" class="datepicker picker__input" readonly="" id="P75191522" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P75191522_root"><div class="picker" id="P75191522_root" tabindex="0" aria-hidden="true"><div class="picker__holder">
                                                                            <div class="picker__frame">
                                                                                <div class="picker__wrap">
                                                                                    <div class="picker__box"><div class="picker__date-display">
                                                                                            <div class="picker__weekday-display">Wednesday</div>
                                                                                            <div class="picker__month-display"><div>May</div>

                                                                                            </div>
                                                                                            <div class="picker__day-display">
                                                                                                <div>16</div>

                                                                                            </div>
                                                                                            <div class="picker__year-display">
                                                                                                <div>2018</div>

                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="picker__calendar-container">
                                                                                            <div class="picker__header">
                                                                                                <select class="picker__select--month browser-default" aria-controls="P75191522_table" title="Select a month" disabled="disabled"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4" selected="">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><select class="picker__select--year browser-default" aria-controls="P75191522_table" title="Select a year" disabled="disabled"><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018" selected="">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="P75191522_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="P75191522_table" title="Next month"> </div></div><table class="picker__table" id="P75191522_table" role="grid" aria-controls="P75191522" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">S</th><th class="picker__weekday" scope="col" title="Monday">M</th><th class="picker__weekday" scope="col" title="Tuesday">T</th><th class="picker__weekday" scope="col" title="Wednesday">W</th><th class="picker__weekday" scope="col" title="Thursday">T</th><th class="picker__weekday" scope="col" title="Friday">F</th><th class="picker__weekday" scope="col" title="Saturday">S</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1524978000000" role="gridcell" aria-label="29 April, 2018">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1525064400000" role="gridcell" aria-label="30 April, 2018">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525150800000" role="gridcell" aria-label="1 May, 2018">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525237200000" role="gridcell" aria-label="2 May, 2018">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525323600000" role="gridcell" aria-label="3 May, 2018">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525410000000" role="gridcell" aria-label="4 May, 2018">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525496400000" role="gridcell" aria-label="5 May, 2018">5</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525582800000" role="gridcell" aria-label="6 May, 2018">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525669200000" role="gridcell" aria-label="7 May, 2018">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525755600000" role="gridcell" aria-label="8 May, 2018">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525842000000" role="gridcell" aria-label="9 May, 2018">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1525928400000" role="gridcell" aria-label="10 May, 2018">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526014800000" role="gridcell" aria-label="11 May, 2018">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526101200000" role="gridcell" aria-label="12 May, 2018">12</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526187600000" role="gridcell" aria-label="13 May, 2018">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526274000000" role="gridcell" aria-label="14 May, 2018">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526360400000" role="gridcell" aria-label="15 May, 2018">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1526446800000" role="gridcell" aria-label="16 May, 2018" aria-selected="true" aria-activedescendant="true">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526533200000" role="gridcell" aria-label="17 May, 2018">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526619600000" role="gridcell" aria-label="18 May, 2018">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today" data-pick="1526706000000" role="gridcell" aria-label="19 May, 2018">19</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526792400000" role="gridcell" aria-label="20 May, 2018">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526878800000" role="gridcell" aria-label="21 May, 2018">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1526965200000" role="gridcell" aria-label="22 May, 2018">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527051600000" role="gridcell" aria-label="23 May, 2018">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527138000000" role="gridcell" aria-label="24 May, 2018">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527224400000" role="gridcell" aria-label="25 May, 2018">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527310800000" role="gridcell" aria-label="26 May, 2018">26</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527397200000" role="gridcell" aria-label="27 May, 2018">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527483600000" role="gridcell" aria-label="28 May, 2018">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527570000000" role="gridcell" aria-label="29 May, 2018">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527656400000" role="gridcell" aria-label="30 May, 2018">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1527742800000" role="gridcell" aria-label="31 May, 2018">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1527829200000" role="gridcell" aria-label="1 June, 2018">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1527915600000" role="gridcell" aria-label="2 June, 2018">2</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528002000000" role="gridcell" aria-label="3 June, 2018">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528088400000" role="gridcell" aria-label="4 June, 2018">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528174800000" role="gridcell" aria-label="5 June, 2018">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528261200000" role="gridcell" aria-label="6 June, 2018">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528347600000" role="gridcell" aria-label="7 June, 2018">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528434000000" role="gridcell" aria-label="8 June, 2018">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1528520400000" role="gridcell" aria-label="9 June, 2018">9</div></td></tr></tbody></table></div><div class="picker__footer"><button class="btn-flat picker__today" type="button" data-pick="1526706000000" aria-controls="P75191522" disabled="disabled">Today</button><button class="btn-flat picker__clear" type="button" data-clear="1" aria-controls="P75191522" disabled="disabled">Clear</button><button class="btn-flat picker__close" type="button" data-close="true" aria-controls="P75191522" disabled="disabled">Close</button></div></div></div></div></div></div>
                                                                    <label for="dob" class="active">Fecha/Nac:</label>

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="row">

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-communication-email prefix"></i>
                                                                    <input id="email" type="text" name="telefono">
                                                                    <label for="email" class="center-align">Telefono:</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                                    <input id="password" type="text" name="direccion">
                                                                    <label for="password">Direccion</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">


                                                        <div class="input-field col s6">
                                                            <div class="input-field col s12 ">
                                                                <ul id="select-options-a497ea3a-d314-e1f5-b896-9ccd4328f93f" class="dropdown-content select-dropdown" style="width: 405px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;">

                                                                    <li class=""><span>Business</span></li></ul>
                                                                <select class="initialized" name="banco">
                                                                    <option value="" disabled="" selected="">Seleccciona un banco</option>

                                                                </select>
                                                                <label>Selecciona un banco</label>
                                                            </div>

                                                        </div>


                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                                    <input id="password" type="text" name="numero_cuenta">
                                                                    <label for="password">Numero de Cuenta</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="input-field col s12 center">
                                                            <h6>Informacion Bancaria</h6>

                                                        </div>
                                                    </div>
                                                    <div class="row">


                                                        <div class="input-field col s6">
                                                            <div class="input-field col s12 ">
                                                                <ul id="select-options-a497ea3a-d314-e1f5-b896-9ccd4328f93f" class="dropdown-content select-dropdown" style="width: 405px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;">

                                                                    <li class=""><span>Business</span></li></ul>
                                                                <select class="initialized" name="banco">
                                                                    <option value="" disabled="" selected="">Seleccciona un banco</option>

                                                                </select>
                                                                <label>Selecciona un banco</label>
                                                            </div>

                                                        </div>


                                                        <div class="input-field col s6">
                                                            <div class="row margin">
                                                                <div class="input-field col s12">
                                                                    <i class="mdi-action-lock-outline prefix"></i>
                                                                    <input id="password" type="text" name="numero_cuenta">
                                                                    <label for="password">Numero de Cuenta</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </form>







                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m6 share-icons">
                                                <a href="#"><i class="mdi-image-camera-alt"></i></a>
                                                <a href="#"><i class="mdi-action-account-circle"></i></a>
                                                <a href="#"><i class="mdi-hardware-keyboard-alt"></i></a>
                                                <a href="#"><i class="mdi-communication-location-on"></i></a>
                                            </div>
                                            <div class="col s12 m6 right-align">
                                                <!-- Dropdown Trigger -->
                                                <a class='dropdown-button btn' href='#' data-activates='profliePost3'><i class="mdi-action-language"></i> Public</a>

                                                <!-- Dropdown Structure -->
                                                <ul id='profliePost3' class='dropdown-content'>
                                                    <li><a href="#!"><i class="mdi-action-language"></i> Public</a></li>
                                                    <li><a href="#!"><i class="mdi-action-face-unlock"></i> Friends</a></li>                              
                                                    <li><a href="#!"><i class="mdi-action-lock-outline"></i> Only Me</a></li>
                                                </ul>

                                                <a class="waves-effect waves-light btn"><i class="mdi-maps-rate-review left"></i>Post</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ profile-page-wall-share -->

                            <!-- profile-page-wall-posts -->

                            <!--/ profile-page-wall-posts -->

                        </div>
                        <!--/ profile-page-wall -->

                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!-- END CONTENT -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START RIGHT SIDEBAR NAV-->
    <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
                <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                <div id="right-search" class="row">
                    <form class="col s12">
                        <div class="input-field">
                            <i class="mdi-action-search prefix"></i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Search</label>
                        </div>
                    </form>
                </div>
            </li>
            <li class="li-hover">
                <ul class="chat-collapsible" data-collapsible="expandable">
                    <li>
                        <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                        <div class="collapsible-body recent-activity">
                            <div class="recent-activity-list chat-out-list row">
                                <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                </div>
                                <div class="col s9 recent-activity-list-text">
                                    <a href="#">just now</a>
                                    <p>Jim Doe Purchased new equipments for zonal office.</p>
                                </div>
                            </div>
                            <div class="recent-activity-list chat-out-list row">
                                <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                </div>
                                <div class="col s9 recent-activity-list-text">
                                    <a href="#">Yesterday</a>
                                    <p>Your Next flight for USA will be on 15th August 2015.</p>
                                </div>
                            </div>
                            <div class="recent-activity-list chat-out-list row">
                                <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                </div>
                                <div class="col s9 recent-activity-list-text">
                                    <a href="#">5 Days Ago</a>
                                    <p>Natalya Parker Send you a voice mail for next conference.</p>
                                </div>
                            </div>
                            <div class="recent-activity-list chat-out-list row">
                                <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                </div>
                                <div class="col s9 recent-activity-list-text">
                                    <a href="#">Last Week</a>
                                    <p>Jessy Jay open a new store at S.G Road.</p>
                                </div>
                            </div>
                            <div class="recent-activity-list chat-out-list row">
                                <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                </div>
                                <div class="col s9 recent-activity-list-text">
                                    <a href="#">5 Days Ago</a>
                                    <p>Natalya Parker Send you a voice mail for next conference.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                        <div class="collapsible-body sales-repoart">
                            <div class="sales-repoart-list  chat-out-list row">
                                <div class="col s8">Target Salse</div>
                                <div class="col s4"><span id="sales-line-1"></span>
                                </div>
                            </div>
                            <div class="sales-repoart-list chat-out-list row">
                                <div class="col s8">Payment Due</div>
                                <div class="col s4"><span id="sales-bar-1"></span>
                                </div>
                            </div>
                            <div class="sales-repoart-list chat-out-list row">
                                <div class="col s8">Total Delivery</div>
                                <div class="col s4"><span id="sales-line-2"></span>
                                </div>
                            </div>
                            <div class="sales-repoart-list chat-out-list row">
                                <div class="col s8">Total Progress</div>
                                <div class="col s4"><span id="sales-bar-2"></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                        <div class="collapsible-body favorite-associates">
                            <div class="favorite-associate-list chat-out-list row">
                                <div class="col s4"><img src="../images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                </div>
                                <div class="col s8">
                                    <p>Eileen Sideways</p>
                                    <p class="place">Los Angeles, CA</p>
                                </div>
                            </div>
                            <div class="favorite-associate-list chat-out-list row">
                                <div class="col s4"><img src="../images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                </div>
                                <div class="col s8">
                                    <p>Zaham Sindil</p>
                                    <p class="place">San Francisco, CA</p>
                                </div>
                            </div>
                            <div class="favorite-associate-list chat-out-list row">
                                <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                </div>
                                <div class="col s8">
                                    <p>Renov Leongal</p>
                                    <p class="place">Cebu City, Philippines</p>
                                </div>
                            </div>
                            <div class="favorite-associate-list chat-out-list row">
                                <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                </div>
                                <div class="col s8">
                                    <p>Weno Carasbong</p>
                                    <p>Tokyo, Japan</p>
                                </div>
                            </div>
                            <div class="favorite-associate-list chat-out-list row">
                                <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                </div>
                                <div class="col s8">
                                    <p>Nusja Nawancali</p>
                                    <p class="place">Bangkok, Thailand</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <!-- LEFT RIGHT SIDEBAR NAV-->


    <!-- END WRAPPER -->


    <!-- END MAIN -->


    <?php include ('../footer.php'); ?>

</body>
</html>
