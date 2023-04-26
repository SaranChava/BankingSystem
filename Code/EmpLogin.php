<?php
    session_start();
    if(isset($_SESSION['staff_login'])){
        header('location:Emp_profile.php') ;	
    }
?>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <style>
            label.error {
                color: red;
                font-size: 1rem;
                display: block;
                margin-top: 5px;
            }

            input.error {
                border: 1px dashed red;
                font-weight: 300;
                color: red;
            }
        </style>
    </head>

    <body>
        <?php include'header.html' ?>
        
        <div class="staff_login_container">
            <form name="EmpLogInForm" id="EmpLogInForm" method="post" onsubmit="return validateForm()"> 
                <br>
                <div class="">
                    <p class="">

                    <div class="form">
                        <label class="login">Admin Login</label>
                        <div class="input_field">  
                            <label class="userdetail">Admin ID</label><br>
                            <input class="customer_id" type="text" name="staff_id" id="staff_id"/><br>
                            <label class="userdetail">Password</label><br>
                            <input class="password" type="password" name="password" id="password"/><br>
                            <input class="login-btn" type="submit" name="staff_login-btn" value="LOGIN"/><br>
                            <a class="help"><label class="label_help" >FORGET PASSWORD ?</label></a>
                        </div>
                    </div>
                </div>
            </form>

            <script>
                // $(document).ready(function() {
                //     $("#EmpLogInForm").validate({
                //         rules: {
                //             staff_id : {
                //                 required: true
                //             },
                //             password: {
                //                 required: true,
                //                 number: true,
                //                 min: 18
                //             }
                //         },
                //         messages : {
                //             staff_id: {
                //                 required: "Please enter your id"
                //             },
                //             password: {
                //                 required: "password required"
                //             }
                //         }
                //     });
                // });

                function validateForm() {
                    let x = document.forms["EmpLogInForm"]["staff_id"].value;
                    let y = document.forms["EmpLogInForm"]["password"].value;

                    if (x == "") {
                        alert("Admin ID must be filled out");
                        return false;
                    }
                    if (y == "") {
                        alert("Password must be filled out");
                        return false;
                    }
                }
            </script>
        </div>
        <br>
        
        <?php include 'footer.html' ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    </body>
</html> 

<?php 
include 'Emp_login_process.php'
?>

