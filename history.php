<?php include "db.php"; ?>
<?php	session_start();
if(!isset($_SESSION['uid']))
{
    header("Location:login.php");
}?>
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

      <!--  <style>
          body  {
    background-image: url("img/26223be0fa0ab87cf2bd687365fffe85.jpg" );
    background-repeat: no-repeat;
    background-color: #cccccc;
             background-size: cover;
        }
    </style> -->
     <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: black;
    color: white;
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
				     <li><a href="index.php"> <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
			       </ul>
                </li>
            </ul>
        </nav>
  	
   <div >
<center><h1><strong> History</strong></h1></center>
<table class="table table-bordered table-striped">
	<thead>
	<tr class="item-head"> 
	<th class="text-center">S.no</th>
	<th class="text-center">Buyer Checkout Ref</th>
	<th class="text-center">Detail view</th>
	<th class="text-center">Total Payment</th>
	</tr>
	</thead>
	<tbody>
	
	<?php
      $sql="SELECT * FROM orders where cus_id = '$_SESSION[uid]'";
	   $run=mysqli_query($con,$sql);
        $c=1;
	   while($row=mysqli_fetch_assoc($run))
	   {
	   		  
	 echo "<tr>
	<td>$c</td>
	<td> $row[order_ref]</td>
	<td><button class='btn btn-primary' data-toggle='modal' data-target='#ref_data$row[order_id]'>$row[order_ref]</button>
     <div class='modal fade' id='ref_data$row[order_id]'>
	 <div class='modal-dialog'>
	 <div class='modal-content'>
	 <div class='modal-header'>
     <button class='close' data-dismiss='modal'>&times;</button>
     <h3>Checkout Details</h3>
     </div>
	 <div>
	<table class='table '>
	<thead>
	<tr class='item-head'>
	<th class='text-center'>S.no</th>
	<th class='text-center'>Item Name</th>
	<th class='text-center'>Item qty</th>
	<th class='text-center'>Shop Name</th>
	<th class='text-right'>Shop phone</th>
	<th class='text-center'>Price</th>
	<th class='text-center'>Sub total</th>
	</tr>
	</thead>
	<tbody>";
	//$chk_sql="SELECT * FROM checkout WHERE chk_ref='$row[order_checkout_ref]'";
	$chk_sql="SELECT * from product p ,checkout c,shopkeeper s WHERE (p.product_id,c.chk_id,s.shp_id) IN(SELECT c.chk_item,c.chk_id,c.chk_shp_id FROM checkout c, orders o where c.chk_ref='$row[order_ref]' AND o.cus_id='$_SESSION[uid]')";
	$chk_run=mysqli_query($con,$chk_sql);
           $d=1;
	while($chk_row=mysqli_fetch_assoc($chk_run)){	
		
	if($chk_row['item_name']==''){
		$item_name= 'sorry Data Deleted';
	}
	else{
		$item_name=$chk_row['item_name'];
	}
	$total=$chk_row['chk_qty']*$chk_row['item_amount'];
	
	echo "<tr>
	<td>$d</td>
	<td>$item_name</td>
	<td>$chk_row[chk_qty]</td>
	<td>$chk_row[shopname]</td>
	<td>$chk_row[mobile]</td>
	<td class='text-center'>$chk_row[item_amount]/-</td>
	<td class='text-center'>$total/-</td>
	</tr>";
	
	echo "</tbody>
	</table>";
	


	echo"<table class='table'>
	<thead>
	
	</thead>
	<tbody>
	";
	$d++;
}
    echo " </tbody>

	 </div>
	 </div>
	 </div>
	</div>
	</table>
	</td>
	<td class='text-right'>$row[total_amount]/-</td>";?>
	
	</td>
	</tr>
	<?php
	$c++;
	   }
	   ?>
</table>
 </tbody>
	   
</div>
            
             
   
        
        <script src="custom.js"></script>
        
        
    </body>