<?php

include 'conn.php';

if($_REQUEST['empid']) {
	$sql = "SELECT * FROM attributes 
	WHERE id='".$_REQUEST['empid']."'";
	$resultSet = mysqli_query($conn, $sql);	
	$empData = array();
	while( $emp = mysqli_fetch_assoc($resultSet) ) {
		$empData = $emp;
	}
	echo json_encode($empData);
} else {
	echo 0;	
}
?>
