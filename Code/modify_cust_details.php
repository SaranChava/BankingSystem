

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
   
    <input type="Mobile No" name="newnum" placeholder="Enter New MobileNo" required><br>
    <input type="Landline" name="newLandline" placeholder="Enter New Landline" required ><br>
    <input type="Address" name="newaddress" placeholder="Enter New Address" required><br>
    <input type="submit" name="change_details" placeholder="Old Password"><br><br>
    </form>
    </div>
    <?php include 'footer.html';?>
    </body>
</html>
<?php  
if(isset($_POST['change_details'])){
	
	$newnum= $_POST['newnum'];
    $newLandline= $_POST['newLandline'];
	$newaddress= $_POST['newaddress'];
	include 'database_conn.php';
	$customer_id=$_SESSION['customer_Id'];
	
		$sql="UPDATE bank_customers SET Mobile_no ='$newnum' WHERE bank_customers.Customer_ID=$customer_id ";
        $conn->query($sql);
        $sql2="UPDATE bank_customers SET Landline_no ='$newLandline' WHERE bank_customers.Customer_ID=$customer_id ";
        $conn->query($sql2);
		$sql3="UPDATE bank_customers SET Home_Addr ='$newaddress' WHERE bank_customers.Customer_ID=$customer_id ";
		$conn->query($sql3);
		if($result=$conn->query($sql3)== TRUE){
			
				
				echo '<script>alert("Details has been Changed Successfully!")</script>';
			
		}
    }
    
?>