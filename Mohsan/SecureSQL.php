<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register! </title>
</head>
<body>
<?php
if (!isset ($_POST['submit']))
{
    printForm();
}
else
{
  $con = mysqli_connect('localhost','root','','classicmodels') or die ('Can\'t connect to mysql server ');
  $errors = array();
  $fn = '';
  $ln = '';
  $e = '';
  if (empty ($_POST['first_name']))
  {
      $errors[] = 'You forgot to enter your first name.';
  }
  else 
  {
     $fn = mysqli_real_escape_string($con,trim($_POST['first_name']));
  }
  if (empty ($_POST['last_name']))
  {
      $errors[] = ' You forgot to enter your last name .';
  }
  else
  {
      $ln = mysqli_real_escape_string($con, trim($_POST['last_name']));
  }
  if (empty($_POST['email']))
  {
      $errors[] = ' You forgot to enter your email address.';
  }
  else 
  {
      $e = mysqli_real_escape_string($con, trim($_POST['email']));
  }
  if (!empty($_POST['pass1']))
  {
    if ($_POST['pass1'] != $_POST['pass2'])
    {
        $errors[] = ' Your password did not match the confirmed password .';
    }
    else
    {
        $p = mysqli_real_escape_string($con , trim($_POST['pass1']));
    }
  }
  else
  {
      $errors[] = ' You forgot to enter your password.';
  }
   if (empty($errors))
   {
       $query = " INSERT INTO users (first_name, last_name, email, pass, registration_date)VALUES('$fn', '$ln' , '$e', SHA1('$p'), NOW() )";
       $r = @mysqli_query($con, $query);
       if ($r)
       {
           echo '<h1> Thank you!</h1><p> You are now registered</p><p>
           <br/></p>';
       }
       else 
       {
           echo '<h1> System Error </h1>
           <p class="errors"> You could be registered due to a system error. we apologize for any inconvenience.</p>';
           echo '<p>'. mysqli_error($con).'<br/><br/>Query: '.$query.'</p>';
       }
       mysqli_close($con);
       exit();
   }
   else
   {
       echo '<h1>Error!</h1>
       <P class="errors"> The following error (s) occurred:<br/>';
       foreach ($errors as $msg)
       {
           echo " - $msg <br />\n";
       }
       echo '</p><p> Please try again.</p><p><br/></p>';
       printForm($fn,$ln,$e);
   }
   mysqli_close($con);
}
function printForm( $first_name="",$last_name = "",$email = "")
{
   ?>
   <h1>Register</h1>
   <form action="" method="post">
   <p>First Name: <input type="text" name="first_name" size="15" maxlength="20" value="<?=$first_name?>"/></p>
   <p>Last Name: <input type="text" name="last_name" size="15" maxlength="40" value="<?=$last_name?>"/></p>
   <p>Email address: <input type="email" name="email" size="15" maxlength="60" value="<?=$email?>"/></p>
   <p>Password: <input type="password" name="pass1" size="10" maxlength="20" value=""/></p>
   <p>confirm Password: <input type="password" name="pass2" size="10" maxlength="20" value=""/></p>
   <p> <input type="submit" name="submit" value="Register" /> </p>
   </form>
   <?php
}

?>    
</body>
</html>