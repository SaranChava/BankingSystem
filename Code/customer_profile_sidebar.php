<!DOCTYPE html>

<?php 
    session_start();
    if($_SESSION['customer_login'] != true)
    {
        header('location:customer_login.php');
    }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
    <body id="customer_options">
    <div class="wrapper">
        <div class="sidebar">
        <div class="profile">
                <img src="images/logo.jpeg" alt="logo">
                <h3>Bank of SSDI</h3>
                <p>The dummy one</p>
            </div>
                    <ul>
                        <li>
                            <a href="#" class="active">
                                <span class="item">Modify Account Details</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="item">Modify Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="item">Debit Card Controls</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="item">Credit Card Controls</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="item">Apply Loans</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="item">Customer Care</span>
                            </a>
                        </li>
                    </ul>
        </div>
        </div>
    </body>
</html>