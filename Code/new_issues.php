<html>
<head><title>New Issues</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<body>

<?php  

	include 'Emp_profile_header.php' ;
	include 'database_conn.php';


?>
<div class="new_issues_container">

<table border="1px" cellpadding="10">
			   <th>#</th>
			   <th>Customer name</th>
			   <th>Customer ID</th>
			   <th>Account No.</th>
			   <th>Mobile No.</th>
               <th>Issue ID</th>
               <th>Issue</th>
			   


<?php

	$sql = "SELECT * from bank_customers";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {	   
			  $Sl_no = 1; 
    // output data of each row
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
			</tr>';
	}
}
?>
</table>
</div>
</body>
</html>




