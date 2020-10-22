<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PHP TO-DO List</title>
</head>

<body>
<div class="container">
    <h1>Update Form</h1>

    <form action="update.php" method="POST">
		<input type="text" name="To_Do" placeholder="To Do"><br>
		<input type="text" name="Description" placeholder="Description"><br>
        <input type="date" name="Deadline"><br>
        <button type="submit" name="id" value="<?php echo $id = $_GET['id']?>">Update Entry</button>

    </form>
    <br>
    <?php
	$conn = require_once 'SQL_Connect.php';

    $query = "SELECT * FROM `to do`WHERE ID='".$id."'";
	//var_dump($id); 
	//die;
    $result = $conn->query($query);

    ?>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
            <tr>
				<th scope="col">ID</th>
                <th scope="col">To Do</th>
                <th scope="col">Description</th>
                <th scope="col">Deadline</th>
				<th scope="col">Delete</th>
				<th scope="col">Update</th>
            </tr>
            </thead>
            <tbody>


            <?php
            if ($result !== false) {
                foreach ($result as $row) {
                    ?>

                    <tr>
                        <th scope="row"><?php echo $row['ID'] ?></th>
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['Description'] ?></td>
                        <td><?php echo $row['Deadline'] ?></td>
						<td><a href="delete.php?id=<?php echo $row['ID']?>"><strong>X</strong></td>
						<td><a href="edit.php?id=<?php echo $row['ID']?>"><strong>Update</strong></td>
                    </tr>
                    <?php
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
    </div>
</body>

</html>