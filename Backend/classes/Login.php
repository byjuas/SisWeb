<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Juas
 */
class Login {

    //put your code here
    private $db_connection = null;
    public $errors = array();
    public $messages = array();

    private function dologinWithPostData() {

        if (empty($_POST['user_name'])) {
            $this->errors[] = "Campo usuario Vacio";
        } elseif (empty($_POST['user_password'])) {
            $this->errors[] = "Password field was empty.";
        } elseif (
                !empty($_POST['user_name']) &&
                !empty($_POST['user_password'])) {

            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            if (!$this->db_connection->connect_errno) {

                $user_name = $this->db_connection->real_escape_string($_POST['user_name']);

                $sql = "SELECT idusuarios, nombre, email usuario, clave
                        FROM usuarios
                        WHERE usuario = '" . $user_name . "' OR email = '" . $user_name . "';";
                $result_of_login_check = $this->db_connection->query($sql);

                if ($result_of_login_check->num_rows == 1) {

                    $result_row = $result_of_login_check->fetch_object();

                    if (password_verify($_POST['user_password'], $result_row->clave)) {

                        $_SESSION['idusuarios'] = $result_row->idusuarios;
                        $_SESSION['nombre'] = $result_row->nombre;
                        $_SESSION['email'] = $result_row->email;
                        $_SESSION['usuario'] = $result_row->usuario;
                        $_SESSION['user_login_status'] = 1;
                    } else {
                        $this->errors[] = "Usuario y/o contraseña no coinciden.";
                    }
                } else {
                    $this->errors[] = "Usuario y/o contraseña no coinciden.";
                }
            }else {
                $this->errors[] = "Problema de conexión de base de datos.";
            }
        }
    }
    
    public function doLogout(){
        // delete the session of the user
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        $this->messages[] = "Has sido desconectado.";

    }
    
    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // default return
        return false;
    }
    
    
    
    

}
