<?php
include"connect.php";
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];

{
   
  $query="INSERT INTO customer(CNIC,First_Name,Last_Name,Address,No_of_People,PhoneNO) VALUES('$a','$b','$c','$d','$e','$f') ";
  
  
   $pro=mysqli_query($con,$query);
   if($pro){
	   echo'<script>window.location.replace("Room.html");</script>';
	   
   }else{
	   echo"ERROR";
   }
	}

?>