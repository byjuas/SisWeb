<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../config/db.php'; //Contiene las variables de configuracion para conectar a la base de datos
include '../config/conexion.php'; //Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code

$nombre = $_POST¨["nombres"];
$apellidos = $_POST¨["apellidos"];
$email = $_POST¨["email"];
$ruc = $_POST¨[""];
$dni = $_POST¨[""];
$fechaNacimiento = $_POST¨["fechaNacimiento"];
$telefono = $_POST¨[""];
$direccion = $_POST¨[""];
$departamento = $_POST¨[""];
$banco = $_POST¨[""];
$num_cuenta = $_POST¨[""];
$num_op_pago = $_POST¨[""];
$banco_operacion = $_POST¨[""];

