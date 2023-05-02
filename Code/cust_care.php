

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
        

        <div class="cust_care">
            <form name = "IssueApplication" method="post">
                <label for="Issue-type">Select a Issue type:</label>
                <select id="Issue-type" name="Issue-type">
                    <option value="credit">Credit Issue</option>
                    <option value="payment">payment Issue</option>
                    <option value="loan">loan intrest Issue</option>
                    <option value="other" selected>Other</option>
                </select>

                <label for = "Issue_Title">Issue Title</label><br>
                            <input class="Issue_Title" type="text" name="Issue_Title" required /><br>

                
                <label for="Issue_body">Issue Body:</label><br>
                            <textarea name="issue_body" id="issue_body" rows="20" cols="80" required></textarea><br>

                <input type="submit" name="submit" value="Submit">

                
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $Issue_Type = $_POST['Issue-type'];
                $Issue_Title = $_POST['Issue_Title'];
                $Issue_Body = $_POST['issue_body'];
        
                include 'database_conn.php';
                $customer_id = $_SESSION['customer_Id'];
        
                $sql = "INSERT INTO customer_service (type, title, description) 
                        VALUES ('$Issue_Type', '$Issue_Title', '$Issue_Body');";
                $result=$conn->query($sql);

            }
            ?>
        </div>
    </body>
    <?php include 'footer.html';?>
</html>