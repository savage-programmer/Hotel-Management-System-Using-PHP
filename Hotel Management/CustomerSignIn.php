<?php

session_start();
include "connect.php";
if(isset($_REQUEST['LOGIN']))
{
	$admin=$_REQUEST['ADMIN'];
	$pass=$_REQUEST['PASSWORD'];
	
	$q="select * from customer where CNIC='$admin' and PhoneNo='$pass'";
	$qr=mysqli_query($con,$q);

	if(mysqli_num_rows($qr)>0)
	{
		$_SEESION['ad']="Admin";
		header("location:  Room.html");
		
	}
	else
	{
		echo"<script>alert('CNIC OR PhoneNo was wrong');</script>";
	}
}
?>
 
<!DOCTYPE html>
<html>
<head>
<style>

body, html {
  height: 100%;
  font-family: calligraphy;
}

* {
  box-sizing: border-box;
}

.bg-img {

  background-image: url("Pic/imag.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 950px;
}


.signinbox {
	color: saddlebrown; 
	position: absolute;
	margin-top: 250px;
	margin-left: 500px;
  max-width: 300px;
  padding: 16px;
  background-color: #FED99F;
}


input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #FCE5D6;
}

input[type=PASSWORD]:focus {
  background-color: #FFC390;
  outline: none;
}
input[type=PASSWORD] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #FCE5D6;
}

input[type=text]:focus {
  background-color: #FFC390;
  outline: none;
}


.button 
{
  	display: inline-block;
  	border-radius: 4px;
  	background-color: #FED99F;
  	border: none;
  	color: brown;
  	text-align: center;
  	font-size: 18px;
  	padding: 10px;
  	width: 130px;
  	transition: all 0.5s;
  	cursor: pointer;
  	margin: -8px;
}

.button span 
{
  	cursor: pointer;
  	display: inline-block;
 	position: relative;
 	transition: 0.5s;
}

.button span:after 
{
  	content: '\00bb';
  	position: absolute;
 	opacity: 0;
  	top: 0;
  	right: -20px;
  	transition: 0.5s;
}

.button:hover span
{
  	padding-right: 25px;
}

.button:hover span:after
 {
 	 opacity: 1;
  	right: 0;
   }
</style>
</head>
<body>

<div class="bg-img">
  <form class="signinbox" method="POST">
    <h1>Login</h1>

    <label for="CNIC"><b>CNIC</b></label>
    <input type="text" placeholder="Enter CNIC" name="ADMIN">
	<label for="PHONENO"><b>PHONE NO</b></label>
	<input type="PASSWORD" placeholder="Enter PHONENO" name="PASSWORD">
	
<button type="submit" name="LOGIN"><CENTER>Sign in</CENTER></button>
  </form>
</div>

</body>
</html>
