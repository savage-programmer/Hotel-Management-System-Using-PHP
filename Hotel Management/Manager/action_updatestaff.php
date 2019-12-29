<?php

$con = mysqli_connect("localhost","root","");

if(!$con){
	die ('Could not connect'.mysql_error());
}

mysqli_select_db($con,"Project");

$Staff_Id = $_POST['Staff_Id'];
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Gender = $_POST['Gender'];
$DOB = $_POST['DOB'];
$Mgr_ID = $_POST['Mgr_ID'];

$qry = "Select * from manager where Mgr_ID = '$Mgr_ID'";


	if(!empty($_POST['submit']) && $_POST['submit']!==""){
		echo "Hey you have press Submit data button";
		$sql = "INSERT INTO staff (Staff_Id,First_Name,Last_Name,Gender,Address,Date_of_Birth,Mgr_ID) VALUES ('$Staff_Id','$First_Name','$Last_Name','$Gender','$Address','$DOB','$Mgr_ID')";
	}

	if(!empty($_POST['Update']) && $_POST['Update']!=="" ){
		echo "Hey You have press Update Button";
		$sql = "UPDATE staff set Staff_Id = '$Staff_Id', First_Name = '$First_Name', Last_Name = '$Last_Name' , Gender = '$Gender' , Address = '$Address', Date_of_Birth = '$DOB' , Mgr_ID = '$Mgr_ID' WHERE Staff_Id = '$Staff_Id' ";
}	
	



// IF query not executed successfully, display error
if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error($con));
  }
else{
    echo "Task Completed";
  }

//Close COnnection
mysqli_close($con)

?>