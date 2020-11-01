<?php include "db.php"; session_start();
if(!isset($_SESSION['uid']))
{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Grocery at doorsteps</title>
		 <link rel="icon" type="image/png" href="img/cropped-favicon.png">
         <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	     <link href="rgcss/shopkeeper.css" rel="stylesheet">
	     <link rel="stylesheet" href="rgcss/bootstrap1.css" >
         <script src="rgjs/jq.js" ></script>
         <script src="rgjs/bs.js" ></script>
		 <script src="shopdet/sshopjs.js" ></script>
	
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
    <div class="container-fluid">	 
	     <div class="header">
             <a class="logo mx-auto" href="index.php">Grocery<span>&nbsp;at&nbsp;doorstep</span></a>
			  
		 </div>
       <nav class="nav-tabs">
		 <div >
		   <ul class="nav nav-tabs">
              <li><a class="nav-tabs-brand  nav-tab-header" href="shop.php"><span class="glyphicon glyphicon-home"></span>
			  &nbsp;&nbsp; 
			  <?php
			       $shp = $_SESSION['uid'];
                   $sql1="SELECT * FROM shopkeeper where shp_id=$shp";
                   	 $sql2="SELECT * FROM item_detail";			   
                    $run1= mysqli_query($con,$sql1);
					$run2=mysqli_query($con,$sql2);
					while ($row = mysqli_fetch_assoc($run1)) {
                        echo $_SESSION['Shopname'];
                                 };
								  
				?></a></li>
             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Product's <span class="caret"></span></a>
				  <ul class="dropdown-menu">
				    
				      <li><a href="viewitem.php">Inventory</a></li>
					  <li><a href="serchitem.php">Update Item</a></li>
				     
				   </ul></li>
				   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Purchase<span class="caret"></span></a>
				  <ul class="dropdown-menu">
				    				     <li><a href="addnew.php">Add New</a></li>
				  <li><a href="ledger.php">Ledger</a></li>
				   </ul></li>
		
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sales<span class="caret"></span></a>
				  <ul class="dropdown-menu">
				  	<li><a href="shopkeeperorders.php">orders</a></li>
				
				   </ul></li>
			
              <li class="nav-tab navbar-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['GSTIN'];?>&nbsp;&nbsp;<span class="glyphicon glyphicon-option-vertical"></span>
			       <ul class="dropdown-menu">
			         <li><a href="profile.php" > <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Profile</a></li>
				     <li><a href="logout.php" name='logout'> <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
			       </ul></li>
                  </a>
			</ul>
		 
       
	   
	   <div class="container-fluid">
	   <div class="tab-content">
	    
		  <div id="ledg" class="tab-pane fade">
		  <h2>Ledger</h2>
		  <p>It is about the ledger</p>
		 </div>
		 
		 </div>
		 
		 </div>
                
           </div>
        </nav>

<center><h1><strong>Pay List</strong></h1></center>
<table class="table table-bordered table-striped">
	<thead>
	<tr class="item-head"> 
	<th class="text-center">S.no</th>
	<th class="text-center">Item name</th>
	<th class="text-center">Items Qty</th>
        <th class="text-center">Total Payment</th>
	<th class="text-center">Buyer Checkout Ref</th>
	
	<th class="text-center">Customer Name</th>
	<th class="text-center">Customer mail</th>
	<th class="text-center">Customer number</th>
	</tr>
	</thead>
	<tbody>
	
	<?php
      $sql=" SELECT * from checkout c , product p,customer cu WHERE (c.chk_id,p.product_id,cu.cus_id) IN(SELECT c.chk_id,p.product_id,o.cus_id from checkout c , product p,orders o WHERE (c.chk_id,p.product_id,o.order_ref) in (SELECT c.chk_id,c.chk_item,c.chk_ref from checkout c where c.chk_shp_id ='$_SESSION[uid]'))";
	   $run=mysqli_query($con,$sql);
	   $c=1;
	  $chkrf=1;
	
	   while($row=mysqli_fetch_assoc($run))
	   {
	   echo "<form method='POST' action='shopkeeperorders.php'>";
	   $chkrf=$row['chk_ref'];
	   	$total=$row['chk_qty']*$row['item_amount'];
	   $itemname=$row['item_name'];
	   $chk=$row['chk_qty'];
	  $chkmobile =$row['mobile'];
	 echo "<tr>
	<td>$c</td>
	<td name='itnam' >$itemname</td>
	<td>$chk </td>
	<td>$total</td>
    <td> <input type='submit' name='sendsms' value='$row[chk_ref]'></form></td>
    <td> $row[username]</td>
	<td> $row[email] </td>
    <td>$chkmobile</td>
	</tr>
	";
    $c++;
    
}
?>
	 <?php if($_REQUEST['sendsms']){
	$chk_ref=$_REQUEST['sendsms'];
	
	$sql1=" SELECT * from checkout c , product p,customer cu WHERE (c.chk_id,p.product_id,cu.cus_id) IN(SELECT c.chk_id,p.product_id,o.cus_id from checkout c , product p,orders o WHERE (c.chk_id,p.product_id,o.order_ref) in (SELECT c.chk_id,c.chk_item,c.chk_ref from checkout c where c.chk_shp_id ='$_SESSION[uid]' AND c.chk_ref='$chk_ref'))";
	 $run1=mysqli_query($con,$sql1);
	   while($row1=mysqli_fetch_assoc($run1))
	   {
	       
	   	$total=$row1['chk_qty']*$row1['item_amount'];
	   $itemname=$row1['item_name'];
	   $chk=$row1['chk_qty'];
	  $chkmobile =$row1['mobile'];
	   }
	  
        
$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "The product $itemname Of amount Rs: $total/- will be delivered soon",
    "language" => "english",
    "route" => "p",
    "numbers" => $chkmobile,
    "flash" => "1"
);
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: PZvn07X1GUmCPVoRG0ZodBWki8HG1hJWwnSQlBiCN4opVOXNioJVPpyORBPp",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) { 
    echo"sent";
} else {
  echo"sent";
}

   }  
  ?>
 
</tbody>
</table>
</div>
        <script src="custom.js"></script>
        
    
    </body>
</html>