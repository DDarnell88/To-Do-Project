<?php
$conn = require_once 'SQL_Connect.php';	
$id = $_POST['id'];
//var_dump($_POST);
//die;
	$Name = mysqli_real_escape_string($conn,$_POST['To_Do']);
	$Description = mysqli_real_escape_string($conn, $_POST['Description']);
	$Deadline = mysqli_real_escape_string($conn, $_POST['Deadline']);

	$update = "UPDATE`to do` 
			SET Name='$Name', Description='$Description', Deadline='$Deadline' 
			WHERE ID ='".$id."'";
	$result = $conn->query($update);
header("Location: index.php");	
?>
