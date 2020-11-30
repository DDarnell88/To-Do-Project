<!DOCTYPE html>
<html>
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PHP TO-DO List</title>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="formHandle.js"></script>
</head>

<body>
<div class="container">
    <h1>PHP TO-DO List</h1>

    <form id="form" action="To_Do.php" method="post">
        <input type="text" name="To_Do" placeholder="To Do"><br>
		<input type="text" name="Description" placeholder="Description"><br>
        <input type="date" name="Deadline"><br>
		
	
        <button id="submit" type="submit" name="submit">Create Entry</button>
	
    </form>
	<br>
    <?php
    $conn = require_once 'SQL_Connect.php';
    $query = "SELECT * FROM `to do`";
    $result = $conn->query($query);

    ?>
    <div id="result" class="table-responsive">
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
