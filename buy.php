<?php
session_start();
include 'db.php';
if(!isset($_SESSION['uid']))
{
    header("Location:login.php");
}
if(isset($_GET['chk_item_id']))
{$date=date('Y-m-d h:i:sa');
$rand_num=mt_rand();
if(isset($_SESSION['ref'])){}else{$_SESSION['ref']= $date.' '.$rand_num;}
$chk_sql="INSERT INTO checkout(chk_item,chk_shp_id,chk_ref,chk_timing,chk_qty) VALUES ('$_GET[chk_item_id]',$_GET[shp_id],'$_SESSION[ref]','$date',1)";
if(mysqli_query($con,$chk_sql))
{

?>
<script>window.location="buy.php"</script>
<?php
}}
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
<!--
       <style>
          body  {
    background-image: url("img/26223be0fa0ab87cf2bd687365fffe85.jpg" );
    background-repeat: no-repeat;
    background-color: #cccccc;
             background-size: cover;
        }
    </style>
-->
    <script type="text/javascript">
    	function func(){
        xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function (){
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						document.getElementById('get_data').innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open('GET', 'buy_process.php', true);
				xmlhttp.send();
			}
			
		function del_func(chk_id){
        xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function (){
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						document.getElementById('get_data').innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open('GET', 'buy_process.php?chk_del_id='+chk_id, true);
				xmlhttp.send();
			}
			
			function up_chk_qty(chk_qty,chk_id){
        xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function (){
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						document.getElementById('get_data').innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open('GET', 'buy_process.php?up_chk_qty='+chk_qty+'&up_chk_id='+chk_id, true);
				xmlhttp.send();
			}

    </script>

</head>
<body onload="func();">
	<!-- <body> -->
    <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="logo mx-auto" href="customer.php"> Grocery <span>at door step</span></a>
            </div>
			
			<ul class=" nav navbar-nav">
				<li id="cartme" style="cursor:pointer">
                    <li id="cart_control"><a href="buy.php"><span class="fa fa-shopping-cart fa-fw"></span> My Cart</a>
                </li>
				<li id="history"><a href="history.php"><span class="fa fa-list-alt"></span> History </a></li>
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
<div class="page-header">
<div class="row">
		<div class="col-lg-12">
			<a href="customer.php" class="btn btn-primary" style="position:relative; left:3px;"><span class="glyphicon glyphicon-arrow-left"></span> Back To Shop </a>
		</div>
	</div>

<div class="clearfix"></div>
<br><br>
<div class="panel panel-default">
<div class="panel-heading" style="text-align:center;"><b>order Details</b></div>
<div class="panel-body">
	<div class="pull-right" >
<form method="post">
	<div class="form-group">
<button class="btn btn-success btn-block" name="order_submit" class="form-control" >Order submit</button>
</div>
</form>
</div>

<div id="get_data">
</div>
</div>
</div>

</div>
<br><br>
   
<?php
if(isset($_REQUEST['order_submit'])) {
	 $uid = $_SESSION['uid'];
	 $ref = $_SESSION['ref'];
	 $total = $_SESSION['grandtotal'];
	 $sql="INSERT INTO orders(cus_id,order_ref,total_amount) VALUES('$uid','$ref','$total')";
	 if(mysqli_query($con,$sql)){
	 	$date= date('Y-m-d h:i:sa');
	 $rand_num=mt_rand();
	 	 ?><script>window.location="customer.php";</script><?php
	 	 $_SESSION['ref']=$date.' '.$rand_num;
	 }else{
	 	?><script>alert("fail to order")</script><?php
	 }
 }
 ?>
    </div>
    </body>
</html>
