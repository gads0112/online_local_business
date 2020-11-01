<?php include "db.php";
session_start();
if(!isset($_SESSION['uid']))
{
    header("Location:login.php");
}
 ?>
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
                   	 $sql2="SELECT * FROM item_detail".$shp."";			   
                    $run1= mysqli_query($con,$sql1);
					//$run2=mysqli_query($con,$sql2);
					while ($row = mysqli_fetch_assoc($run1)) {
                        echo $_SESSION['Shopname'];
                ?>
                  </a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Or Item<span class="caret"></span></a>
				  <ul class="dropdown-menu">
				
				      <li><a href="viewitem.php">View Item</a></li>
				     <li><a href="serchitem.php">update Item</a></li>
				    
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
				     <li><a href="logout.php"> <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
			       </ul>
			</ul>
		 </div>
       </nav>
	   <div class="container-fluid">
	   <div class="tab-content">
	   
		
		   <h1 style="text-align:center;"><strong>Update Item<strong></h1>
		 
	<br></br><form method="post" action="serchitem.php">
             <label>Item Number:&nbsp;&nbsp;&nbsp;
					 <input type="text" name="itemnum1"></label>	
 <input type="submit" name="update" value="Update">	</form>
 <hr>
             <?php if(isset($_POST['update']))
                          {
            
                        $itenum=$_POST['itemnum1'];
//                              for($i=0 ; $i <= $row['shp_id'].length;$i++){
//                                  if($row['shp_id'][i] === $itenum){
//	          
//                                       } else{
//                                  echo '<script language="javascript">alert("update only on your id") </script>';
//                                  return;
//                      
//                            }
//                              }
                                        $sql3="SELECT * FROM product WHERE product_id=$itenum";	   
                    $run3= mysqli_query($con,$sql3);
					if(($run3))
					{
						echo"<table class='table table -striped table-bordered'>
		             <thead>
			          <tr>
					 <th>Item Number</th>
				    <th>Quantity</th>
				     <th>Rate Of Tax</th>
					 <th>Amount</th>
				     
				     </tr>
					</thead><tbody>";
					while ($row2 = mysqli_fetch_assoc($run3)) {
                        echo "<tr><form method='post' action='serchitem.php'>";
						echo "<td><input type='text' name='itnum'class='form-control'value=".$row2['product_id'].">"."</td>";
						echo "<td><input  type='text' name='itqua' disabled class='form-control'value=".$row2['item_quatity'].">"."</td>"; 
						echo "<td><input  type='text' name='itrat' disabled class='form-control'value=".$row2['item_rate'].">"."</td>"; 
						echo "<td><input type='text' name='itam' class='form-control'value=".$row2['item_amount'].">"."</td>"; 
						echo "</tr>";
						echo " </tbody></table>";
						
                                 };
								 echo "<input type='submit' name='addupdate' value='Updated'></form>";
					}
					else
					{ echo "error";
						
					}
				       
  
                          }
                        
						
	?>	
<br>	
			
   <?php if(isset($_POST['addupdate']))
                          {
                           $itemnum=$_POST['itnum'];
						   $sql="SELECT * FROM product WHERE product_id= $itemnum";
						  $run= mysqli_query($con,$sql);
						  $row2 = mysqli_fetch_assoc($run);
						  $iterat=$row2['item_rate'];
				          $itequa=$row2['item_quatity'];
						  $iteamout=$_POST['itam' ];
					      $taxcal=($iteamout*($iterat/100))*$itequa;
						  $itemsgst1=$taxcal/2; 
						  $itemcgst1=$taxcal/2;
						  $itemigst1=0; 
						  $itemtotal1=$iteamout*$itequa; 
						 $sql4="UPDATE product SET item_quatity=$itequa,item_amount=$iteamout,item_sgsttax= $itemsgst1,item_cgsttax=$itemcgst1,item_igsttax=$itemigst1,item_totalamount=$itemtotal1 where product_id= $itemnum";
						$run4= mysqli_query($con,$sql4);
						if($run4==true)
						{
						  echo '<script language="javascript">alert("message successfully sent") </script>';
						  
						
						}
							
						
				       
                        }
						
	?>			
		
				        
				
				
				<?php
                }
                ?>
			  
		    
		 
		 	   </div>
	</div>	  
  </body>
</html>