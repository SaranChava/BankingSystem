<html>
<head><title>Active Customers</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<body>

<?php  

	include 'Emp_profile_header.php' ;
	include 'database_conn.php';


?>
<div class="active_customers_container">

<table border="1px" cellpadding="10">
			   <th>#</th>
			   <th>Username</th>
			   <th>Customer ID</th>
			   <th>Account No.</th>
			   <th>Mobile No.</th>
			   <th>Email ID</th>
			   <th>DOB</th>
			   <th>Current Balance</th>
			   <th>SSN</th>
			   <th>Citizenship</th>
			   <th>Debit Card No.</th>
			   <th>CVV</th>
			   <th>Last_Login</th>
			   <th>LastTransaction</th>
			   <th>Account Status</th>


<?php

	
	
	$sql = "SELECT * from bank_customers";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {	   
			  $Sl_no = 1; 
		while($row = $result->fetch_assoc()) {
			
		echo '
			<tr>
			<td>'.$Sl_no++.'</td>
			<td>'.$row['Username'].'</td>
			<td>'.$row['Customer_ID'].'</td>
			<td>'.$row['Account_no'].'</td>
			<td>'.$row['Mobile_no'].'</td>
			<td>'.$row['Email_ID'].'</td>
			<td>'.$row['DOB'].'</td>
			<td>$'.$row['Current_Balance'].'</td>
			<td>'.$row['SSN'].'</td>
			<td>'.$row['CITIZENSHIP'].'</td>
			<td>'.$row['Debit_Card_No'].'</td>
			<td>'.$row['CVV'].'</td>
			<td>'.$row['Last_Login'].'</td>
			<td>$'.$row['LastTransaction'].'</td>
			<td>'.$row['Account_Status'].'</td>
			</tr>';
	}
	
	
}

?>

</table>
</div>
</body>
</html>




