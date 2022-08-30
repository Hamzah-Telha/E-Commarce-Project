<?php
$con=mysqli_connect('localhost','root','','') or die('cant connect to mysql server');



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css1/product.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>product</title>
	<style type="text/css">
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
  height: 2000px;
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
	height: 2000px;
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
.row
{
 margin-right: 0px;
}

	</style>
</head>
<body>
	<header>
		<h1>
			..Products..
		</h1>
	</header>



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
   		<h1>product for stor 1</h1>
   		<div class="row">
   			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro1</h2>
   					<p>1$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   						<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>
   			
   					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro2</h2>
   					<p>15$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>

   					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro3</h2>
   					<p>80$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>

   					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro4</h2>
   					<p>52$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>

   				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro5</h2>
   					<p>100$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>

   				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro6</h2>
   					<p>150$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>

   				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro7</h2>
   					<p>52$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>

   				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro8</h2>
   					<p>30$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>

   				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro9</h2>
   					<p>45$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>

   				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro10</h2>
   					<p>2$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>

   				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro11</h2>
   					<p>20$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>

   				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   				<div class="price_box">
   					<h2>pro12</h2>
   					<p>67$</br>
   						<img class="img-responsive" src="imgs/p1.jpg"></p>
   							<ul class="list-unstyled">
   							<li> tools for building</li>
   							<li>company:</li>
   						</ul><br/><a href="includes/process.php" class="btn btn-success">Select</a>

   					
   				</div>
   				
   			</div>
   		</div>
   		
   	</div>
   	
   </section>
</body>
</html>