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
               input[type=submit] {
    width: 20%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:dodgerblue;
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
                   	 $sql2="SELECT * FROM product";			   
                    $run1= mysqli_query($con,$sql1);
					$run2=mysqli_query($con,$sql2);
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
			         <li><a href="profile.php" > <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Profile</a></li>
				     <li><a href="logout.php" name='logout'> <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
			       </ul>
                  </a>
			</ul>
		 </div>
       </nav>
	   <div class="container-fluid">
	   <div class="tab-content">
	    
		   <h1 style="text-align:center;"><strong> Purchase Bill Entry</strong></h1>
		    <br>
			<?php 
			        
					
			     
					   
	                $sql3="SELECT * FROM category_detail";
					$run3= mysqli_query($con,$sql3);
			        echo"<form method='post' action='addnew.php' enctype='multipart/form-data'>"; 
			        echo"<label>Invoice Date:&nbsp;&nbsp;&nbsp;<input type='date'  name='invdate'></label>";
				    echo"<label>&nbsp;&nbsp;&nbsp;GSTIN:&nbsp;&nbsp;&nbsp;<input name='gstin' placeholder='ex:- 03AABFI0111S1ZB' type='text' pattern='\d{2}[A-Z]{5}\d{4}[A-Z][A-Z0-9]Z[A-Z0-9]' ></label>";
				    echo"<br></br><label>Invoice Number:&nbsp;&nbsp;&nbsp;<input type='text'  placeholder='' name='ipvnu'></label>";
				    echo"<label>&nbsp;&nbsp;&nbsp;Party Name:&nbsp;&nbsp;&nbsp;<input type='text' placeholder='' name='pname'></label>";
					echo"<br></br><label>Party Address:&nbsp;&nbsp;&nbsp;<input type='text'  placeholder='' name='paddr'></label>";
				    echo"<label>&nbsp;&nbsp;&nbsp;Party State:&nbsp;&nbsp;&nbsp;<input type='text'  placeholder='' name='pstate'></label>";  
					echo"<br></br><table class='table table -striped table-bordered'>
					<thead>
					<tr>
					<th>Item Name</th>
					<th>Category</th>
					<th>Quantity</th>
					<th>Rate Of Tax</th>
					<th>Amount</th>
					<th>Image</th>
					<th></th>
				     </tr>
					</thead><tbody>";
					echo"<tr>";
					echo "<td><input type='text' name='itname' class='form-control' ></td>";
					echo "<td><select name='cat' class='form-control>";
						echo"<option class='form-control' ></option>";						
						while($row8=mysqli_fetch_assoc($run3))
						{
						echo"<option class='form-control'  value=".$row8['categ_id'].">".$row8['categ_name']."</option>";
					    };
					    echo "</select></td>";
						echo "<td><input  type='text' name='itqua' class='form-control' ></td>";
                    echo "<td><select name='itarat' class='form-control>";
                        echo"<option class='form-control' ></option>";						
						echo"<option class='form-control'  value=0>NILL&nbsp%</option>";						
						echo"<option class='form-control'  value=5>5&nbsp%</option>";
						echo"<option class='form-control'  value=12>12&nbsp%</option>";
						echo"<option class='form-control'  value=18>18&nbsp%</option>";
						echo "</select></td>";
						echo "<td><input type='text' name='itam' class='form-control'></td>";
						echo "<td><input  type='file' name='item_image' class='form-control' required></td>";
						
					echo"<form method='post' action='addnew.php'>";
					echo "<td><button type='submit' class='btn btn-default btn-circle' name='addnewrow'><i class='glyphicon glyphicon-plus'></i></button>&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-default btn-circle' name='deleterow'><i class='glyphicon glyphicon-minus'></i></button></td></form>";
					echo "</tr>";
				    echo "</tbody></table><center><input type='submit' name='sub' align='right'  value='Submit'></form> </center>";
				  
				  
			
			 
              if(isset($_POST['sub']))
				   {      
						  $date=$_POST['invdate'];
                          $gstnum=$_POST['gstin'];
						  $purinv=$_POST['ipvnu'];
                          $purname=$_POST['pname'];
                          $puradd=$_POST['paddr'];
                          $pursta=$_POST['pstate'];
	                      $itnam=$_POST['itname'];
	                      $itcat=$_POST['cat'];
	                      $itequa=$_POST['itqua' ];
						  $iterate=$_POST['itarat' ];
						  $iteamout=$_POST['itam' ];
						  $taxcal=($iteamout*($iterate/100))*$itequa;
						  $itemsgst1=$taxcal/2; 
						  $itemcgst1=$taxcal/2;
						  $itemigst1=0; 
						  $itemtotal1=$iteamout*$itequa;
                       
         if(isset($_FILES['item_image']['name']))
        {
        $file_name=$_FILES['item_image']['name'];
		$path_address="img/$file_name";
		$path_address_db="img/$file_name";
		$img_confirm=1;
		$file_type=pathinfo($_FILES['item_image']['name'],PATHINFO_EXTENSION);
		if($_FILES['item_image']['size']>2000000){
			$img_confirm=0;
			echo '<script>alert("this size is very big")</script>';
		}
		if($file_type != 'jpg' && $file_type != 'png' && $file_type != 'gif' )
		{
			$img_confirm=0;
			echo '<script>alert("this is not matching")</script>';
		}
		if($img_confirm==0){
			echo '<script>alert("this is not matching")</script>';
			
		}else
        {
			if(move_uploaded_file($_FILES['item_image']['tmp_name'],$path_address))
            {
                
		 $sql4="INSERT INTO product(shp_id,item_name,categ_id,item_quatity,item_image,item_rate,item_amount,item_sgsttax,item_cgsttax,item_igsttax,item_totalamount) VALUES ('$shp','$itnam','$itcat','$itequa','$path_address','$iterate','$iteamout','$itemsgst1','$itemcgst1','$itemigst1','$itemtotal1')";	
         $sql5="INSERT INTO ledger(shp_id,pur_date,pur_gstin, pur_inv, pur_name, pur_addre, pur_state,item_name,categ_id,item_quatity,item_image,item_rate,item_amount,item_sgsttax,item_cgsttax,item_igsttax,item_totalamount) VALUES ('$shp','$date','$gstnum',$purinv,'$purname','$puradd','$pursta','$itnam','$itcat','$itequa','$path_address','$iterate','$iteamout','$itemsgst1','$itemcgst1','$itemigst1','$itemtotal1')";	
                
                 
			if(mysqli_query($con,$sql4) && mysqli_query($con,$sql5) )
            { 
          echo "<script>alert('Successfully New Item has been Added ')</script>";
	     }
                else
                {
                echo "<script>alert('Fail to Store New Item ')</script>";
            }

	   }
		}
	}else{
          echo '<script>alert("failed in image")</script>';  
        }
                   }
			 ?>
           <?php
                    }
                  ?>
		  
		 </div>
           </div>
      </div>
    </body>
</html>
        