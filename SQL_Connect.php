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

//$data = $result->fetch_all();
//echo json_encode($data);
//return $data; 

//if ($result->num_rows > 0) {
if ($result!==false) {
  $html_table = '<div class="table-responsive">
				<table class="table table-dark">
				<thead>
				<tr>
				<th scope="col">ID</th>
				<th scope="col">To Do</th>
				<th scope="col">Notes</th>
				<th scope="col">Deadline</th>
				</tr>
				</thead>';
  
  // output data of each row
  //while($row = $result->fetch_assoc()) { 
  foreach($result as $row) {
	  
  //echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " Description: " . $row["Description"] . " Deadline: " . $row["Deadline"] . " <br>";
  $html_table .= '<tbody>
				  <tr>
				  <th scope="row">' .$row['ID']. '</th>
				  <td>' .$row['Name']. '</td>
				  <td>' .$row['Description']. '</td>
				  <td>' .$row['Deadline']. '</td>
				  </tr>'; 
  }
} else {
  echo "0 results";
}
$conn->close();
$html_table .= '</tbody></table></div>';

echo $html_table;
?>
