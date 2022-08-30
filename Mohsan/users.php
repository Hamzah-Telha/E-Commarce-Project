<?php
if(!isset($_COOKIE['admin']))
{
  header('Location: ../Hamzah/login/index.php');
}
include 'tamplit/header/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Users information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="../style.css"> 
    <style>
       #users
        { 
border-collapse: collapse;
width: 100%;
       }
       #users td, #users th
        {
           border: 1px solid add;
           padding: 8px; 
       }
       #users tr:nth-child(even){background-color:#f2f2f2 ;}
       #users tr:hover {background-color: add;}
       #users th 
       {
         padding: 12px;
         padding-bottom:12px;
         text-align: left;
         background-color: #4CAF50;
         color: white;
       }
    </style>
</head>
<body>
    <h1> Users information</h1>
    <?php
      $con = mysqli_connect('localhost','root','','1may') or die ('Can\'t connect to mysql server ') ;
      $query = 'SELECT `id`, `username`, `password`, `acc_type` FROM `users` ';
      $result = mysqli_query($con,$query) or die ( 'There is an error in the query') ;
      if (mysqli_num_rows($result) > 0)
      {
          echo '<table id="users">';
          echo '<tr><th>id </th>
                    <th>username</th>
                    <th>password</th>
                    <th>account type</th>
                    <th>Action</th></tr>';
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>$row[id]</td>
                                  <td>$row[username]</td>
                                  <td>$row[password]</td>
                                  <td>$row[acc_type]</td>
                                  <td><a href='updateUser.php?id={$row['id']}'title='Update'>&#9998;</a> | <a href='services_insert_Delete.php?id={$row['id']}' title='Delet'>&#10006</a></td></tr> ";
                    }
                echo '</table>';
      }
      else 
      {
       echo 'There is no information to display!!!';
      }
      mysqli_free_result($result);
      mysqli_close($con);
    ?>
</body>
</html>