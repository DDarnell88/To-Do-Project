<?php
$conn = require_once 'SQL_Connect.php';
$id = $_GET['id'];

$delete = "DELETE FROM `to do` WHERE ID ='".$id."'";
$result = $conn->query($delete);

//if ($result !== false){
	//	echo "Delete successful!";
	//} else {
	//	echo "Delete failed!";	
	//}
header("Location: index.php");	
?>
