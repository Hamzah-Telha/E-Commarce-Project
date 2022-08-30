<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

 


 <?php 
    
    
   	$con=mysqli_connect('localhost','root','','1may') or die ('Can\'t connect to mysql server');
   	$query='SELECT * FROM `request`';
       $result=mysqli_query($con,$query) or die ('There ia an error in the query'); 
       if (mysqli_num_rows($result)>0) 
       {
         echo '  <div class="table-responsive">          
                <table class="table">
                <thead>';
         echo   '<tr ><th>Labor name </th>
              <th> labor job type  </th>
              <th>request comment</th>
               <th>request location </th>
                <th>request img</th>
                
                 
              <th>Action</th></tr></thead>';
   
   
       while($row=mysqli_fetch_assoc($result))
       {
         echo " <tbody><tr>
                <td>$row[labor_name]</td>
                  <td>$row[labor_job_type]</td>
                   <td>$row[request_comment]</td>
                    <td>$row[request_location]</td>
                     
             </td></tr> </tbody>";
                
   
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
 
 
    
</body>
</html>