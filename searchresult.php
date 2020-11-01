<?php include "db.php"; ?>
<?php
 session_start();
if(!isset($_SESSION['uid']))
{
    header("Location:login.php");
}
	$name=$_POST['search']; 
?>
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
    
    background-color: white;
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
                   <li id="cart_control"><a href="buy.php"><span class="fa fa-shopping-cart fa-fw"></span> My Cart</a>
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
				     <li><a href="logcust.php"> <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
			       </ul>
                </li>
            </ul>
        </nav>
  	
   <div class="container">
<?php 
	$name=$_POST['search']; 
?>
       <div id="search_area" class="panel panel-default" style="display:none; position:fixed; top:55px; left:603px; height:40px; width:447px; z-index:3;">
	</div>
	<div style="height: 80px;"></div>
	<div>
	<?php
		$inc=4;
		$query=mysqli_query($con,"select * from product where item_name like '%$name%'");
		while($row=mysqli_fetch_array($query)){
			
			$item_id =  $row['product_id'];
			$shp_id =  $row['shp_id'];
			$inc = ($inc == 4) ? 1 : $inc+1; 
			if($inc == 1) echo "<div class='row'>";  
			
			?>
				<div class="col-lg-3">
				<div>
					<img src= "<?php echo $row['item_image'] ?>" style="width: 230px; height:230px; padding:auto; margin:auto;" class="thumbnail">
					<div style="height: 10px;"></div>
                    <div style="height:60px; width:230px; margin-left:17px;"><strong><?php echo $row['item_name']; ?></strong></div>
				
					<div style="margin-left:17px; margin-right:17px;">
						<a href="buy.php?chk_item_id=<?php echo $item_id ;?>&shp_id= <?php echo $shp_id;?>"  type="button" class="btn btn-primary btn-sm addcart" ><i class="fa fa-shopping-cart fa-fw"></i> Add to Cart</a> <span class="pull-right"><strong><?php echo number_format($row['item_amount'],2); ?></strong></span> 
					</div>
				</div>
				</div>
			<?php
		if($inc == 4) echo "</div><div style='height: 30px;'></div>";
		}
		if($inc == 1) echo "<div class='col-lg-3></div><div class='col-lg-3'></div><div class='col-lg-3'></div></div>"; 
		if($inc == 2) echo "<div class='col-lg-3'></div><div class='col-lg-3'></div></div>"; 
		if($inc == 3) echo "<div class='col-lg-3'></div></div>"; 
	?>
	</div>
</div>
            
             
   
        
        <script src="custom.js"></script>
        
        
    </body>