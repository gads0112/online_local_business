<?php include "db.php"; ?>
<?php	session_start();
if(!isset($_SESSION['uid']))
{
    header("Location:login.php");
}?>
<!DOCTYPE html>
<html>
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
	
    <div class="container-fluid">	 
	     <div class="header">
             <a class="logo mx-auto" href="shop.php">Grocery<span>&nbsp;at&nbsp;doorstep</span></a>
			  
		 </div>
	   <nav class="nav-tabs">
		 <div class="container-fluid">
		   <ul class="nav nav-tabs">
              <li><a class="nav-tabs-brand  nav-tab-header" href="shop.php"><span class="glyphicon glyphicon-home"></span>
			  &nbsp;&nbsp; 
			  <?php
			       $shp = $_SESSION['uid'];
                   $sql1="SELECT * FROM shopkeeper where shp_id=$shp";
                   	 			   
                    $run1= mysqli_query($con,$sql1);
					
					while ($row = mysqli_fetch_assoc($run1)) {
                        echo $_SESSION['Shopname'];
                          
								  
				?></a></li>
             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Product's<span class="caret"></span></a>
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
			         <li><a href="profile.php"> <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Profile</a></li>
				     <li><a href="logout.php"> <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
			       </ul>
                  </a>
               </li>
             </ul>
		 </div>
       </nav>
	   <div class="container-fluid">
	   <div class="tab-content">
	    
		  <div>
		      <h1 style="text-align:center;"><strong>Product's</strong></h1>
			  <br>
			  <?php 
			  $sql2="SELECT * FROM ledger where shp_id=$shp";
             // select * from product where shp_id='$shp';
			  $run2=mysqli_query($con,$sql2);
			  echo"<table>
		         <thead>
			       <tr>
				     <th>Party GSTTIN</th>
					 <th>Party Name</th>
				     <th>Quantity</th>
					 <th>Price/Unit</th>
					  <th>Rate Of tax</th>
					 <th>SGST</th>
					 <th>CGST</th>
					 
				     <th>Total Value</th>
				     </tr>
				  </thead>
				  <tbody>";
			  $total=0;
			  $sgst=0;
			  $cgst=0;
			  $qualt=0;
			  $totalsgst=0;
			  $totalcgst=0;
			  $totalamo=0;
			  while ($row2 = mysqli_fetch_assoc($run2)) {
                        echo "<tr>";
						echo "<td>". $row2['pur_gstin'];
						echo "<td>". $row2['pur_name'];
					    echo "<td>". $row2['item_quatity'];
						$qualt=$row2['item_quatity'];
				    	echo "<td>". $row2['item_amount'];
						echo "<td>". $row2['item_rate'];
						$sgst=$row2['item_rate']/2;
						//$cgst=$row2['item_cgsttax']/$qualt;
						$totalsgst=$row2['item_sgsttax']+$totalsgst;
			            $totalcgst=$row2['item_cgsttax']+$totalsgst;
						echo "<td>". $sgst;
						echo "<td>". $sgst;
						$totalamo=$row2['item_amount']+$totalamo;
						echo "<td>". $row2['item_totalamount'];
						$total=$total+$row2['item_totalamount'];
						echo "</tr>";
                                 };
						echo "<tr>";
						echo "<td>";
						echo "<td>";
						echo "<td>";
						echo "<td>";
						echo "<td>Total amount of Stock</td>";
						echo "<td> $totalsgst</td>";
						echo "<td> $totalsgst</td>";
						echo "<td> $total</td></tr></tbody></table>";
						
						?>  
		      
		 </div>
		 
		    <?php }?>
		 
		  
			</div> 
		 </div>
	  </div>
	   	  
  </body>
</html>