<html>
<head><title>Apply Debit Card</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include 'header.html' ?>
<div class="debit_card_form_container">
    <br>
<form method="POST">
<input type="text" name="holder_name" placeholder="Name of the account holder"><br>
<input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')"><br>
<input type="text" name="SSN" placeholder="SSN"><br>
<input type="text" name="mob" placeholder="Mobile Number"><br>
<input type="text" name="acc_no" placeholder="Account Number"><br>
<input type="submit" name ="dbt_crd_submit" value = "Submit" ><br>
<form>
</div>
</body>
<?php include 'footer.html' ?>
</html>

<?php

if(isset($_POST['dbt_crd_submit'])){
    $holder_name = $_POST['holder_name'];
    $dob = $_POST['dob'];
    $SSN = $_POST['SSN'];
    $mob = $_POST['mob'];
    $acc_no = $_POST['acc_no'];
    if(empty($_POST['holder_name']) || empty($_POST['dob']) || empty($_POST['SSN']) ||empty($_POST['mob']) ||empty($_POST['acc_no'])){

        echo '<script>alert("All fields are mandatory")</script>';
    }
    else{

    include 'database_conn.php'; 
    $sql = "SELECT * FROM bank_customers WHERE Account_no = '$acc_no' ";
    $result = $conn->query($sql);
    if($result->num_rows <= 0){

        echo '<script>alert("Details mismatch")</script>';

    }
    
    else{

    $row = $result->fetch_assoc();
    if(!is_numeric($mob) || (strlen($mob) > 10 || strlen($mob) < 10)){

        echo '<script>alert("Mobile Number Invalid\n Please enter 10 Digit registered mobile number")</script>';

        }

        elseif($mob != $row['Mobile_no']){

            echo '<script>alert("Please enter your registered mobile number")</script>';
        }
        elseif($holder_name != $row['Username']){

            echo '<script>alert("User name not found in our records")</script>';
            echo $row['Username'];
        }
        elseif($dob != $row['DOB']){

            echo '<script>alert("Incorrect Date of Birth\nPlease enter Date of Birth as on SSN Card")</script>';
    
        }
        elseif($SSN != $row['SSN']){

            echo '<script>alert("Incorrect SSN Number")</script>';

        }
     

        else{
            
            
            $mob_no = $row['Mobile_no'];
           if($row['Debit_Card_No'] === NULL){

            $debit_card = "4213".mt_rand(1000,9999).mt_rand(1000,9999);
            $debit_card_pin = mt_rand(10,99).mt_rand(10,99);
            $sql = "UPDATE bank_customers SET Debit_Card_No = '".$debit_card."', Debit_Card_Pin = '".$debit_card_pin."' WHERE Account_no = '$acc_no' ";
            if($conn->query($sql) == TRUE ){


                
            echo '<script>alert("Your Debit Card has been successfully issued and will be delivered to your home address shortly\n\n. Your Debit Card No is '.$debit_card.' and your Pin is '.$debit_card_pin.'.\n\n For security reasons, we recommend changing your Pin as soon as possible.")</script>';
                
            }
        }

        else{

            echo '<script>alert("You have already applied for debit card\n\nYour Debit Card number is : '.$row['Debit_Card_No'].'")</script>';
        }

        }
    
    }
}

}
?>
