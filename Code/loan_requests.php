<html>
<head><title>New Issues</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<body>

<?php  

	include 'Emp_profile_header.php' ;
	include 'database_conn.php';


?>
<div class="new_loan_requests">

<table border="1px" cellpadding="10">
			   <th>id</th>
			   <th>Type of loan</th>
			   <th>loan_amount</th>
			   <th>annual_income</th>
			   <th>Approve</th>
               <th>Deny</th>
<?php

	$sql = "SELECT * from loan_requests where status='pending'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {	   
			  $Sl_no = 1; 
    // output data of each row
		while($row = $result->fetch_assoc()) {
			
		echo '
			<tr>
                <form>
                    <td>'.$row['Customer_id'].'</td>
                    <td>'.$row['type_of_loan'].'</td>
                    <td>'.$row['loan_amount'].'</td>
                    <td>'.$row['annual_income'].'</td>
                    <td><input type="submit" name="approve" value="Approve"/></td>
                    <td><input type="submit" name="deny" value="Deny"/></td>
                </form>
			</tr>';
	}
}
?>
</table>
</div>

<div class="new_loan_requests">

<table border="1px" cellpadding="10">
			   <th>id</th>
			   <th>Type of loan</th>
			   <th>loan_amount</th>
			   <th>annual_income</th>
			   <th>Status</th>
<?php

	$sql = "SELECT * from loan_requests where not status='pending'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {	   
			  $Sl_no = 1; 
    // output data of each row
		while($row = $result->fetch_assoc()) {
			
		echo '
			<tr>
			<td>'.$row['Customer_id'].'</td>
			<td>'.$row['type_of_loan'].'</td>
			<td>'.$row['loan_amount'].'</td>
			<td>'.$row['annual_income'].'</td>
            <td>'.$row['status'].'</td>
			</tr>';
	}
}
?>
</table>
</div>

</body>
</html>




