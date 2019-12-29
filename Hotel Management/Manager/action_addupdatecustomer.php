<?php

$con = mysqli_connect("localhost","root","");

if(!$con){
	die('could not connect'.mysql_error());
}

	mysqli_select_db($con,"Project");

		$cnic = $_POST['cnic'];
		$First_Name = $_POST['First_Name'];
		$Last_Name = $_POST['Last_Name'];
		$No_of_People = $_POST['No_of_People'];
		$Address = $_POST['Address'];
		$Phone = $_POST['Phone'];

		if(!empty($_POST['sub']) && $_POST['sub']!==""){
			echo "Hey You have press Submit button";
			$sql = "INSERT INTO customer (CNIC,First_Name,Last_Name,Address,No_of_People,PhoneNo) VALUES ('$cnic','$First_Name','$Last_Name','$Address','$No_of_People','$Phone')";
		}

  //for UPDATE
	if(!empty($_POST['update']) && $_POST['update'] !== ""){
    echo "Hey! You have presses UPDATE Button. ";
    $sql= "update customer set CNIC = '$cnic',First_Name = '$First_Name' , Last_Name = '$Last_Name',Address = '$Address',No_of_People = '$No_of_People',PhoneNo = '$Phone' where CNIC = $cnic";
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
