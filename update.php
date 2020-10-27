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
	$fields = array($Name, $Description, $Deadline);
	$semaphore = false;
	$update = "UPDATE`to do` SET ";
	
	$result = $conn->query($update);
	foreach ($fields as $field) {
		if (isset($_POST[$field] and !empty($_POST[$field]))) { //Getting the following error code here: Fatal error: Cannot use isset() on the result of an expression (you can use "null !== expression" instead) in C:\xampp\htdocs\To_Do_List\update.php on line 22
			$var = mysql_real_escape_string($_POST[$field]);
			$update .= uppercase($field) . " = '$var'";
			$semaphore = true;
		}
		
	}
if ($semaphor) {
	$update .= "WHERE ID ='".$id."'";
}

	 
			//Name='$Name', Description='$Description', Deadline='$Deadline' 
			
	
header("Location: index.php");	
?>
