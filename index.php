<!DOCTYPE html>
<html>
<head><title>PHP TO-DO List</title></head>

<body>
<h1>PHP TO-DO List</h1>

<form action="To_Do.php" method="post">
To Do: <input type="text" name="To_Do"><br>

Deadline: <input type="date" name="Deadline"><br>

Note: <input type="text" name="Note"><br>

<input class=" type="submit">
</form> 

<?php
$SQL_C = fopen("SQL_Connect.php", "r");
echo $SQL_C;
fclose($SQL_C);
?>
</body>

</html>