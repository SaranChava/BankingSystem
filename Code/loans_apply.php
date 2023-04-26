

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

