<!DOCTYPE html>
<html>

<body>
<?php include "index.php";?><br>

This is what you have to do: <strong><?php echo $_POST["To_Do"]; ?></strong><br>

To be completed by: <strong><?php echo $_POST["Deadline"]; ?></strong><br>

Notes: <strong><?php echo $_POST["Note"]; ?></strong><br>

</body>
</html>