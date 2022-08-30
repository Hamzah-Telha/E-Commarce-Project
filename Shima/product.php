<?php
$con=mysqli_connect('localhost','root','','1may') or die('cant connect to mysql server');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css1/product.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link  href='css/boxicons.min.css' rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
	<title>product</title>
	<style type="text/css">
    body{
  
  height: 2000px;
}
.price_table{
background: #EEE;
padding-top: 30px;
padding-bottom: 30px; 

}

.price_table h1{
  margin-bottom: 30px;

}
.price_table .price_box{
  background:#FFF ;
  padding: 1px;
  border: 1px solid green;
  margin: 1px;

}
.price_table .price_box h2{
  margin: 5px;
  margin-bottom: 15px;


}
.price_table .price_box p{
  font-size: 35px;
  font-weight: bold;
  color: #666;

}
.price_table .price_box a{

width: 100px;
}




		 * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #989CB8;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
		nav {
  float: left;
  width: 24%;
  height: 300px; /* only for demonstration, should be removed */
  background: #E0E4EC;
  padding: 20px;
  height: 2500px;
}


nav div{
  margin: 30px;
  padding: 20px;
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
	height: 2500px;
}

.R input{
	margin: 10px;
	padding: 4%;

	
}

.R form{
	margin-left: 0pxS;

}
.R p{
	font-style: italic;
	font-size: 15px;

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
    
    <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> May be you like it:<a href="" class="btn btn-success "  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="Join us to learn more about the color.">Buy Now</a> </h1>
        <img src="imgs/home.jpg"  style="width:100%" alt="Image">
      
  </div>
  <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> For the future disgn:<a href="" class="btn btn-success"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="come to us and buy the modern technology.">Buy Now</a> </h1>
        <img src="imgs/homee.jpg"  style="width:100%" alt="Image">
      
  </div>
   <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
  
    <h1> Don not waary: <a href="" class="btn btn-success"  onclick="clickMe"  data-toggle="tooltip" data-placement="right" title="Show the beast things you ever seen.">Buy Now</a></h1>
        <img src="imgs/homeee.jpg"  style="width:100%" alt="Image">
      
  </div>
   <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      
    <h1> Don not waary: <a href="" class="btn btn-success"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="Show the beast things you ever seen.">Buy Now</a></h1>
        <img src="imgs/color.jpg"  style="width:100%" alt="Image"></div>
        
      
  </div>

  </nav>
  <div class="R">
  	<p><h1>We</h1><h2>happy for </h2><h1>helping you.</h1><br/><br/></p><br/>
  		<p><h2>For more services and Application follow us for more and more things we will provid it for you.</h2> </p>
  </div>

   <section class="price_table text-center">
   	<div class="container">
         <div class="row">

          <?php 
                                         
          $con=mysqli_connect('localhost','root','','1may') or die ('Can\'t connect to mysql server');
          $query='SELECT * FROM `stor_product` ';
          $result=mysqli_query($con,$query) or die ('There ia an error in the query');

         /*   if (! isset($_COOKIE['customer'])) {
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
                      <div class='col-sm-4 col-md-6 col-lg-3 rcl' style='margin:5px;'>
                      <h2>$row[product_name]</h2>
                      <p>$row[product_type]<br>
                      <p>$row[product_cost]</br>
                      <p>$row[product_company]</br>
                      <p> <img width='20%' class='img_responsive' src='images/$row[product_img]'></p>
                      </p></p></p><br/>
                      <form action='includes/informationPage/productInfo.php' method='POST'>
                      <input type='hidden' name='product_name' size='15' maxlength='20' value='$row[product_name]'>
                      <input type='hidden' name='product_type' size='15' maxlength='20' value='$row[product_type]'>
                      <input type='hidden' name='product_cost' size='15' maxlength='20' value='$row[product_cost]'>
                      <input type='hidden' name='product_company' size='15' maxlength='20' value='$row[product_company]'>
                      <input type='hidden' name='product_img' size='15' maxlength='20' value='$row[product_img]'>
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

          
    

                           


   				
   	

   			

   				                    
                       





                         
               

   					
  