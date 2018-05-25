<?php
if (isset($_GET['query'])){
include("../config/db.php");
include("../config/conexion.php");
    
$respuesta = mysqli_real_escape_string($cn, $_POST['query']);
    $data = array();
    $sql = "SELECT * from personas WHERE nombres LIKE '%" . $respuesta . "%'";
    $res = $cn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $data[] = $row["nombres"];
        }
        echo json_encode($data);
    }

}
?>