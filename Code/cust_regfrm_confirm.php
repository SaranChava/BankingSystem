
<?php 
session_start();
if(!isset($_SESSION['$cust_acopening'])){
	
	header('location:UserReg.php');
	
}

?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/cust_regfrm_confirm.css" />

		<?php include 'header.html' ?>
		<title>Confirm</title>
	</head>
	<body>
		<div class="cust_regfrm_cnfrm_container">
			<div class="cnfrm_info">
				<span><?php echo "Name : ".$_SESSION['cust_name']."<br>"; ?> </span>
				<span><?php echo "Gender : ".$_SESSION['cust_gender']."<br>"; ?> </span>
				<span><?php echo "Mobile No : ".$_SESSION['cust_mobile']."<br>"; ?> </span>
				<span><?php echo "Email Id : ".$_SESSION['cust_email']."<br>"; ?> </span>
				<span><?php echo "Landline : ".$_SESSION['cust_landline']."<br>"; ?> </span>
				<span><?php echo "DOB : ".$_SESSION['cust_dob']."<br>"; ?> </span>
				<span><?php echo "pan No : ".$_SESSION['cust_pan=']."<br>"; ?>  </span>
				<span><?php echo "CITIZENSHIP No : ".$_SESSION['cust_citizenship']."<br>"; ?> </span>
				<span><?php echo "Home Address : ".$_SESSION['cust_homeaddrs']."<br>"; ?>  </span>
				<span><?php echo "Office Address : ".$_SESSION['cust_officeaddrs']."<br>"; ?> </span>
				<span><?php echo "Country : ".$_SESSION['cust_country']."<br>"; ?> </span>
				<span><?php echo "State : ".$_SESSION['cust_state']."<br>"; ?> </span>
				<span><?php echo "City : ".$_SESSION['cust_city']."<br>"; ?> </span>
				<span><?php echo "Pin Code : ".$_SESSION['cust_pin']."<br>"; ?> </span>
				<span><?php echo "Area/Locality : ".$_SESSION['arealoc']."<br>"; ?> </span>
				<span><?php echo "Nominee Name : ".$_SESSION['nominee_name']."<br>"; ?> </span>
				<span><?php echo "Nominee Account no : ".$_SESSION['nominee_ac_no']."<br>"; ?> </span>
				<span><?php echo "Account Type : ".$_SESSION['cust_acctype']."<br>"; ?> </span><br>
				
				<form method="post">
					<div class="cnfrm-btn">
						<div class="btn_innerdiv">
							<input class="cnfrm-submit-btn" type="submit" name="cnfrm-submit" value="Confirm" />
							<input class="cnfrm-submit-btn" type="button" value="Go back" onclick="history.back()"/>
						</div>
					</div>
				</form>
			</div>	 
		</div>
	</body>
	<?php include 'footer.html' ?>
</html>

<?php

if(isset($_POST['cnfrm-submit'])){ 
	
	include 'database_conn.php';
	$application_no = rand(1000,9999).mt_rand(10000,99999);
	$name=$_SESSION['cust_name'];
	$gender=$_SESSION['cust_gender'];
	$mobile=$_SESSION['cust_mobile'];
	$email=$_SESSION['cust_email'];
	$landline=$_SESSION['cust_landline'];
	$dob=$_SESSION['cust_dob'];
	$SSN=$_SESSION['cust_SSN='];
	$citizenship=$_SESSION['cust_citizenship'];
	$homeaddrs=$_SESSION['cust_homeaddrs'];
	$officeaddr=$_SESSION['cust_officeaddrs'];
	$country=$_SESSION['cust_country'];
	$state=$_SESSION['cust_state'];
	$city=$_SESSION['cust_city'];
	$pin=$_SESSION['cust_pin'];
	$arealoc=$_SESSION['arealoc'];
	$nominee_name =$_SESSION['nominee_name'];
	$nominee_ac_no =$_SESSION['nominee_ac_no'];
	$acctype=$_SESSION['cust_acctype'];

	
	date_default_timezone_set('Asia/Kolkata'); 
	$application_dt = date("d/m/y h:i:s A");

$sql = "SELECT MAX(Customer_ID) AS Last_Customer FROM bank_customers";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
$row = $result->fetch_assoc();
$Last_customer_ID = rand(100,1000);
$ifsc = 1011;
$customer_id = $ifsc.$Last_customer_ID + 1;
$branch = "Demo Branch";
$acc_no = $ifsc.mt_rand(01,99).$customer_id;

date_default_timezone_set('Asia/Kolkata'); 
$ac_opening_date = date("d/m/y h:i:s A");
	
$conn->autocommit(FALSE);

$sql1 = " INSERT INTO bank_customers (
Username,
Gender,
Customer_ID,
Account_no,
Branch,
IFSC_Code,
Mobile_no,
Landline_no,
SSN,
CITIZENSHIP,
DOB,
Email_ID,
Home_Addr,
Office_Addr,
Country,
State,
City,
Pin_code,
Area_Loc,
Nominee_name,
Nominee_ac_no,
Account_type,
Ac_Opening_Date,
Account_Status)

VALUES (
'$name',
'$gender',				
'$customer_id',
'$acc_no',
'$branch ',
'$ifsc',
'$mob_no',
'$landline',
'$SSN',
'$citizenship',
'$dob',
'$email',     
'$home_addr',
'$office_addr',
'$country',
'$state',
'$city',
'$pin',
'$ara_loc',
'$nominee_name',
'$nominee_acno',
'$acc_type',
'$ac_opening_date',
'ACTIVE') ";

		//Delete the application from pending_account table
		$sql2 = "DELETE FROM pending_accounts Where Application_no = '$application_no' ";

		//Create Passbook table of the customer
		$sql3 = "CREATE TABLE passbook_$customer_id
		(id INT(255) AUTO_INCREMENT PRIMARY KEY, 
		Transaction_id VARCHAR(255) NULL,
		Transaction_date VARCHAR(255) NULL,
		Description VARCHAR(255) NULL,
		Cr_amount VARCHAR(255) NULL,
		Dr_amount VARCHAR(255) NULL,
		Net_Balance VARCHAR(255) NULL,
		Remark VARCHAR(255) NULL)";

		//Create Beneficiary table of the customer
		$sql4 = "CREATE TABLE beneficiary_$customer_id (id INT(255) AUTO_INCREMENT PRIMARY KEY, 
		Beneficiary_name VARCHAR(255) NULL,
		Beneficiary_ac_no VARCHAR(255) NULL,
		IFSC_code VARCHAR(255) NULL,
		Account_type VARCHAR(255) NULL,
		Status VARCHAR(255) NULL,
		Date_added VARCHAR(255) NULL)";

		

		//If all the query is TRUE then issue commit else rollback 
		if($conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE  && $conn->query($sql3) == TRUE  && $conn->query($sql4) == TRUE){
			
			$transaction_id = mt_rand(100,999).mt_rand(1000,9999).mt_rand(10,99);

			$sql = "INSERT into passbook_$customer_id (Transaction_id,Transaction_date,Description,Cr_Amount,Dr_Amount,Net_Balance) 
			VALUES ('$transaction_id','$ac_opening_date','Account Opening','0','0','0') ";
			$conn->query($sql);
		
		$conn->commit();


			echo '<script>alert("Account Created Successfully\n\nAccount no :'.$acc_no.'\n\nHint : Get Debit Card then register e-banking")</script>';
	
	}
	else
			{

				
				echo "Error Creating Account<br><br>".$conn->error;	
				$conn->rollback();	
				

	}
}
else{

echo $sql."<br><br>".$conn->error;

}

	if($conn->query($sql) == true){

	echo  '<script>alert("Application submitted successfully';

			}
			
			else
			  
				{
				
					echo $sql;
			   
			   }

			}
	?>
	
