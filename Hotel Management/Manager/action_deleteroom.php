
<?php

	$con = mysqli_connect("localhost","root","");

	if(!$con){
		die('could not connect'.mysql_error());
	}


	mysqli_select_db($con,"project");

	$roomId = $_POST['roomId'];
	

	if(!empty($_POST['del']) && $_POST['del'] !== ""){
    
    echo "Hey! You have presses Delete Data Button. ";
    $sql ="DELETE FROM room WHERE ROOM_ID = $roomId";
	
    }





	if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error($con));
  }
	else{
    echo "Task Completed";
  }

	//Close COnnection
	mysqli_close($con)

?>