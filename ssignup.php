<! shopkeeper signup form >

<!DOCTYPE html>
<html>
<head>
	<title>Grocery at door step</title>
     <link rel="icon" type="image/png" href="img/cropped-favicon.png">
	<link rel="stylesheet" type="text/css" href="rgcss/bootstrap.css">
	<script type="text/javascript" src="rgcss/bootstrap.js"></script>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <style>
           body  {
    background-image: url("img/team.jpg" );
    background-repeat: no-repeat;
    background-color: #cccccc;
             background-size: cover;
        }
    
    .colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
    </style>
  
</head>
<body >
   
      <div class="container">
	<div class="row" style="text-align: center;">
		<div class="col-md-3"></div>
		<div class="col-md-6 well">
<legend style="background-color: white; color: black; padding-bottom: 25px;text-align: center;padding-top: 25px;font-size: 30px;font-weight: normal;font-family: verdana"> <span class="glyphicon glyphicon-cloud-upload"> </span> &nbsp; Shopkeeper Sign Up </legend>
<hr class="colorgraph">

		<form class="form-horizontal" name="form" action="ssignupphp.php" method="POST">
<fieldset>
     
  
    
    
<p>(<span style="color:red;font-size: 15px;"> * </span>) Marked are mandatory</p>
    
    
    <div class="form-group">
  <label class="col-md-4 control-label" for="gst">GSTIN Number<span style="color:red;font-size: 20px;"> * </span> : </label>  
  <div class="col-md-8">
  <input id="shopkeeper" name="gstin" placeholder="ex:- 03AABFI0111S1ZB" class="form-control input-md" type="text" maxlength="15" pattern="\d{2}[A-Z]{5}\d{4}[A-Z][A-Z0-9]Z[A-Z0-9]" required="">
    
  </div>
</div>
    
    
    
    <div class="form-group">
  <label class="col-md-4 control-label" for="name">Name of Shop<span style="color:red;font-size: 20px;"> * </span> : </label>  
  <div class="col-md-8">
  <input id="shopkeeper" name="shopname" placeholder="Enter your Shop name" class="form-control input-md" type="text" required>
  </div>
</div>
    


    
    
<div class="form-group">
  <label class="col-md-4 control-label" for="name"  >Full Name<span style="color:red;font-size: 20px;"> * </span>: </label>  
  <div class="col-md-8">
  <input id="shopkeeper" name="username" placeholder="Enter your name" class="form-control input-md" type="text" required>
  </div>
</div>
    
    
    
 



<div class="form-group">
  <label class="col-md-4 control-label title1" for="email">Email<span style="color:red;font-size: 20px;"> * </span> : </label>
  <div class="col-md-8">
    <input id="shopkeeper" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required>
    
  </div>
</div>
    


<div class="form-group">
  <label class="col-md-4 control-label" for="mobile">Mobile Number<span style="color:red;font-size: 20px;"> * </span> : </label>  
  <div class="col-md-8">
  <input id="shopkeeper" name="mobile" placeholder="ex:- 9999999999" class="form-control input-md" type="text" maxlength="10" pattern="[1-9]{1}[0-9]{9}" required="">
  </div>
</div>
    
    
    
    
 
    
    
    
     <div class="form-group">
    
     <label class="col-md-4 control-label" for="add">Address<span style="color:red;font-size: 20px;"> * </span> : </label> 
     <div class="col-md-8">
     <input id="shopkeeper" name="address"  class="form-control input-md" placeholder="2-5-67, South Delhi" >
      </div>
    </div>
   





<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password<span style="color:red;font-size: 20px;"> * </span> : </label>
  <div class="col-md-8">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" minlength="8" type="password" onchange='check_pass();' onkeyup='check();' required="">
    
  </div>
</div>
    
    
    
    

<div class="form-group">
  <label class="col-md-4 control-label" for="cpassword">Confirm Password<span style="color:red;font-size: 20px;"> * </span> : </label>
  <div class="col-md-8">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" minlength="8" type="password" onchange='check_pass();' onkeyup='check();' required="">
    	
  </div>
</div>
   
    
    
    
<span id="message" style="font-size:20px "></span>
<div class="clearfix"></div>
<span style="font-size: 15px;">By Clicking Register, You agree to our <a href="#" target="_blank" style="text-decoration:none">Terms and Conditions</a></span>

<div class="form-group">
  <label class="col-md-12 control-label" for="submit"></label>
  <div class="col-md-12"> 
    <input  type="submit" id="submit" class="btn btn-primary" value="Register" />
  </div>
</div>
 
        

</fieldset>
                    <p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
            </div>


<script type="text/javascript">
	var check = function() {
  	if (document.getElementById('password').value ==document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'PasswordsMatched';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'PasswordsNotMatched';
  }
}
function check_pass() {
    if (document.getElementById('password').value ==
            document.getElementById('cpassword').value) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
    }
}
    
  
            
            </script>
</div>
    </div>
      
</body>
</html>