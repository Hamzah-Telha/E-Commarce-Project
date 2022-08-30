<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Labor Information</title>
	<style type="text/css">

		nav {
  float: left;
  width: 20%;
  height: 300px; /* only for demonstration, should be removed */
  background: #E0E4EC;
  padding: 20px;
  height: 2000px;
}


nav div{
  margin: 30px;
  padding: 20px;
}
.R  
{
	float: right;
	width: 20%;
	margin: 0px;
	padding-left: 2%;
	text-align: left;
	background-color: #E0E4EC;
	margin-left: 0px;
	margin-right: px;
	height: 2000px;
}
.c{
	text-align: center;
	border: solid 2px ;
	padding: 50px;
	margin: 50px;

}

.c input{
	margin: 10px;
	padding: 1%;

	
}

.c form{
	margin-left: 3px;
	background-color: ;

}
.c p{
	font-style: italic;
	font-size: 15px;

}


	</style>
</head>
<body>
	 <?php 
  //define varivale and set to empty values
  $ln=$lp=$le=$lcn=$lc=$ljt="";
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $ln=test_input($_POST['labor_name']);
      $lp=test_input($_POST['labor_ph_number']);
      $le=test_input($_POST['labor_email']);
      $lcn=test_input($_POST['labor_city_number']);
      $lc=test_input($_POST['labor_city']);
      $ljt=test_input($_POST['labor_job_type']);
    }

    function test_input($data){
      $data=trim($data);
      $data=stripcslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }
    ?>
	 <nav>
    
    <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> May be you like it:<a href="" class="btn btn-success "  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="Join us to learn more about the color.">Join</a> </h1>
        <img src="imgs/lo.jpg"  style="width:100%" alt="Image">
      
  </div>
  <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> For the future disgn:<a href="" class="btn btn-success"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="come to us and buy the modern technology.">Buy Now</a> </h1>
        <img src="imgs/fla.jpg"  style="width:100%" alt="Image">
      
  </div>
   <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> Don not waary: <a href="" class="btn btn-success"  onclick="clickMe"  data-toggle="tooltip" data-placement="right" title="Show the beast things you ever seen.">Show</a></h1>
        <img src="imgs/loo.jpg"  style="width:100%" alt="Image">
      
  </div>
   <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
    <h1> Don not waary: <a href="" class="btn btn-success"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="Show the beast things you ever seen.">Show</a></h1>
        <img src="imgs/color.jpg"  style="width:100%" alt="Image"></div>
        
      
  </div>

  </nav>
  
<div class="R">
</div>

<div class="c">
	
     <?php 
  if (isset($_GET['id'])&& !isset($_POST['update'])) {
		$con=@mysqli_connect('localhost','root','123456','1may') or die ('Connection i snot established' .mysqli_connect_error());
		$id=(int)mysqli_real_escape_string($con,$_GET['id']);
		$id=is_numeric($id) ? $id :NULL;
		$query='SELECT `labor_id`, `labor_name`, `labor_ph_number`, `labor_email`, `labor_city_number`, `labor_city`, `labor_job_type`, `labor_img` FROM `labor` WHERE `labor_id`='.$id;
		$result=@MYSQLI_query($con,$query)or die('There is an error in your query'.mysqli_error($con));
		if (mysqli_num_rows($result)==1) {
			$row=mysqli_fetch_array($result,MYSQLI_BOTH);
			printForm($row['labor_name'],$row['labor_ph_number'],$row['labor_email'],$row['labor_city_number'],$row['labor_city'],$row['labor_job_type'],$row['labor_img']);
		}
		else
		{
			echo 'There is no data to display!';
		}
		@mysqli_free_result($re);
		@mysqli_close($con1);
	}
	 elseif (isset($_POST['update'])) {
		$con=@mysqli_connect('localhost','root','123456','1may') or die('connection is not established'.mysqli_connect_error());
		$id=(int)mysqli_real_escape_string($con,$_GET['id']);
		$id=is_numeric($id) ? $id :NULL;
		$errors=array();
        $ln='';
        $lp='';
        $le='';
        $lcn='';
        $lc='';
        $ljt='';
        $li='';
         if(empty($_POST['labor_name']))
    {
      $errors[]='you forget to enter the labor name.';
    }
    else
    {
      $ln=mysqli_real_escape_string($con,trim($_POST['labor_name']));
    }
    if (empty($_POST['labor_ph_number'])) {
      $errors[]='you forget to enter the labor phone number';
    }
    else
    {
      $lp=mysqli_real_escape_string($con,trim($_POST['labor_ph_number']));
    }
    if (empty($_POST['labor_email'])) {
      $errors[]='you forget to enter the labor email';
    }
    else
    {
      $le=mysqli_real_escape_string($con,trim($_POST['labor_email']));
    }
    if (empty($_POST['labor_city_number'])) {
      $errors[]='you forget to enter the labor number city.';
    }
    else
    {
      $lcn=mysqli_real_escape_string($con,trim($_POST['labor_city_number']));
    }
    if (empty($_POST['labor_city'])) {
      $errors[]='you forget to enter the labor city.';
    }
    else
    {
      $lc=mysqli_real_escape_string($con,trim($_POST['labor_city']));
    }
    if (empty($_POST['labor_job_type'])) {
      $errors[]='you forget to enter the labor job.';
    }
    else
    {
      $ljt=mysqli_real_escape_string($con,trim($_POST['labor_job_type']));
    }
     if (empty($_POST['labor_img'])) {
      $errors[]='you forget to enter the labor job.';
    }
    else
    {
      $li=mysqli_real_escape_string($con,trim($_POST['labor_img']));
    }
if (empty($errors))
$ln=$_POST['labor_name'];
      $lp=$_POST['labor_ph_number'];
      $le=$_POST['labor_email'];
      $lcn=$_POST['labor_city_number'];
      $lc=$_POST['labor_city'];
      $ljt=$_POST['labor_job_type'];
      $li=$_POST['labor_img']; {
			$query="UPDATE `labor` SET `labor_name`='$ln',`labor_ph_number`='$lp',`labor_email`='$le',`labor_city_number`='$lcn',`labor_city`='$lc',`labor_job_type`='$ljt', `labor_img `='$li' WHERE `labor_id`=$id";
			
			$r=@mysqli_query($con,$query);
			if ($r) {
				echo '<h1>Thank you</h1>
				<p> information were updated!</p><p>
				<br/></p>';
				echo 'you will be redirect back within 5 seconds &#128516';
				header("refresh:5; url=services_insert.php");
			}
			else
			{
				echo '<h1> System error</h1>
				<p class="error">you could not update due to a system error.We aplogize for any inconvenience.</p>';
				echo '<p>'.mysqli_error($con).'<br/><br/>Query:'. $query.'</p>';
			}
			mysqli_close($con);
			exit();
		}

		else
		{
			echo '<h1> Error! </h1>
			<p class="error">The following error(s) occurred:<br/>';
			foreach ($errors as $msg) {
				echo "- $msg <br/>\n";
			}
			echo '</p><p>please try again .</p><p><br/></p>';
			printForm($ln,$lp,$le,$lcn,$lc,$ljt,$li);
		}
	}
	else
	{
		echo 'There is no data to display!';
	}
function printForm($labor_name="",$labor_ph_number="",$labor_email="",$labor_city_number="",$labor_city="",$labor_job_type="",$labor_img="")
{

  ?>

  <h1>Insert Information</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  	<div class="input-container">
    <i class="fa fa-user icon"></i>
   <p>Labor Name:<input type="text" name="labor_name" size="40" maxlength="30" value="<?=$labor_name?>"/ required></p></div>
    <p>Labor Phone:<input type="text" name="labor_ph_number" size="40" maxlength="30" value="<?=$labor_ph_number?>"/ required></p>
    <p>Labor Email:<input type="email" name="labor_email" size="40" maxlength="30" value="<?=$labor_email?>"/></p>
    <p>Labor City Num:<input type="text" name="labor_city_number" size="40" maxlength="30" value="<?=$labor_city_number?>"/ required></p>
    <p>Labor City:<input type="text" name="labor_city" size="40" maxlength="30" value="<?=$labor_city?>"/ required></p>
     <p>Labor Job:<input type="text" name="labor_job_type" size="40" maxlength="30" value="<?=$labor_job_type?>"/ required></p
      <p>labor img:   <input type="file" name="labor_img" required></p>           
    <p><input  type="submit"  name="update" value="Update"  ></p>
  </form>
  
</div>




  <?php 
}
?>
  
</body>
</html>