
<!DOCTYPE html>
<html>
<head>
	<title>Grocery at door step</title>
    <link rel="icon" type="image/png" href="img/cropped-favicon.png">
     <link rel="stylesheet" href="rgcss/bootstrap1.css" >
    <script src="rgjs/jq.js" ></script>
    <script src="rgjs/bs.js" ></script>
	
    </head>
<body>


<?php include "db.php"; ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$epassword= md5($password);
$int_sql= "INSERT INTO customer(username,email,mobile,password) 
VALUES ('$username','$email','$mobile','$epassword')";
if(mysqli_query($con,$int_sql))
{ 
 
    ?>
<script>alert('please check you password');</script>
		<script>window.location='index.php';</script>
	<?php
}else
{
    echo "fail to signin";
}
}
?>
    </body>
</html>