<?php ob_start() ?>

<html>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		
		<?php include'header.html';  ?>
    </head>
	
    <body>
		<div class="container_regfrm_container_parent">
			<h3>New Account Opening Form</h3>
		
			<div class="container_regfrm_container_parent_child">
				<form name="userRegisterForm" method="post">
					<input type="text" name="name" placeholder="Name"required />
					<select name ="gender" required>
						<option class="default" value="" disabled selected>Gender</option>
						<option value="Male"  >Male</option>
						<option value="Female">Female</option>
						<option value="Others">Others</option>
					</select>

					<input type="text" name="mobile" placeholder="Mobile no"required />
					<input type="text" name="email" placeholder="Email id"required />
					<input type="text" name="landline" placeholder="Landline no"required />
					<input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')"required />
					<input type="text" name="SSN_no" placeholder="SSN(last 4 digits)"required />
					<input type="text" name="citizenship" placeholder="Passport Number" required />
					<input class="address" type="text" name="homeaddrs" placeholder="Home Address" required />
					<input class="address" type="text" name="officeaddrs" placeholder="Office Address"required />
					<input type="text" name="country" placeholder="US" value="US" readonly="readonly"required />

					<select name ="state"  >
						<option class="default" value="" disabled selected>State</option>
						<option value="California">California</option>
						<option value="Texas">Texas</option>
						<option value="Florida">Florida</option>
						<option value="Washington">Washington</option>
						<option value="Hawaii">Hawaii</option>
						<option value="Alaska">Alaska</option>
						<option value="Virginia">Virginia</option>
						<option value="Idaho">Idaho</option>
					</select>

					<select name ="city"  >
						<option class="default" value="" disabled selected>City</option>
						<option value="Los Angeles">Los Angeles</option>
						<option value="San Diego">San Diego</option>
						<option value="Fresno">Fresno</option>
						<option value="Houston">Houston</option>
						<option value="Austin">Austin</option>
						<option value="Dallas">Dallas</option>
						<option value="Texas City">Texas City</option>
						<option value="Miami">Miami</option>
						<option value="Orlando">Orlando</option>
						<option value="Jacksonville">Jacksonville</option>
						<option value="Seattle">Seattle</option>
						<option value="Vancouver">Vancouver</option>
						<option value="Olympia">Olympia</option>
						<option value="Honolulu">Honolulu</option>
						<option value="Hawi">Hawi</option>
						<option value="Lahaina">Lahaina</option>
						<option value="Anchorage">Anchorage</option>
						<option value="Sitka">Sitka</option>
						<option value="Seward">Seward</option>
						<option value="Richmond">Richmond</option>
						<option value="Williamsburg">Williamsburg</option>
						<option value="Alexandria">Alexandria</option>
						<option value="Boise">Boise</option>
						<option value="Twin Falls">Twin Falls</option>
						<option value="Moscow">Moscow</option>
					</select>

					<input type="text" name="pin" placeholder="Pin Code" required />
					<input type="text" name="arealoc" placeholder="Area/Locality" required />
					<input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
					<input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
					
					<select name ="acctype" required >
						<option class="default" value="" disabled selected>Account Type</option>
						<option value="Saving">Saving</option>
						<option value="Current">Current</option>
					</select>
					<input id="registerBtn" type="submit" name="submit" value="Submit">
				</form>

				<script>
					
				</script>
			</div>
		</div>
		<?php include'footer.html';?>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>


<?php 

if(isset($_POST['submit'])){

	session_start();
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['cust_name']=$_POST['name'];
	$_SESSION['cust_gender']=$_POST['gender'];
	$_SESSION['cust_mobile']=$_POST['mobile'];
	$_SESSION['cust_email']=$_POST['email'];
	$_SESSION['cust_landline']=$_POST['landline'];
	$_SESSION['cust_dob']=$_POST['dob'];
	$_SESSION['cust_SSN=']=$_POST['SSN_no'];
	$_SESSION['cust_citizenship']=$_POST['citizenship'];
	$_SESSION['cust_homeaddrs']=$_POST['homeaddrs'];
	$_SESSION['cust_officeaddrs']=$_POST['officeaddrs'];
	$_SESSION['cust_country']=$_POST['country'];
	$_SESSION['cust_state']=$_POST['state'];
	$_SESSION['cust_city']=$_POST['city'];
	$_SESSION['cust_pin']=$_POST['pin'];
	$_SESSION['arealoc']=$_POST['arealoc'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];

	header('location:cust_regfrm_confirm.php');


	require_once 'vendor/autoload.php';

	// use OpenIAM\Auth\AuthClient;
	// use AuthClient;

	// if (isset($_SESSION['staff_login'])) {
	// 	header('location:staff_profile.php');
	// 	exit;
	// }

	$config = [
		'serverUrl' => 'https://openiam.com',
		'clientId' => 'your-client-id',
		'clientSecret' => 'your-client-secret',
	];

	$client = new AuthClient($config);

	if (isset($_POST['registerBtn'])) {
		$staffId = $_POST['staff_id'];
		$password = $_POST['password'];

		// Authenticate the user using OpenIAM's OAuth2 password grant flow
		$accessToken = $client->getAccessTokenByPassword($staffId, $password);

		// Verify the user's access using OpenIAM's Access Management API
		// $amClient = new \OpenIAM\Access\AccessManagementClient($config, $accessToken);
		$isAuthorized = $amClient->isUserAuthorized($staffId, 'staff');

		if ($isAuthorized) {
			// Redirect to the staff profile page
			$_SESSION['staff_login'] = $staffId;
			header('location:cust_regfrm_confirm.php');
			exit;
		} else {
			// Display an error message
			$errorMessage = 'You are not authorized to access this page.';
		}
	}
	
	
	
}

?>