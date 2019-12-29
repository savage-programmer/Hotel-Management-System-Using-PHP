<?php

	$con = mysqli_connect("localhost","root",""); 

	if(!$con){
		die('could not connect'.mysql_error());
	}


	mysqli_select_db($con,"Project");

	$cnic = $_POST['cnic'];

	if(!empty($_POST['del']) && $_POST['del'] !== ""){
		echo "Hey! you have press the Del data button";
		$sql = "DELETE FROM customer where CNIC = $cnic";
	}

	if(!empty($_POST['view']) && $_POST['view']!==""){
		echo "Hey! You have press the view Data button";
		$sql = "Select * From customer where CNIC = $cnic";


  if( !( $selectRes = mysqli_query($con, $sql ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysqli_error();
  }else{
  ?>
  <table border="2">
  <thead>
    <tr>
      <th>CNIC</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>No of People</th>
      <th>Phone No</th>
      
    </tr>
  </thead>
  <tbody>
<?php
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        if( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['CNIC']}</td><td>{$row['First_Name']}</td><td>{$row['Last_Name']}</td><td>{$row['Address']}</td><td>{$row['No_of_People']}</td><td>{$row['PhoneNo']}</td></tr>";
        }
      }
    ?>
  </tbody>
</table>
  
<?php
  
	}
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