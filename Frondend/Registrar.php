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

        <title>Registrar</title>

        <!-- Favicons-->
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



        <div  class="col s12">
            <div class="col-md-offset-11
                 z-depth-4 card-panel">
                 <?php
                 require_once ("../Backend/config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	         require_once ("../Backend/config/conexion.php");//Contiene funcion que conecta a la base de datos
                     ?>
                <form class="col s12"  method="post" name="registrar_cliente" action="../Backend/clientes/registro.php">
                        <div class="row">
                            <div class="input-field col s12 center">
                                <h4>Registrate</h4>
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

                        <div class="input-field col s12">
                            <div class="row margin">
                                <div class="input-field col s12 ">
                                    <ul id="select-options-a497ea3a-d314-e1f5-b896-9ccd4328f93f" class="dropdown-content select-dropdown" style="width: 405px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;">

                                        <li class=""><span>Business</span></li></ul>
                                    <select class="initialized" name="departamento">
                                        <option value="" disabled="" selected="">Seleccciona departamento</option>
                                        <?php
                                        $query_departamento = mysqli_query($con, "select * from departamentos order by nombre_departamento");
                                        while ($rw = mysqli_fetch_array($query_departamento)) {
                                            ?>
                                            <option value="<?php echo $rw['iddepartamentos']; ?>"><?php echo $rw['nombre_departamento']; ?></option>			
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <label>Departamento</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 center">
                                <h5>Informacion Bancaria</h5>

                            </div>
                        </div>
                        <div class="row">


                            <div class="input-field col s6">
                                <div class="input-field col s12 ">
                                    <ul id="select-options-a497ea3a-d314-e1f5-b896-9ccd4328f93f" class="dropdown-content select-dropdown" style="width: 405px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;">

                                        <li class=""><span>Business</span></li></ul>
                                    <select class="initialized" name="banco">
                                        <option value="" disabled="" selected="">Seleccciona un banco</option>
                                        <?php
                                        $query_departamento = mysqli_query($con, "select * from banco order by nombre");
                                        while ($rw = mysqli_fetch_array($query_departamento)) {
                                            ?>
                                            <option value="<?php echo $rw['idbanco']; ?>"><?php echo $rw['nombre']; ?></option>			
                                            <?php
                                        }
                                        ?>
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

                            <div class="input-field col s6">
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="mdi-communication-email prefix"></i>
                                        <input id="email" type="text" name="numero_operacion">
                                        <label for="email" class="center-align">Numero Operacion Pago:</label>
                                    </div>
                                </div>
                            </div>

                            <div class="input-field col s6">
                                <div class="row margin">
                                    <div class="input-field col s12 ">
                                        <ul id="select-options-a497ea3a-d314-e1f5-b896-9ccd4328f93f" class="dropdown-content select-dropdown" style="width: 405px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;">

                                            <li class=""><span>Business</span></li></ul>
                                        <select class="initialized" name="banco_operacion">
                                            <option value="" disabled="" selected="">Seleccciona un banco</option>
                                            <?php
                                        $query_departamento = mysqli_query($con, "select * from banco order by nombre");
                                        while ($rw = mysqli_fetch_array($query_departamento)) {
                                            ?>
                                            <option value="<?php echo $rw['idbanco']; ?>"><?php echo $rw['nombre']; ?></option>			
                                            <?php
                                        }
                                        ?>
                                        </select>
                                        <label>Select Profile</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col s12 center">
                                <h5>Patrocinador</h5>

                            </div>
                        </div>

                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="mdi-action-lock-outline prefix"></i>
                                <input id="password-again" type="text" name="patrocinador_dni">
                                <label for="password-again" class="">DNI del patrocinador</label>
                            </div>
                        </div>

                        <div class="row margin">
                            <div class="input-field col s12">

                                <p>
                                    <input type="checkbox" class="checkbox" id="cagree" name="cagree" data-error=".errorTxt9"> 
                                    <label for="cagree">Si, Acepto los terminos y condiciones</label>
                                </p>
                                <div class="input-field">
                                    <div class="errorTxt6"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="row ma">

                            </div>
                            <button class="input-field col s12">
                                <a class="btn waves-effect waves-light col s12">Registrarme</a>
                            </button>
                            <div class="input-field col s12">
                                <p class="margin center medium-small sign-up">Ya tengo una cuenta <a href="Login.php">Login</a></p>
                            </div>
                        </div>
                    </form>
                    
            </div>
        </div>





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
