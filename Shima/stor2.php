<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="css1/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  


  <title>Insert Product</title>
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
    #stor_product td, #stor_product th{
      border: 1px solid #ddd;
      padding: 20px;
    }
    .table-responsive .table tr:nth-child(even){
      background-color: #EOE4EC;
    }
    #stor_product tr: hover{
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

/* Style the header */
header {
  background-color: #989CB8;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  background: #E0E4EC;
  padding: 20px;
  height: 2100px;
}


nav div{
  margin: 30px;
  padding: 20px;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 2100px; /* only for demonstration, should be removed */
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
margin: 40px;
}


a {
  width: 40%;
}
  </style>


</head>
<body>





<!-- Advertisement --> 
  <nav> 

    <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <h1> May be you like it:<a href="" class="btn btn-success color:#E0FFF"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="Join us to learn more about the color.">Join</a> </h1>
        <img src="imgs/phpSt.jpg"  style="width:100%" alt="Image">
    </div>
  
    <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
       <h1> For the future disgn:<a href="" class="btn btn-success"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="come to us and buy the modern technology.">Buy Now</a> </h1>
        <img src="imgs/sw.jpg"  style="width:100%" alt="Image">
    </div>

     <div class="im" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <h1> Don not waary: <a href="" class="btn btn-success"  onclick="clickMe" data-toggle="tooltip" data-placement="right" title="Show the beast things you ever seen.">Show</a></h1>
        <img src="imgs/color.jpg"  style="width:100%" alt="Image"></div>
     </div>

 </nav>
  
<!-- container -->
  <article>
    <div class="container">
      <h2>Product Information</h2>
      <p>This information from DB, so any change will be effect in DB.</p>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-success btn-md"  id="myBtn" style="margin-top: 50px;width:25%;" data-toggle="tooltip" data-placement="right" title="Add new information product" >Add </button>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add new product information to DB</h4>
        </div>
        <div class="modal-body">

          <!-- the midlle of the modle -->
          <div id="s">
          <?php 
           if (!isset($_POST['submit']))
            {
             printForm();
               }
               else
                {
                 $con=mysqli_connect('localhost','root','','1may') or die ('Can\'t connect to mysql server');
                  $query='SELECT * FROM `stor_product`';
                   $errors=array();
                      $pn='';
                      $pt='';
                      $pc='';
                      $pco='';
                      $pi='';

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

      /* Query for insert */

   if (empty($errors)) 
   {
    $pn=$_POST['product_name'];
    $pt=$_POST['product_type'];
    $pc=$_POST['product_company'];
    $pco=$_POST['product_cost'];
    $pi=$_POST['product_img'];
    $query="INSERT INTO `stor_product`( `product_name`, `product_type`, `product_company`, `product_cost`,`product_img`,`regestration_date`) VALUES ('$pn','$pt','$pc','$pco','$pi',NOW())";

  if(  $result=mysqli_query($con,$query))
  {
    
      echo '<h1>Thank you </h1></p><p></br></p>';
    // header('Location: ../services/stor2.php');
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
    foreach ($errors as $smg) {
      echo " - $msg<br/>\n";
    }
    echo '</p>Please try again.</p><p><br/></p>';
    printForm($pn,$pt,$pc);
  }
  mysqli_close($con);
}
function printForm($product_name="",$product_type="",$product_company="",$product_cost="",$product_img="")
{

  ?>

  <h1>Insert Information</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <p>Product Name:   <input type="text" name="product_name" size="15" maxlength="20" value="<?=$product_name?>"/ required></p>
    <p>Product Type:   <input type="text" name="product_type" size="15" maxlength="20" value="<?=$product_type?>"/ required></p>
    <p>Product company:<input type="text" name="product_company" size="15" maxlength="20" value="<?=$product_company?>"/ required></p>
    <p>Product cost:   <input type="text" name="product_cost" size="15" maxlength="20" value="<?=$product_cost?>"/ required></p>
    <p>Product img:   <input type="file" name="product_img" required></p>
    <p><input type="submit"  name="submit" value="Save"></p>
  </form>
  <?php 
}
?>
</div> </div> </div> </div> </div>
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal({backdrop: true});
  });
  $("#myBtn2").click(function(){
    $("#myModal2").modal({backdrop: false});
  });
  $("#myBtn3").click(function(){
    $("#myModal3").modal({backdrop: "static"});
  });
});
</script>


 <div id="db">
    <?php 
   /* Query for the select*/
   
    $con=mysqli_connect('localhost','root','','1may') or die ('Can\'t connect to mysql server');
    $query='SELECT * FROM `stor_product`';
    $result=mysqli_query($con,$query) or die ('There ia an error in the query');

    if (mysqli_num_rows($result)>0) 
    {
      echo '  <div class="table-responsive">          
             <table class="table">
             <thead>';
      echo   '<tr ><th>product_name</th>
           <th>product_type</th>
           <th>product_company</th>
             <th>product_cost</th>
              <th>product_img</th>
              <th>regestration_date</th>
           <th>Action</th></tr></thead';


    while($row=mysqli_fetch_assoc($result))
    {
      echo " <tbody><tr><td>$row[product_name]</td>
             <td>$row[product_type]</td>
               <td>$row[product_company]</td>
               <td>$row[product_cost]</td>
                 <td>$row[product_img]</td>
                  <td>$row[regestration_date]</td>
             <td><a href='stor2Update.php?id={$row['product_id']}'
             title='Update' >&#9998;</a> |<a href='stror2Delete.php?id={$row['product_id']}'
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