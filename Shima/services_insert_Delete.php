<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Labor Information</title>
</head>
<body>
      <?php
    if (isset($_GET['id'])) {
        $con = mysqli_connect('localhost', 'root', '123456', '1may') or die('Connection is not established' . mysqli_connect_error());
        $id = (int) mysqli_real_escape_string($con, $_GET['id']);
        $id = is_numeric($id) ? $id : NULL;
        $query = "DELETE FROM labor WHERE `labor_id`= $id";
        $result = mysqli_query($con, $query) or die('There is an error in your query' . mysqli_error($con));
         //header("refresh:5;url=users.php");
        header('Location: ../services/services_insert.php');
       }
       ?>
</body>
</html>