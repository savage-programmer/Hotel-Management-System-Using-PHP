<?php
include"connect.php";
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];

{
   
  $query="INSERT INTO room(Room_ID,Room_Status,Room_Type) VALUES('$a','$b','$c') ";
  
  
   $pro=mysqli_query($con,$query);
   if($pro){
	   echo "<script>alert('DATA WAS SAVED ');</script>";
	   
   }else{
	   echo"ERROR";
   }
	}

?>