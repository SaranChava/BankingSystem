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
                    <img class="imageSlide" src="images/img1.jpg">
                    <img class="imageSlide" src="images/img2.jpg">
                    <img class="imageSlide" src="images/img1.jpg">
                </div>
            </div>
            <form method="post">

                <div style="width: 20%; float:right; margin-top:7%" class="formspace">
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
            <?php  ob_start();  
            session_start();?>
            <?php
            include 'database_conn.php';
            if(isset($_POST['login-btn'])){
                if(isset($_POST['customer_id'])){
                    $password = $_POST['password'];
                    $customer_id = $_POST['customer_id'];
                }
                        
                            $sql="SELECT * FROM bank_customers where Customer_ID='$customer_id' and Password='$password' ";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            if($customer_id != $row['Customer_ID'] && $password != $row['Password']){
                                
                            echo '<script>alert("Incorrect Id/Password.")</script>';
                                
                            
                        }
                                
                                
                            else{
                                
                        
                            $_SESSION['customer_login'] = true;
                            $_SESSION['Balance'] = $row['Current_Balance'];
                            $_SESSION['Username'] = $row['Username'];
                            $_SESSION['Account_No'] = $row['Account_no'];
                            $_SESSION['Account_type'] = $row['Account_type'];
                            $_SESSION['Customer_Photo'] = $row['Customer_Photo'];
                            $_SESSION['Mobile_no']	= $row['Mobile_no'];
                            $_SESSION['IFSC_Code'] = $row['IFSC_Code'];
                            $_SESSION['Email_ID']= $row['Email_ID'];
                            $_SESSION['customer_Id'] = $customer_id;
                            $_SESSION['Debit_Card_No'] =$row['Debit_Card_No'];
                            $_SESSION['Nominee_name'] = $row['Nominee_name'];
                            $_SESSION['Nominee_ac_no'] = $row['Nominee_ac_no'];
                            $_SESSION['Branch'] = $row['Branch'];
                            $_SESSION['Cheque'] = $row['Cheque'];
                            date_default_timezone_set('Asia/Kolkata'); 
                            $_SESSION['this_login'] = date("d/m/y h:i:s A");
                            header('location:customer_profile.php');
                            }
                    
                }
            ?>
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