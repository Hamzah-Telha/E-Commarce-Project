<?php
$con=mysqli_connect('localhost','root','','1may') or die('cant connect to mysql server');
include 'tamplit/header/header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css1/product.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link  href='css/boxicons.min.css' rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>

  <script src="js/bootstrap.min.js"></script>


	<title>Select Services</title>
  <style type="text/css">
    
   * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


/* Create two columns/boxes that floats next to each other */
.nav_1 {
  float: left;
  width: 24%;
  height: 300px; /*only for demonstration, should be removed */
  background: #E0E4EC;
  padding: 20px;
  height: 3000px;
}


.im{
  margin: 30px;
  padding: 20px;
} 
.btn btn-success{
  width: 100px;
  height: 35px;

}
.price_table{
  background:white ;
  padding-top: 40px;
  padding-bottom:40px ;
  padding-left: 5px;
  padding-right: 5px;

  }

  background-position:center;
 /* margin-left: 175px;*/
 /*margin-right: 175px;*/
}
/*  .price_table .container{
  margin: 200px;*/
}
.price_table h1{
  margin-bottom: 30px;

}
.panel{
  margin-bottom: 40px;

}
.panel-heading{
  color: #DE9D3C;
  font-size: 20px;
}
.price_table .box a{
height: 40px;
width: 200px;
font-size: 20px;

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
  height: 3000px;
}

.R input{
  margin: 10px;
  padding: 4%;

  
}

.R form{
  margin-left: 0pxS;
  background-color: ;

}
.R p{
  font-style: italic;
  font-size: 15px;

}
.row{
  background-color: white;
  
}
.rcl{
   background-color: #EEE;

}
.rcl h2{

  font-size: 20px;
  
}
   
   

  </style>
</head>
<body>




  <nav class="nav_1">
    
    <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> May be you like it:<a  href="" class="btn btn-success color:#E0FFF"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="Join us to learn more about the color.">Join</a> </h1>
        <img src="imgs/phpSt.jpg"  style="width:100%" alt="Image">
      
  </div>
  <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> For future disgn:<a href="" class="btn btn-success"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="come to us and buy the modern technology.">Buy Now</a> </h1>
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

  </div>



 <section class="price_table text-center">
 	<div class="container">
 		

 		<div class="row">
      <?php 
                                         
          $con=mysqli_connect('localhost','root','','1may') or die ('Can\'t connect to mysql server');
          $query='SELECT * FROM `labor` ';
          $result=mysqli_query($con,$query) or die ('There ia an error in the query');

          /*  if (! isset($_COOKIE['customer'])) {
              $r=' ../login/index.php';
            }
            elseif (isset($_COOKIE['customer'])){
                $r= "includes/process.php";
            }*/
               if (mysqli_num_rows($result)>0) 
            {
                              

              while($row=mysqli_fetch_assoc($result))
            {
               echo "
                      <div class='col-sm-4 col-md-6 col-lg-3 rcl' style='margin:20px;'>
                      <h2>$row[labor_name]</h2>
                        <p>$row[labor_job_type]</br>
                      <p> <img width='70%' class='img_responsive' src='images/$row[labor_img]'></p>
                      </p><br/>
                      <form action='includes/informationPage/laborInf.php' method='POST'>
                      <input type='hidden' name='labor_name' size='15' maxlength='20' value='$row[labor_name]'>
                     
                          <input type='hidden' name='labor_job_type' size='15' maxlength='20' value='$row[labor_job_type]'>
                      <input type='hidden' name='product_img' size='15' maxlength='20' value='$row[labor_img]'>
                      <button type='submit' class='btn btn-success'>Select</button></a>
                                  </form></div>
                                  ";
                                   }
                                 }

                 else
             {
                  echo 'there is no information to display!!!';
             }

                  mysqli_free_result($result);
                  mysqli_close($con);

            ?> 

 	
 			</div>
 		</div>
 	</div>
 </section>
 



</body>
</html>
<?php include 'tamplit/footer/footer.html';?>