<?php
    ob_start();
    session_start();

    if(isset($_SESSION['customer_login']))
    {
        header('location:customer_profile.php') ;
    }
?>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>

    <body>
        <?php include'header.html' ?>

        <div class="login_container">
            <form method="post"> 

                <div class="formspace">
                    <p class="formspace2"></p>

                    <div class="form">
                        <label class="login">LOGIN</label>
                        
                        <div class="input_field">  
                            <label class="userdetail">Customer ID</label><br>
                            <input class="customer_id" type="text" name="customer_id" required /><br>
                            <label class="userdetail">Password</label><br>
                            <input class="password" type="password" name="password" required/><br>
                            <input class="login-btn" type="submit" name="login-btn" value="LOGIN"/><br>
                            <a href="cust_forgetpass.php" class="help"><label class="label_help" >FORGET PASSWORD ?</label></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <br>

        <?php include 'footer.html' ?>
    </body>
</html> 

<?php include 'customer_login_process.php'?>

