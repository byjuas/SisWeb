<?php
if (isset($_GET['term'])){
include("../config/db.php");
include("../config/conexion.php");
$return_arr = array();
/* If connection to database, run sql statement. */
if ($con)
{
	
	$fetch = mysqli_query($con,"SELECT * FROM personas where nombres like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Retrieve and store in array the results of the query.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_cliente=$row['idpersonas'];
		$row_array['value'] = $row['nombres'];
		$row_array['idpersonas']=$id_cliente;
		$row_array['nombres']=$row['nombres'];
		$row_array['apellidos']=$row['apellidos'];
                $row_array['email']=$row['email'];
		$row_array['dni']=$row['dni'];
		array_push($return_arr,$row_array);
    }
	
}

/* Free connection resources. */
mysqli_close($con);

/* Toss back results as json encoded array. */
echo json_encode($return_arr);

}
?>