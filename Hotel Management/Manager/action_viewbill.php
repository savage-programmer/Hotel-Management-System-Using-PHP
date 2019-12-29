<?php


 $con = mysqli_connect("localhost","root","");

 if(!$con){
 	die( 'could not connect '.mysql_error());
}

	mysqli_select_db($con,"Project");

	$Bill_ID = $_POST['Bill_ID'];

	if(!empty($_POST['view']) && $_POST['view'] !== ""){
    
    echo "Hey! You have presses View Data Button. ";
    $sql = "SELECT customer.First_Name , bill.Bill_ID ,bill.Total_Amount,bill.No_of_Invoices,bill.Payment_Date,bill.CNIC FROM customer RIGHT JOIN bill 
ON customer.CNIC = bill.CNIC 
WHERE customer.CNIC = $Bill_ID";
    //$sql ="Select * FROM bill WHERE Bill_ID = $Bill_ID";
	

	if( !($selectRes = mysqli_query($con,$sql))){
		 echo 'Retrieval of data from Database Failed - #'.mysqli_errno().': '.mysqli_error();


	}//result
	else{
		?>
		<table border="2">
			<thead>
    <tr>
      <th>First Name</th>
      <th>Bill ID</th>
      <th>Total Amount</th>
      <th>No_OF Invoices</th>
      <th>Paymont Date</th>
      <th>CNIC</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	if(mysqli_num_rows($selectRes) == 0){
  		echo '<tr><td colspan="4">No Rows Returned</td></tr>';
  	}else{

        if( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['First_Name']}</td><td>{$row['Bill_ID']}</td><td>{$row['Total_Amount']}</td><td>{$row['No_of_Invoices']}</td><td>{$row['Payment_Date']}</td><td>{$row['CNIC']}</td></tr>";
        }
        }
  	}

  	?>
  </tbody>
  
		</table>
		<?php
	
    }//if view button





    if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error($con));
  }
	else{
    echo "Task Completed";
  }

	//Close COnnection
	mysqli_close($con)

?>