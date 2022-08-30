<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title>more information</title>
	<style type="text/css">
		  nav {
  float: left;
  width: 24%;
  height: 300px; /* only for demonstration, should be removed */
  background: #E0E4EC;
  padding: 20px;
  height: 2000px;
}
.R  
{
  float: right;
  width: 24%;
  margin: 0px;
  padding-left: 2%;
  text-align: left;
  background-color: #E0E4EC;
  margin-left: 0px;
  margin-right: px;
  height: 2000px;
}
.S {
	border: 1solid black;
	margin-left: 100px;
	margin-right: 500px;
	
	border: solid 2px ;
	padding: 50px;
	margin: 50px;

}
.S h2 ,p{
	text-align: center;
}

.s label{
	text-align: left;
}
.S textarea
{
	width: 600px;
	padding:60px;
		text-align: center;

}

	</style>
</head>
<body>
 
    <nav>
    	
    </nav>
     <div class="R">

  </div> 
  <?php 
    
    if (!isset($_POST['submit']))
    {
       printForm();
    }
    else
    {
   	$con=mysqli_connect('localhost','root','','1may') or die ('Can\'t connect to mysql server');
   	$query='SELECT * FROM `request`'; 
    $errors=array();

    $rc='';
    $rl='';
     if(empty($_POST['request_comment']))
    {
      $errors[]='you forget to enter the Adress Location';
    }
    else
    {
      $rc=mysqli_real_escape_string($con,trim($_POST['request_comment']));
    }
    if(empty($_POST['request_location']))
    {
      $errors[]='you forget to enter the Adress Location';
    }
    else
    {
      $rl=mysqli_real_escape_string($con,trim($_POST['request_location']));
    }

     if (empty($errors)) 
  {
   $ln=$_POST['labor_name'];
  $ljt=$_POST['labor_job_type'];
     

 $query="INSERT INTO `labor_request`(`request_comment`,`request_location`, `labor_name`, `labor_job_type`) VALUES ('$rc','$rl','$ln','$ljt')";
    $result=mysqli_query($con,$query);
    if ($result) {
      echo '<h1>Thank you </h1></p><p></br></p>';
      //header('Location:../includes/informationPage/productInfo.php');
  }
   
  else
  {
      echo '<h1>System Error</h1>
      <p class="error">you could not be insert information due to a system error.we aplogize for any inconvenience.</p>';
      echo '<p>'.mysqli_error($con).'<br/>Query:'.$query.'</p>';
  }

    mysqli_close($con);
    exit();
  }
   else
  {
    echo '<h1>Error!</h1>
    <p class="error">The following error(s) occured:<br/>';
    foreach ($errors as $msg) {
      echo " - $msg<br/>\n";
    }
    echo '</p>Please try again.</p><p><br/></p>';
    printForm($rc,$rl);
  }
  mysqli_close($con);
}
function printForm($request_comment="",$request_location="")
{


           
  ?>

<div class="S">
  <h2>Add more informtion</h2>
  <p>Enter the location to help us to resive to you fastly,and any comment you have:</p>

   <div class="mb-3 mt-3">
    <?Php 
      $ln=$_POST['labor_name'];
      $ljt=$_POST['labor_job_type'];
      

    echo "<div class='price_box'>
          <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>
          <div class='price_box'>
          <h2> $ln </h2>
          <p> $ljt <br>
          
          </p>  </div> </div> </div> ";?>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
   <input type="hidden" name="labor_name"  value="<?php  echo $ln ?>">
   
     <input type="hidden" name="labor_job_type"  value="<?php  echo $ljt ?>">
    

      <label for="comment">Comments:</label>
      <textarea class="form-control" rows="2" id="comment" name="request_comment"   ></textarea>
      <label for="comment">Location Address:</label>
      <textarea class="form-control" rows="2" id="comment" name="request_location"   required></textarea>
   
    <button  type="submit"  name="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
   
  </form>
</div>
 <?php 
}
?>






</body>
</html>