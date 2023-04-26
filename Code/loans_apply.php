

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
        <div class="loans">
            <form name = "loanApplication" method="post">
                <label for="loan-type">Select a loan type:</label>
                <select id="loan-type" name="loan-type">
                    <option value="personal" selected>Personal loan</option>
                    <option value="educational">Educational loan</option>
                    <option value="home">Home loan</option>
                    <option value="vehicle">Vehicle loan</option>
                    <option value="business">Business loan</option>
                </select>
                <br><br>
                <label for="loan-amount">Desired loan amount(USD):</label>
                <input type="number" id="loan-amount" name="loan-amount">
                <br><br>
                <label for="annual-income">Annual income:</label>
                <input type="number" id="annual-income" name="annual-income">
                <br><br>
                <input class="cnfrm-submit-btn" type="submit" name="cnfrm-submit" value="Submit">
                <input class="cnfrm-submit-btn" type="button" value="Go back" onclick="history.back()"/>
            </form>


            <?php

                if(isset($_POST['cnfrm-submit'])){ 
                    
                    include 'database_conn.php';
                    $_SESSION['type_of_loan']=$_POST['loan-type'];
                    $_SESSION['loan_amount']=$_POST['loan-amount'];
                    $_SESSION['annual_income']=$_POST['annual-income'];
                    $type=$_SESSION['type_of_loan'];
                    $amt=$_SESSION['loan_amount'];
                    $income=$_SESSION['annual_income'];
                    $cust_id= $_SESSION['customer_Id'];
                    $sql="SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){

                        $row = $result->fetch_assoc();
                        $id=$row['Id'];
                        $sql1 = "INSERT INTO loan_requests (type_of_loan, loan_amount, annual_income, Customer_id) VALUES ('$type',$amt,$income,$id);";
                        $result = $conn->query($sql1);

                        if($conn->query($sql1) == TRUE){
                            
                                $conn->commit();


                                echo '<script>alert("Loan application submitted succesfully")</script>';
                        
                            }
                            else{
                                    echo "Error submiting loan application<br><br>".$conn->error;	
                                    $conn->rollback();	
                            }
                        }
                        else{
                            echo $sql."<br><br>".$conn->error;
                        }
                }
                ?>
        </div>
    </body>
</html>