<!DOCTYPE html>

<?php 
session_start();
if($_SESSION['staff_login'] != true)
{
	
	 header('location:EmpLogin.php');

}	

?>

<html>
    <head>
    
        <link rel="stylesheet" type="text/css" href="css/style.css" />
	
	</head>
    
    <body>
        <?php	
            include 'database_conn.php';
            
            $staff_id = $_SESSION['staff_id'];
            $sql="SELECT * FROM bank_staff WHERE Staff_id= '$staff_id' ";
            $result=$conn->query($sql);
            if($result->num_rows > 0)
            $row = $result->fetch_assoc();
        ?>

        <div class="head">
            <div class="customer_details">
            </div>
                <div class="welcome">

                <label>Welcome <?php echo $_SESSION['staff_name']; ?></label><br>
            </div>

            <a class="cust_home" href="Emp_profile.php"><input type="button" name="home" value="Home" id="homeBtn"></a>
            <a class="cust_logout" href="EmpLogout.php"><input type="button" name="logout_btn" value="Logout" id="logoutBtn"></a>
        </div>

        <br>
    </body>
</html>