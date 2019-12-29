	<?php

	$con = mysqli_connect("localhost","root",""); 

	if(!$con){
		die('could not connect'.mysql_error());
	}


	mysqli_select_db($con,"Project");

	$Invoice_ID = $_POST['Invoice_ID'];

	if(!empty($_POST['del']) && $_POST['del'] !== ""){
		echo "Hey! you have press the Del data button";
		$sql = "DELETE FROM invoices where Invoice_ID = $Invoice_ID";
	}

	if(!empty($_POST['view']) && $_POST['view']!==""){
		echo "Hey! You have press the view Data button";
		$sql = "Select * From invoices where Invoice_ID = $Invoice_ID";


  if( !( $selectRes = mysqli_query($con, $sql ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysqli_error();
  }else{
  ?>
  <table border="2">
  <thead>
    <tr>
      <th>Invoice ID</th>
      <th>Generation Date</th>
      <th>Amount</th>
      <th>Manager ID</th>
      <th>Bill ID</th>
      
    </tr>
  </thead>
  <tbody>
<?php
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        if( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['Invoice_ID']}</td><td>{$row['Generation_Date']}</td><td>{$row['Amount']}</td><td>{$row['Mgr_ID']}</td><td>{$row['Bill_ID']}</td></tr>";
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