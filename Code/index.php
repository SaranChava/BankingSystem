<html>
    <head>
        <title>Bank Management</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="img/chase.jpg">
    </head>
 
    <body>
        <?php include'header.html'?>

        <div class="index_container">
            <div style="width: 80%; float:left" class="slider">
                <div class="slideimg">
                    <img class="imageSlide" src="images/img1.jpg">
                    <img class="imageSlide" src="images/img2.jpg">
                    <!--<img class="imageSlide" src="images/images_bms3a.png">
                    <img class="imageSlide" src="images/images_bms4a.png">-->
                </div>
            </div>
            <form method="post">

                <div style="width: 20%; float:right" class="formspace">
                    <!--<p class="formspace2"></p>

                    <div class="form">-->
                        <label class="login">LOGIN</label>
                        
                        <div class="input_field">  
                            <label class="userdetail">Customer ID</label><br>
                            <input class="customer_id" type="text" name="customer_id" required /><br>
                            <label class="userdetail">Password</label><br>
                            <input class="password" type="password" name="password" required/><br>
                            <input class="login-btn" type="submit" name="login-btn" value="LOGIN"/><br>
                            <a href="cust_forgetpass.php" class="help"><label class="label_help" >FORGET PASSWORD ?</label></a>
                        </div>
                    <!--</div>-->
                </div>
            </form>

            <br>
            <br>

            <div class="contents">
                <div class="services">
                    <h4>Our Services</h4>
                    <ul>
                        <a href="UserReg.php">
                            <li>New Account</li>
                        </a>
                        <a href="debit_card_form.php"><li>Debit Card Application</li></a>
                        <a href="UserLogin.php"><li>User Login</li></a>
                    </ul>
                </div>

                <div id="aboutus" class="about">
                    <span>About Us</span><br><br>
                    <p>Web-based banking management platform that enables users to access different services enabled by bank to its users. The system also enables employees to provide services to the users.</p>
                </div>
                
            </div>
        </div>

        <?php include 'footer.html';?>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>