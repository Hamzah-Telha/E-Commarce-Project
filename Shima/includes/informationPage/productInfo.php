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
.row{
  background-color: white;
  
}
.rcl{
  background-color: lightblue;
  
}

	</style>
</head>
<body>
 
    <nav>
    	
    </nav>
     <div class="R">

  </div> <?php 
    
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
     if(empty($_POST['req_com']))
    {
      $errors[]='you forget to enter the Adress Location';
    }
    else
    {
      $rc=mysqli_real_escape_string($con,trim($_POST['req_com']));
    }
    if(empty($_POST['req_loc']))
    {
      $errors[]='you forget to enter the Adress Location';
    }
    else
    {
      $rl=mysqli_real_escape_string($con,trim($_POST['req_loc']));
    }

     if (empty($errors)) 
  {
    $pn =$_POST['product_name'];
    $pt=$_POST['product_type'];
    $pc=$_POST['product_company'];
    $pco=$_POST['product_cost'];
    $pi=$_POST['product_img'];

    $query="INSERT INTO `request`( `req_com`, `req_loc`,`product_name`,`product_type`,`product_cost`,`product_company`,`product_img`) VALUES ('$rc','$rl','$pn','$pt','$pco','$pc','$pi')";

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
function printForm($req_com="",$req_loc="")
{


           
  ?>

<div class="S">
  <h2>Add more informtion</h2>
  <p>Enter the location to help us to resive to you fastly,and any comment you have:</p>

   <div class="mb-3 mt-3">
    <?Php 
  
     $pn =$_POST['product_name'];
    $pt=$_POST['product_type'];
    $pc=$_POST['product_company'];
    $pco=$_POST['product_cost'];
    $pi=$_POST['product_img'];

    echo "


  <div class='price_box'>
                              <div class='col-sm-4 col-md-6 col-lg-3 rcl' style='margin:5px;'>
                                <div class='price_box'>
                              <h2> $pn </h2>
                                  <p> $pt <br>
                                <p> $pc <br>
                                 <p> $pco <br>
                                  <img width='20%' class='img_responsive' src='../images/$pi'><br></p>
                                    
                                </p>
                              </p>
                            </div>
                          </div>
                          </div>
                          ";?>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
   <input type="hidden" name="product_name" value='<?php echo $pn ?>'>
   <input type="hidden" name="product_type" value='<?php echo $pt ?>'>
   <input type="hidden" name="product_company" value='<?php echo $pc ?>'>
   <input type="hidden" name="product_cost" value='<?php echo $pco ?>'>
      <input type="hidden" name="product_img" value='<?php echo $pi ?>'>

      <label for="comment">Comments:</label>
      <textarea class="form-control" rows="2" id="comment" name="req_com"   ></textarea>
      <label for="comment">Location Address:</label>
      <textarea class="form-control" rows="2" id="comment" name="req_loc"   required></textarea>
   
    <button  type="submit"  name="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
   
  </form>
</div>
 <?php 
}
?>






</body>
</html>