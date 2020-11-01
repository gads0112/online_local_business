
<?php include "db.php"; ?>
<?php
$email=$_POST['email'];
$password=$_POST['password'];
$epassword=md5($password);
$sql="SELECT * FROM customer WHERE email='$email' AND password='$epassword'";
$run= mysqli_query($con,$sql);
$sql1="SELECT * FROM shopkeeper WHERE email='$email' AND password='$epassword'";
$run1= mysqli_query($con,$sql1);
if(($row=mysqli_fetch_assoc($run)))
{
    session_start();
$cus_id=$row['cus_id'];	
    
{
	
	$_SESSION['username'] = ($row['username']);
	$_SESSION['email'] = ($row['email']);
	$_SESSION['number']= ($row['mobile']);
    $_SESSION['uid'] = $cus_id;
                      					 
?>

<script>
   
    window.location='customer.php'</script>
	<?php

}
}
elseif($row= mysqli_fetch_assoc($run1))
{ 
    session_start();
	$reg_id=$row['shp_id'];
	$_SESSION['Shopname'] = ($row['shopname']);
	$_SESSION['username'] = ($row['username']);
	$_SESSION['GSTIN']= ($row['gstin']);
	$_SESSION['shopemail'] = ($row['email']);
	$_SESSION['number']= ($row['mobile']);
	$_SESSION['shopaddress'] = ($row['address']);
                     $_SESSION['uid'] = $reg_id;
                      					 
?> 
<script>
    
    window.location='shop.php';</script>			
	<?php

}
elseif($email=="gads@gmail.com" && $password=="gads@123")
{
	?>
		
		<script>
         
            window.location='admin.php';</script>
		<?php
	
}
    else {
?>
   <script>alert('please check you email and password');</script>
		<script>window.location='login.php';</script>
		<?php
	}
	  
 ?>