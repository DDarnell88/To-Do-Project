<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to do project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM `to do`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc($query)) {  
  echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " Description: " . $row["Description"] . " Deadline: " . $row["Deadline"] . " <br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>