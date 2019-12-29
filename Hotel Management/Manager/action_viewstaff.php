<?php 
	
	$con = mysqli_connect("localhost","root","");

	if(!$con){
		die ('could not connect'.mysql_error());
			}

	mysqli_select_db($con,"Project");

	$Staff_Id = $_POST['Staff_Id'];

	$qry = "SELECT * FROM staff where Staff_Id = '$Staff_Id' ";
	
	if(!empty($_POST['del']) && $_POST['del']!==""){
		echo "Hey You have Press the Delete Button ";
		$sql = "DELETE FROM staff where Staff_Id = $Staff_Id";
	}

	if(!empty($_POST['view']) && $_POST['view']!== ""){
		echo "Hey! you have Presses the View Data Button";
		$sql = "SELECT * FROM staff where Staff_Id = $Staff_Id";
	

	if( !($selectRes = mysqli_query($con,$sql))){
		 echo 'Retrieval of data from Database Failed - #'.mysqli_errno().': '.mysqli_error();


	}//result
	else{
		?>
		<table border="2">
			<thead>
    <tr>
      <th>Staff Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Address</th>
      <th>D-O-B</th>
      <th>Manager ID</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	if(mysqli_num_rows($selectRes) == 0){
  		echo '<tr><td colspan="4">No Rows Returned</td></tr>';
  	}else{

        if( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['Staff_ID']}</td><td>{$row['First_Name']}</td><td>{$row['Last_Name']}</td><td>{$row['Gender']}</td><td>{$row['Address']}</td><td>{$row['Date_of_Birth']}</td><td>{$row['Mgr_ID']}</td></tr>";
        }
        }
  	}

  	?>
  </tbody>
  
		</table>
		<?php
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
