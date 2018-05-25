<?php
require_once ("../config/db.php"); //Contiene las variables de configuracion para conectar a la base de datos
require_once ("../config/conexion.php"); //Contiene funcion que conecta a la base de datos

include ('../clientes/is_logged.php');

$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != NULL) ? $_REQUEST['action'] : '';

if (isset($_GET['id'])) {
    $producto_id = intval($_GET['id']);
    $query = mysqli_query($con, "select * from productos where idproductos='" . $producto_id . "'");
    $rw_user = mysqli_fetch_array($query);
    $count = $rw_user['idpersonas'];
    if ($user_id != 1) {
        if ($delete1 = mysqli_query($con, "DELETE FROM productos WHERE idproductos='" . $producto_id . "'")) {
            ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Aviso!</strong> Datos eliminados exitosamente.
            </div>
            <?php
        } else {
            ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Error!</strong> Lo siento algo ha salido mal intenta nuevamente.
            </div>
            <?php
        }
    } else {
        ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Error!</strong> No se puede borrar el usuario administrador. 
        </div>
        <?php
    }
}
if ($action == 'ajax') {
    // escaping, additionally removing everything that could be (html/javascript-) code
    $q = mysqli_real_escape_string($con, (strip_tags($_REQUEST['q'], ENT_QUOTES)));
    $aColumns = array('nombre'); //Columnas de busqueda
    $sTable = "productos";
    $sWhere = "";
    if ($_GET['q'] != "") {
        $sWhere = "WHERE (";
        for ($i = 0; $i < count($aColumns); $i++) {
            $sWhere .= $aColumns[$i] . " LIKE '%" . $q . "%' OR ";
        }
        $sWhere = substr_replace($sWhere, "", -3);
        $sWhere .= ')';
    }
    $sWhere .= " order by idproductos desc";
    //include 'pagination.php'; //include pagination file
    //pagination variables
    $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
    $per_page = 10; //how much records you want to show
    $adjacents = 4; //gap between pages after number of adjacents
    $offset = ($page - 1) * $per_page;
    //Count the total number of row in your table*/
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
    $row = mysqli_fetch_array($count_query);
    $numrows = $row['numrows'];
    $total_pages = ceil($numrows / $per_page);
    $reload = '../../Frondend/Cliente_productos.php';
    //main query to fetch the data
    $sql = "SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
    $query = mysqli_query($con, $sql);
    //loop through fetched data
    if ($numrows > 0) {
        ?>
        <div class="col s12"> 
            <div id="email-details" class="col s12 m14 24 card-panel">
                <div class="email-content-wrap">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <table class="striped success">
                                <thead>
                                    <tr>
                                        <th data-field="no">Id</th>
                                        <th data-field="item">Nombre</th>                                      
                                        <th data-field="price">Marca</th>
                                        <th data-field="price">U/Medida</th>
                                        <th data-field="price">Cantidad</th>
                                        <th data-field="price">Precio</th>
                                        
                                        <th><span class="pull-right">Acciones</span></th>
                                    </tr>
                                </thead>

        <?php
        while ($row = mysqli_fetch_array($query)) {
            $producto_id = $row['idproductos'];
            $nombre = $row['nombre'];
            $marca = $row['marca'];
            $uni_medida = $row['uni_medida'];
            $cantidad = $row['cantidad'];
            $precio = $row['precio'];
            
            //$date_added = date('d/m/Y', strtotime($row['date_added']));
            ?>

                                    <input type="hidden" value="<?php echo $row['firstname']; ?>" id="nombres<?php echo $user_id; ?>">
                                    <input type="hidden" value="<?php echo $row['lastname']; ?>" id="apellidos<?php echo $user_id; ?>">
                                    <input type="hidden" value="<?php echo $user_name; ?>" id="usuario<?php echo $user_id; ?>">
                                    <input type="hidden" value="<?php echo $user_email; ?>" id="email<?php echo $user_id; ?>">

                                    <tbody>
                                        <tr>
                                            <td><?php echo $producto_id; ?></td>
                                            <td><?php echo $nombre; ?></td>
                                            <td><?php echo $marca; ?></td>
                                            <td><?php echo $uni_medida; ?></td>
                                            <td><?php echo $cantidad; ?></td>
                                            <td><?php echo $precio; ?></td>
                                            
                                        
                                        </tr>



            <?php
        }
        ?>
                                <tr>
                                    <td colspan=9><span class="pull-right">
        </span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                                            <?php
                                        }
                                    }
                                    ?>        