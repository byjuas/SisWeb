<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



    if (empty($_POST['nombres'])) {
        $errors[] = "Nombre vacío";
    } elseif (empty($_POST['apellidos'])) {
        $errors[] = "Campo apellidos vacio";
    } elseif (empty($_POST['email'])) {
        $errors[] = "Campo email vacio";
    } elseif (empty($_POST['ruc'])) {
        $errors[] = "Campo ruc vacio";
    } elseif (empty($_POST['dni'])) {
        $errors[] = "Campo dni vacio";
    } elseif (empty($_POST['fechaNacimiento'])) {
        $errors[] = "Campo fechaNacimiento vacio";
    } elseif (empty($_POST['telefono'])) {
        $errors[] = "Campo telefono vacio";
    } elseif (empty($_POST['direccion'])) {
        $errors[] = "Campo direccion vacio";
    } elseif (empty($_POST['numero_cuenta'])) {
        $errors[] = "Campo numero de cuenta vacio";
    } elseif (empty($_POST['numero_operacion'])) {
        $errors[] = "Campo numero de Operacion vacio";
    } elseif (empty($_POST['patrocinador_dni'])) {
        $errors[] = "Campo numero dni del  patrocinador vacio";
    } else if  (
        !empty($_POST['nombres']) &&
	!empty($_POST['apellidos']) &&
	!empty($_POST['ruc']) &&
        !empty($_POST['dni']) &
        !empty($_POST['fechaNacimiento']) &&
        !empty($_POST['telefono']) &&
        !empty($_POST['direccion']) &&
        !empty($_POST['numero_cuenta']) &&
        !empty($_POST['numero_operacion']) &&  
	!empty($_POST['patrocinador_dni'])
    ){

    require_once '../config/db.php'; //Contiene las variables de configuracion para conectar a la base de datos
    require_once '../config/conexion.php'; //Contiene funcion que conecta a la base de datos
    include '../funciones.php';
    
    
    $nombre = mysqli_real_escape_string($con,(strip_tags($_POST["nombres"],ENT_QUOTES)));
    $apellidos = mysqli_real_escape_string($con,(strip_tags($_POST["apellidos"],ENT_QUOTES)));
    $email = mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));
    $ruc = mysqli_real_escape_string($con,(strip_tags($_POST["ruc"],ENT_QUOTES)));
    $dni = mysqli_real_escape_string($con,(strip_tags($_POST["dni"],ENT_QUOTES)));
    $fechaNacimiento = mysqli_real_escape_string($con,(strip_tags($_POST["fechaNacimiento"],ENT_QUOTES)));
    $telefono = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
    $direccion = mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
    $departamento = mysqli_real_escape_string($con,(strip_tags($_POST["departamento"],ENT_QUOTES)));
    $banco = mysqli_real_escape_string($con,(strip_tags($_POST["banco"],ENT_QUOTES)));
    $num_cuenta = mysqli_real_escape_string($con,(strip_tags($_POST["numero_cuenta"],ENT_QUOTES)));
    $num_op_pago = mysqli_real_escape_string($con,(strip_tags($_POST["numero_operacion"],ENT_QUOTES)));
    $banco_operacion = mysqli_real_escape_string($con,(strip_tags($_POST["banco_operacion"],ENT_QUOTES)));
    $dni_patrocinador = mysqli_real_escape_string($con,(strip_tags($_POST["patrocinador_dni"],ENT_QUOTES)));
    
   $sql="INSERT INTO personas (nombres, apellidos, email, ruc, dni, fechaNacimiento, telefono, direccion, iddepartamento, idbanco, num_cuenta_bancaria, num_op_pago, banco_operacion, patrocinador)"
           . " VALUES ('$nombre','$apellidos','$email','$ruc', '$dni','$fechaNacimiento','$telefono','$direccion','$departamento','$banco','$num_cuenta','$num_op_pago','$banco_operacion','$dni_patrocinador')";
		 
   $query_new_insert = mysqli_query ($con,$sql);
        if ($query_new_insert){
				$messages[] = "Usted ha sido Afiliado satisfactoriamente.";
//				$id_persona=get_row('personas','idpersonas', 'codigo_producto', $codigo);
//				$user_id=$_SESSION['user_id'];
//				$firstname=$_SESSION['firstname'];
//				$nota="$firstname agregó $stock producto(s) al inventario";
//				echo guardar_historial($id_producto,$user_id,$date_added,$nota,$codigo,$stock);
//				
			}else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
                        } else {
                            $errors []= "Error desconocido.";
                        }





