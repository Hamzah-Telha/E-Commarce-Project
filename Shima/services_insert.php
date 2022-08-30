<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="services/css1/style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Labor Information</title>
	<style type="text/css">
		 body {
    position: relative; 
    background-color: white;
  }
    .table-responsive{
      border-collapse: collapse;
      width: 100%;
      margin-top: 50px;
      margin-left: ;

    }
   
    .table-responsive .table tr:nth-child(even){
      background-color: #EOE4EC;
    }
    .table-responsive tr: hover{
      background-color: #ddd;
    }
   .table-responsive .table th{
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #DE9D3C;
      color: white;
    }
   
    * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


/* Create two columns/boxes that floats next to each other */
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

article {
  float: left;
  padding: 20px;
  width: 60%;
  background-color: #f1f1f1;
  height: 2000px; /* only for demonstration, should be removed */

}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
.price_table{
background: #EEE;
padding-top: 30px;
padding-bottom: 30px;
padding-left: 250px;
margin: 20px;
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
.R input{
	margin: 10px;
	padding: 4%;

	
}

.R form{
	margin-left: 0px;
	background-color: ;

}
.R p{
	font-style: italic;
	font-size: 15px;

}

a {
  width: 40%;
}
	</style>
</head>
<body>




    <header>
 


  <nav>
    
    <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> May be you like it:<a href="" class="btn btn-success "  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="Join us to learn more about the color.">Join</a> </h1>
        <img src="imgs/phpSt.jpg"  style="width:100%" alt="Image">
      
  </div>
  <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> For the future disgn:<a href="" class="btn btn-success"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="come to us and buy the modern technology.">Buy Now</a> </h1>
        <img src="imgs/sw.jpg"  style="width:100%" alt="Image">
      
  </div>
   <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> Don not waary: <a href="" class="btn btn-success"  onclick="clickMe"  data-toggle="tooltip" data-placement="right" title="Show the beast things you ever seen.">Show</a></h1>
        <img src="imgs/St.jpg"  style="width:100%" alt="Image">
      
  </div>
   <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
    <h1> Don not waary: <a href="" class="btn btn-success"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="Show the beast things you ever seen.">Show</a></h1>
        <img src="imgs/color.jpg"  style="width:100%" alt="Image"></div>
             
  </div>

  </nav>
  
<div class="R">

	 <?php 
  if (!isset($_POST['submit']))
   {
    printForm();
  }
  else
  {
    $con=mysqli_connect('localhost','root','123456','1may') or die ('Can\'t connect to mysql server');
    $query='SELECT * FROM `labor`';
   
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
      if (empty('labor_img')) 
    {
       $errors[]='you forget to enter product img';
    }
  
     else
    {

       $pco=mysqli_real_escape_string($con,trim($_POST['labor_img']));
    }

  if (empty($errors)) 
  {
    $ln=$_POST['labor_name'];
      $lp=$_POST['labor_ph_number'];
      $le=$_POST['labor_email'];
      $lcn=$_POST['labor_city_number'];
      $lc=$_POST['labor_city'];
      $ljt=$_POST['labor_job_type'];
      $li=$_POST['labor_img'];
    $query="INSERT INTO `labor`( `labor_name`, `labor_ph_number`, `labor_email`, `labor_city_number`, `labor_city`, `labor_job_type`,`labor_img`,`regestration_date`) VALUES ('$ln','$lp','$le','$lcn','$lc','$ljt','$li',NOW())";

    $result=mysqli_query($con,$query);
    if ($result) {
      echo '<h1>Thank you </h1></p><p></br></p>';
      //header('Location: ../services/services_insert.php');
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
    printForm($ln,$lp,$le,$lcn,$lc,$ljt);
  }
  mysqli_close($con);
}
function printForm($labor_name="",$labor_ph_number="",$labor_email="",$labor_city_number="",$labor_city="",$labor_job_type="",$labor_img="")
{

  ?>

  <h1>Insert Information</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
   <p>Labor Name:<input type="text" name="labor_name" size="40" maxlength="30" value="<?=$labor_name?>"/ required></p>
    <p>Labor Phone:<input type="text" name="labor_ph_number" size="40" maxlength="30" value="<?=$labor_ph_number?>"/ required></p>
    <p>Labor Email:<input type="email" name="labor_email" size="40" maxlength="30" value="<?=$labor_email?>"/ required></p>
    <p>Labor City Num:<input type="text" name="labor_city_number" size="40" maxlength="30" value="<?=$labor_city_number?>"/ required></p>
    <p>Labor City:<input type="text" name="labor_city" size="40" maxlength="30" value="<?=$labor_city?>"/ required></p>
     <p>Labor Job:<input type="text" name="labor_job_type" size="40" maxlength="30" value="<?=$labor_job_type?>"/ required></p>
      <p>labor img:   <input type="file" name="labor_img" required></p>
       
    <p><input  type="submit"  name="submit" value="Save" ></p>
  </form>
  <a href="includes/server.php">Request</a>
  <?php 
}
?>
<br>
<br>
<br>

<!-- button for display the time-->

<button onclick="displayDate()">What is the time?</button>

<script>
function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}
</script>

<!-- the end of button of the time-->


<p id="demo"></p>

</div>
</div>



 <article> 

  <div id="db">
    <?php 
   
    $con=mysqli_connect('localhost','root','','1may') or die ('Can\'t connect to mysql server');
    $query='SELECT * FROM `labor` ';
    $result=mysqli_query($con,$query) or die ('There ia an error in the query');

    if (mysqli_num_rows($result)>0) 
    {
      echo '  <div class="table-responsive">          
             <table class="table">
             <thead>';
      echo   '<tr ><th>labor name</th>
           <th>labor number</th>
           <th> email</th>
            <th>city number</th>
             <th>labor_city</th>
              <th>job type</th>
              <th> labor img</th>
                <th>regestration_date</th>
           <th>Action</th></tr></thead>';


    while($row=mysqli_fetch_assoc($result))
    {
      echo " <tbody><tr><td>$row[labor_name]</td>
             <td>$row[labor_ph_number]</td>
               <td>$row[labor_email]</td>
                <td>$row[labor_city_number]</td>
                 <td>$row[labor_city]</td>
                  <td>$row[labor_job_type]</td>
                    <td>$row[labor_img]</td>
                  <td>$row[regestration_date]</td>
             <td><a href='services_insert_Update.php?id={$row['labor_id']}'
             title='Update' >&#9998;</a> |<a href='services_insert_Delete.php?id={$row['labor_id']}'
             title='Delete'>&#10006;</a></td></tr> </tbody>";
             

    }

    echo '</table>';

    }
    else
    {
      echo 'there is no information to display!!!';
    }

    mysqli_free_result($result);
    mysqli_close($con);

    ?>
  </div>


  </article>
</section>
</body>
</html>