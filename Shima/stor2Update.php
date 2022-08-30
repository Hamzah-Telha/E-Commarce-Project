<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Udate product</title>
	<style type="text/css">
		

nav {
  float: left;
  width: 20%;
  
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
	position: center;
	text-align: center;
	border: solid 2px ;
	padding: 50px;
	margin: 50px;
	

}

.c input{
	margin: 5px;
	padding: 10px;
	width: 250px;

	
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
		$query='SELECT `product_id`, `product_name`, `product_type`, `product_company` ,`product_cost` FROM `stor_product` WHERE product_id='.$id;
		$result=@MYSQLI_query($con,$query)or die('There is an error in your query'.mysqli_error($con));
		if (mysqli_num_rows($result)==1) {
			$row=mysqli_fetch_array($result,MYSQLI_BOTH);
			printForm($row['product_name'],$row['product_type'],$row['product_company']);
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
		$pn='';
		$pt='';
		$pc='';
		$pco='';
                      if (empty('product_name')) 
                       {
                        $errors[]='you forget to enter product name';
                       }
                       else
                        {
                         $pn=mysqli_real_escape_string($con,trim($_POST['product_name']));
                        }


                       if (empty($_POST['product_type']))
                       {
                        $errors[]='you forget to enter product type';
                       }
                      else
                       {
                        $pt=mysqli_real_escape_string($con,trim($_POST['product_type']));
                       }


                       if (empty('product_company'))
                       {
                       $errors[]='you forget to enter product name';
                       }
  
                      else
                      {

                       $pc=mysqli_real_escape_string($con,trim($_POST['product_company']));
                      }


                       if (empty('product_cost')) 
                       {
                        $errors[]='you forget to enter product name';
                       }
  
                       else
                      {

                        $pco=mysqli_real_escape_string($con,trim($_POST['product_cost']));
                      }
                       if (empty('product_img')) 
                       {
                        $errors[]='you forget to enter product img';
                       }
  
                       else
                      {

                        $pco=mysqli_real_escape_string($con,trim($_POST['product_img']));
                      }

	


		if (empty($errors)) {

			$query="UPDATE `stor_product` SET `product_name`='$pn',`product_type`='$pt',`product_company`='$pc', `product_cost`='$pco' `product_img`='$pi' WHERE `product_id`=$id";
		
		
			$r=@mysqli_query($con,$query);
			if ($r) {
				echo '<h1>Thank you</h1>
				<p> information were updated!</p><p>
				<br/></p>';
				echo 'you will be redirect back within 5 seconds &#128516;';
				header("refresh:5; url=stor2.php");
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
			printForm($pn,$pt,$pc,$pi);
		}
	}

	else
	{
		echo 'There is no data to display!';
	}
	Function printForm($product_name="",$product_type="",$product_company="",$product_cost="",$product_img="")
	{
		?>
		<h1>Update</h1>
		<form action="" method="post">
			<p>Product Name:<input type="text" name="product_name" size="15"  maxlength="20" value="<?=$product_name?>"/ required ></p>
			<p>Product Type:<input type="text" name="product_type" size="15" maxlength="20" value="<?=$product_type?>"/ required></p>
			<p>Product Company:<input type="text" name="product_company" size="15" maxlength="20" value="<?=$product_company?>"/ required></p>
			   <p>Product cost:   <input type="text" name="product_cost" size="15" maxlength="20" value="<?=$product_cost?>"/ required></p>
			    <p>Product img:   <input type="file" name="product_img" required></p>
			<p><input type="submit" name="update" value="update"></p>
		</form>
	</div>

		<?php 
	}
	?>
	
	
	
	

</body>
</html>