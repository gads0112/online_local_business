
<?php include "db.php"; ?>
<?php
$gstin=$_POST['gstin'];
$shopname=$_POST['shopname'];
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$password=$_POST['password'];
$epassword=md5($password);
$int_sql= "INSERT INTO shopkeeper(gstin,shopname,username,email,mobile,address,password) 
VALUES ('$gstin','$shopname','$username','$email','$mobile','$address','$epassword')";
if(mysqli_query($con,$int_sql))
{ 
?>
<script>
alert('signup success');</script>
<script>window.location='login.php';</script>

	<?php }else{
    echo "fail to Signin";
}
?>