<?php


if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>




 <!DOCTYPE html>
 <?php

 include("include/db.php");

 if (isset($_GET['allot_order'])&& isset($_GET['cid']) &&isset($_GET['ao'])) {
   
   $product_id= $_GET['allot_order'];

   $customer_id= $_GET['cid'];

   $allot_order = $_GET['ao'];

$get_app="SELECT * FROM applied_form where project_id = '$product_id' AND user='$customer_id' ";

$run_app =mysqli_query($con , $get_app);

$row_app=mysqli_fetch_array($run_app);


  $perce = $row_app['perc'];


 
 }

 ?>

<html>
<head>
  <title>Track Order</title>
  <meta charset="utf-8">
  <meta name="viewport"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>

<div class="jumbotron" >
  

<h3 style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px; text-align: center; ">ORDER STATUS</h3>

Present Status - <?php echo $allot_order;  ?> - [<?php echo $perce ; ?>%] 




<div class="table-responsive " style=" font-family: 'Montserrat', sans-serif;  padding: 0px 0px 10px 0px";>
  <table class="table">
  <form method="post" action="">
   <tr>
     <td> Select your category</td>

     <td> <select name="track_c" >
       <option><?php echo $allot_order;  ?></option>
       <option>Alloted</option>
       <option>Not Alloted</option>
       <option>Testing</option>
       <option>Presentation</option>

       <option>Shipping</option>
       <option>Delivered</option>
       <option>Completed</option>

       <option>Paid</option>
     </select> </td>

     <td><input type="submit" name="submit" value="Update status"> </td>
   </tr>

   </form>

   <?php

   if (isset($_POST['submit'])) {

    $track_t = $_POST['track_c'];

  $track_c  = trim($track_t);
    



     $track_status ="UPDATE applied_form SET allot_status='$track_c' WHERE user = '$customer_id' && project_id='$product_id'";

     $run_track_status = mysqli_query( $con , $track_status );

     if ($run_track_status) {

          if ($track_c == 'Completed') {
       
      $upd_status = "UPDATE project_details SET flag=2 WHERE  project_id='$product_id'";
     $run_upd_status = mysqli_query( $con , $upd_status );

       if ($run_upd_status) {
       
       echo "<script>alert('$track_c updated')</script>";
       
     }




    }

       if ($track_c == 'Alloted') {
       
      $upd_status = "UPDATE project_details SET flag=0 WHERE  project_id='$product_id'";
     $run_upd_status = mysqli_query( $con , $upd_status );

       if ($run_upd_status) {
       
       echo "<script>alert('$track_c updated')</script>";
       
     }




    }


       
       echo "<script>alert('Order has been updated')</script>";
       echo "<script>window.open('index.php?accept_list','_self')</script>";
     }


   }


   ?>


  </table>
</div>



</div>


         

</body>
</html>


<?php } ?>

      






