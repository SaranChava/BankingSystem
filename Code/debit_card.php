

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
        <?php 
        $cust_id= $_SESSION['customer_Id'];
        include 'database_conn.php'; 
        $sql="SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
		$result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $current_bal = $row['Current_Balance'];
        ?>

<div class="debit_card_container">
	
    <br><br>
    <div class="accdet">
        <span class="heading">Debit Card Details</span><br>
        <label>Account Name : <?php echo $_SESSION['Username']; ?></label>
        <label>Debit Card No : <?php echo $_SESSION['Debit_Card_No']; ?></label>
        <label>Customer Id : <?php echo $_SESSION['customer_Id']; ?></label>
        <label>Account Number : <?php echo $_SESSION['Account_No']; ?></label>
        <label>Available Balance :$<?php echo $current_bal; ?></label>
        <a href="debit_card_form.php"><input type="button" name="pass-chng" value="Apply New Debit Card"></a>
        <a href="debit_card_block.php"><input type="button" name="pass-chng" value="Block Card"></a>
    </div>
    

<br>
</div>
        
    </body>
</html>