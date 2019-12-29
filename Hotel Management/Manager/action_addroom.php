<?php
	
	$con = mysqli_connect("localhost","root" , "");

	//if not connected
	if(!$con){
		die('could not connect'.mysql_error());
	}



	mysqli_select_db($con,"project");

	$id = $_POST['Room_ID'];
	$Room_Status = $_POST['Room_Status'];
	$Room_Type = $_POST['Room_Type'];
	$cnic = $_POST['cnic'];
    $mgrid = $_POST['mgrid'];

    $qry = "Select * from customer where CNIC = '$cnic'";
    $qry = "Select * from manager where Mgr_ID = '$mgrid'";


	//for submit
	if(!empty($_POST['sub']) && $_POST['sub'] !== ""){
		echo "Hey! you have press submit ";
		$sql = "INSERT INTO room (Room_ID,Room_Status,Room_Type,CNIC,Mgr_ID) values ('$id','$Room_Status','$Room_Type','$cnic','$mgrid')";
	}

//if query is not executed succesfully
	if(!mysqli_query($con,$sql)){
		die('Error: '.mysqli_error($con) );
	}else{
		echo "Task Complete";
	}
	mysqli_close($con)
	?>
