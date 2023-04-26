

<html>
    <head><title>My Account</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css" />
 <style>
#customer_profile .link1{

background-color: rgba(5, 21, 71,0.4);

}
    </style>
</head>
    <body>
        <?php 
        include 'customer_profile_sidebar.php';
        include 'customer_profile_header.php'; 
        ?>
        <?php 

        if($_SESSION['customer_login'] == true)
        {

        }
            else{
                header('location:customer_login.php');
            }
        ?>
        <div class="cust_passchng_container">
    <form method="post">
    <br><br><input type="Nominee_name" name="oldnom" placeholder="Old Nominee" required><br>
    <input type="Nominee_name" name="newnom" placeholder="New Nominee" required><br>
    <br><br><input type="Nominee_ac_no" name="oldnom_ac" placeholder="Old Nominee AC" required><br>
    <input type="Nominee_ac_no" name="newnom_ac" placeholder="New Nominee AC" required><br>
    <input type="submit" name="change_nom" placeholder="Old Password"><br><br>
    </form>

</div>
<?php include 'footer.html';?>
    </body>
</html>
<?php  
if(isset($_POST['change_nom'])){
	
	
	$oldnom= $_POST['oldnom'];
	$cnfrm= $_POST['cnfrm'];
	$newnom= $_POST['newnom'];
    $oldnom_ac= $_POST['oldnom_ac'];
	$cnfrm= $_POST['cnfrm'];
	$newnom_ac= $_POST['newnom_ac'];
	include 'database_conn.php';
	$customer_id=$_SESSION['customer_Id'];
	
		$sql="SELECT Nominee_name from bank_customers WHERE Customer_ID='$customer_id' ";
		if(!$result=$conn->query($sql)){
			
			echo "Error:1 " . $sql . "<br>" . $conn->error;
		}
		$row = $result->fetch_assoc();
	
	if($oldpass == $cnfrm){
	
	if($row['Nomimee_name'] == $oldnom ){
		if($roe['Nominee_ac_no'] == $oldnom_ac)
        {
        $sql2="UPDATE bank_customers SET Nominee_name ='$newnom' WHERE bank_customers.Customer_ID=$customer_id ";
        $conn->query($sql2);
		$sql3="UPDATE bank_customers SET Nominee_ac_no ='$newnom_ac' WHERE bank_customers.Customer_ID=$customer_id ";
		$conn->query($sql3);
		if($result=$conn->query($sql3)== TRUE){
			
				
				echo '<script>alert("Nominee Name and Nominee Account Changed Successfully!")</script>';
			
		}
    }
    }
}
}
?>