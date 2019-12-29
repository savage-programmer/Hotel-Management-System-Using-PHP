<?php

$con = mysqli_connect("localhost","root","");

if(!$con){
	die('could not connect'.mysql_error());
}

	mysqli_select_db($con,"Project");

		$Invoice_ID = $_POST['Invoice_ID'];
		$Amount = $_POST['Amount'];
		$DOB = $_POST['DOB'];
		$Mgr_ID = $_POST['Mgr_ID'];
		$Bill_ID = $_POST['Bill_ID'];

		$qry = "SELECT * FROM manager WHERE Mgr_ID = $Mgr_ID";
		$qry = "SELECT * FROM bill WHERE Bill_ID = $Bill_ID";

		if(!empty($_POST['sub']) && $_POST['sub']!==""){
			echo "Hey You have press Submit button";
			$sql = "INSERT INTO invoices (Invoice_ID,Generation_Date,Amount,Mgr_ID,Bill_ID) VALUES ('$Invoice_ID','$DOB','$Amount','$Mgr_ID','$Bill_ID')";
		}

  //for UPDATE
	if(!empty($_POST['update']) && $_POST['update'] !== ""){
    echo "Hey! You have presses UPDATE Button. ";
    $sql= "update invoices set Invoice_ID = '$Invoice_ID',Generation_Date = '$DOB' , Amount = '$Amount',Mgr_ID = '$Mgr_ID',Bill_ID = '$Bill_ID' WHERE Invoice_ID = $Invoice_ID";
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
