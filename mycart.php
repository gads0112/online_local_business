
<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="img/cropped-favicon.png">
 <title>Grocery  at door step</title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="rgcss/index.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <script src="rgjs/jq.js" ></script>
<script src="rgjs/bs.js" ></script>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet">	
	
	 <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

       <style>
          body  {
    background-image: url("img/26223be0fa0ab87cf2bd687365fffe85.jpg" );
    background-repeat: no-repeat;
    background-color: #cccccc;
             background-size: cover;
        }
    </style>

</head>
	<body>
    <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="logo mx-auto" href="customer.php"> Grocery <span>at door step</span></a>
            </div>
			
			<ul class=" nav navbar-nav">
				<li id="cartme" style="cursor:pointer">
                <li id="cart_control"><a href="mycart.php"><span class="fa fa-shopping-cart fa-fw"></span> My Cart</a>
                </li>
				<li id="history"><a href="history.php"><span class="fa fa-list-alt"></span> History</a></li>
				<li>
					<form class="navbar-form" role="search" method="POST" action="searchresult.php">
					<div class="input-group" id="searchbox" style="width:400px;">
						<input type="text" class="form-control" placeholder="Search Product" name="search" id="search">
						<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
					</form>
				</li>
			</ul>
			
            <ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-shopping-bag fa-fw"></i> Shop <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="customer.php"> All Shop's</a></li>
                        	<?php
							$caq=mysqli_query($con,"select * from shopkeeper");
							while($catrow=mysqli_fetch_array($caq)){
								?>
								<li class="divider"></li>
								<li><a href="slist.php?cat=<?php echo $catrow['shp_id']; ?>"><?php echo $catrow['shopname']; ?></a></li>
								<?php
							}
						
						?>
						
								<li class="divider"></li>
							
                    </ul> 
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-lock"></span> <i class="fa fa-caret-down"></i>
                    </a>
                   
                    <ul class="dropdown-menu">
			         <li><a href="cprofile.php" > <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Profile</a></li>
				     <li><a href="index.php"> <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
			       </ul>
                </li>
            </ul>
        </nav>
        
        <div class="container">
	<div style="height:50px;"></div>
	<div class="row">
		<div class="col-lg-12">
			<a href="customer.php" class="btn btn-primary" style="position:relative; left:3px;"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</a>
		</div>
	</div>
	<div style="height:10px;"></div>
	<div id="checkout_area"></div>
	<div class="row">
		<span class="pull-right" style="margin-right:15px;"><strong>Payment method Here</strong></span>
	</div>
	<div style="height:20px;"></div>
	<div class="row">
		<button type="button" id="check" class="btn btn-primary pull-right" style="margin-right:15px;"><i class="fa fa-check fa-fw"></i> Confirm</button>
	</div>
</div>
<?php include('script.php'); ?>
<script src="custom.js"></script>
<script>
$(document).ready(function(){
	showCheckout();
	
});
</script>
       
        <script src="custom.js"></script>
    </body>
</html>
        
