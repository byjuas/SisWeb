<?php
require_once ("../config/db.php"); //Contiene las variables de configuracion para conectar a la base de datos
require_once ("../config/conexion.php"); //Contiene funcion que conecta a la base de datos

include ('../clientes/is_logged.php');

$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != NULL) ? $_REQUEST['action'] : '';

if (isset($_GET['id'])) {
    $personas_id = intval($_GET['id']);
    $query = mysqli_query($con, "select * from personas where idpersonas='" . $personas_id . "'");
    $rw_user = mysqli_fetch_array($query);
    $count = $rw_user['idpersonas'];
    if ($user_id != 1) {
        if ($delete1 = mysqli_query($con, "DELETE FROM personas WHERE idpersonas='" . $personas_id . "'")) {
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
    $aColumns = array('nombres', 'apellidos'); //Columnas de busqueda
    $sTable = "personas";
    $sWhere = "";
    if ($_GET['q'] != "") {
        $sWhere = "WHERE (";
        for ($i = 0; $i < count($aColumns); $i++) {
            $sWhere .= $aColumns[$i] . " LIKE '%" . $q . "%' OR ";
        }
        $sWhere = substr_replace($sWhere, "", -3);
        $sWhere .= ')';
    }
    $sWhere .= " order by idpersonas desc";
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
    $reload = '../../Frondend/personas.php';
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
                                        <th data-field="item">Nombres</th>                                      
                                        <th data-field="price">Email</th>
                                        <th data-field="price">Ruc</th>
                                        <th data-field="price">DNI</th>
                                        <th data-field="price">Fech/N</th>
                                        <th data-field="price">telefono</th>
                                        <th data-field="price">direccion</th>
                                        <th data-field="price">idDep</th>
                                        <th data-field="price">idBanco</th>
                                        <th data-field="price">N°Cuenta</th>
                                        <th data-field="price">N°Pago</th>
                                        <th data-field="price">Banco</th>
                                        <th data-field="price">Patro</th>
                                        <th><span class="pull-right">Acciones</span></th>
                                    </tr>
                                </thead>

        <?php
        while ($row = mysqli_fetch_array($query)) {
            $user_id = $row['idpersonas'];
            $fullname = $row['nombres'] . " " . $row["apellidos"];
            $emial = $row['email'];
            $ruc = $row['ruc'];
            $dni = $row['dni'];
            $fechNac = $row['fechaNacimiento'];
            $telefono = $row['telefono'];
            $direccion = $row['direccion'];
            $departamento = $row['iddepartamento'];
            $banco = $row['idbanco'];
            $num_cuenta = $row['num_cuenta_bancaria'];
            $num_pago = $row['num_op_pago'];
            $op_banco = $row['banco_operacion'];
            $patrocinador = $row['patrocinador'];
            //$date_added = date('d/m/Y', strtotime($row['date_added']));
            ?>

                                    <input type="hidden" value="<?php echo $row['firstname']; ?>" id="nombres<?php echo $user_id; ?>">
                                    <input type="hidden" value="<?php echo $row['lastname']; ?>" id="apellidos<?php echo $user_id; ?>">
                                    <input type="hidden" value="<?php echo $user_name; ?>" id="usuario<?php echo $user_id; ?>">
                                    <input type="hidden" value="<?php echo $user_email; ?>" id="email<?php echo $user_id; ?>">

                                    <tbody>
                                        <tr>
                                            <td><?php echo $user_id; ?></td>
                                            <td><?php echo $fullname; ?></td>
                                            <td><?php echo $emial; ?></td>
                                            <td><?php echo $ruc; ?></td>
                                            <td><?php echo $dni; ?></td>
                                            <td><?php echo $fechNac; ?></td>
                                            <td><?php echo $telefono; ?></td>
                                            <td><?php echo $direccion; ?></td>
                                            <td><?php echo $departamento; ?></td>                                            
                                            <td><?php echo $banco; ?></td>
                                            <td><?php echo $num_cuenta; ?></td>
                                            <td><?php echo $num_pago; ?></td>
                                            <td><?php echo $op_banco; ?></td>
                                            <td><?php echo $patrocinador; ?></td>
                                        
                                        </tr>



            <?php
        }
        ?>
                                <tr>
                                    <td colspan=9><span class="pull-right">
        <?php
        echo paginate($reload, $page, $total_pages, $adjacents);
        ?></span></td>
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