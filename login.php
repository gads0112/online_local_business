 
 <!DOCTYPE html>
<html >
<head>
    
    <title>Grocery at door step </title>
	
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">   
	<link rel="icon" type="image/png" href="img/cropped-favicon.png">
	<style>
        body  {
    background-image: url("img/main.jpg" );
    background-repeat: no-repeat;
    background-color: #cccccc;
             background-size: cover;
        }
         
	#login_form{
		width:350px;
		height:340px;
        position:sticky;
		top:100px;
        font-weight: 600;
		margin: auto;
		padding: auto;
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
<body>
    <div class="container">
	<div id="login_form" class="well">
        <legend style="background-color: white; color: black; padding-bottom: 25px;text-align: center;padding-top: 25px;font-size: 30px;font-weight: normal;font-family: verdana"><span class="glyphicon glyphicon-lock"></span> Please sign In</legend>
		<hr class="colorgraph">

		<form method="POST" action="loginphp.php">
		Username: <input type="text" name="email" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary" value="login"><span class="glyphicon glyphicon-off"></span> Sign
            In</button> &nbsp;(OR) &nbsp; &nbsp;
            
            <a href="comb.php"  class="btn btn-primary"><span class="glyphicon glyphicon-new-window"></span> Sign Up</a>
         <div style="height: 10px;"></div>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
        </div>
        </div>
       
    </div>
    </body>
    
</html>
	


 