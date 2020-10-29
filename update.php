<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		// all is good
	} else {
		
		exit('Invalid Request');
	}
	
$conn = require_once 'SQL_Connect.php';	
$id = $_POST['id'];
//var_dump($_POST);
//die;
	$Name = mysqli_real_escape_string($conn,$_POST['To_Do']);
	$Description = mysqli_real_escape_string($conn, $_POST['Description']);
	$Deadline = mysqli_real_escape_string($conn, $_POST['Deadline']);
	$headings = array("Name", "Description", "Deadline");
	$fields = array($Name, $Description, $Deadline);
	$semaphore = false;
	$update = "UPDATE`to do` SET ";
	
	
	
	foreach (array_combine($headings, $fields) as $heading => $field) {
		if (isset($field) and !empty($field)) { 
			$update .= $heading . " = '$field'";
			$semaphore = true;
	
		}
		
	}
if ($semaphore) {
	$update .= "WHERE ID ='".$id."'";
}

	 
			//Name='$Name', Description='$Description', Deadline='$Deadline' 
			
	$result = $conn->query($update);
	
header("Location: index.php");	
?>
