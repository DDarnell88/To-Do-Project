<?php
	$conn = require_once 'SQL_Connect.php';	
	
	$Name = mysqli_real_escape_string($conn,$_POST['To_Do']);
	$Description = mysqli_real_escape_string($conn, $_POST['Description']);
	$Deadline = mysqli_real_escape_string($conn, $_POST['Deadline']);

	$insert = "INSERT INTO `to do`(Name, Description, Deadline) VALUES ('$Name', '$Description', '$Deadline');";
	
	
	$result = $conn->query($insert);
	
//	if ($result !== false){
	//	echo "Success!";
	//} else {
		//echo "Failed!";
		//var_dump($result);
		//var_dump($conn);
		//var_dump($insert);	
//	}
	
	header ("Location: index.php");
?>


