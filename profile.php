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
                   	 $sql2="SELECT * FROM item_detail";			   
                    $run1= mysqli_query($con,$sql1);
					$run2=mysqli_query($con,$sql2);
					while ($row = mysqli_fetch_assoc($run1)) {
                        echo $_SESSION['Shopname'];
                                 };
								  
				?></a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Or Item<span class="caret"></span></a>
				  <ul class="dropdown-menu">
				   
				      <li><a href="viewitem.php">View Item</a></li>
					  <li><a href="serchitem.php">Search Item</a></li>
				     
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
                  </a>
			</ul>
		 
	  
             <div class="container">
	<div class="row" style="text-align: center;">
		<div class="col-md-3"></div>
		<div class="col-md-6 well">
<legend style=" font-size: 30px;font-weight: normal;font-family: verdana"> <span class="glyphicon glyphicon-user"> </span> &nbsp; Profile</legend>


		<form class="form-horizontal" name="form" action="profile.php" method="POST">
<fieldset>
             <div class="form-group">
  <label class="col-md-4 control-label" for="gst">GSTIN Number: </label>  
  <div class="col-md-8">
      <input id='disabledInput'  class="form-control input-md" value="<?php echo $_SESSION['GSTIN'];?>" disabled>
    
  </div>
</div>
		  
			           <div class="form-group">
  <label class="col-md-4 control-label" for="gst">User Name:  </label>  
  <div class="col-md-8">
      <input id='disabledInput'  class="form-control input-md"  value="<?php echo $_SESSION['username'];?>" disabled>
    
  </div>
</div>
			 
               <div class="form-group">
  <label class="col-md-4 control-label" for="gst">Shop Name: </label>  
  <div class="col-md-8">
      <input id='disabledInput'  class="form-control input-md"value="<?php echo $_SESSION['Shopname'];?>" disabled>
    
  </div>
</div>
		     
               <div class="form-group">
  <label class="col-md-4 control-label" for="gst">Shop Address:  </label>  
  <div class="col-md-8">
      <input id='disabledInput'  class="form-control input-md" value="<?php echo $_SESSION['shopaddress'] ;?>" disabled>
    
  </div>
</div>
			 
               <div class="form-group">
  <label class="col-md-4 control-label" for="gst">E-mail ID: </label>  
  <div class="col-md-8">
      <input id='disabledInput'  class="form-control input-md" value="<?php echo $_SESSION['shopemail'];?>" disabled>
    
  </div>
</div>
			
               <div class="form-group">
                   <label class="col-md-4 control-label" for="gst">Phone Number: </label>
  <div class="col-md-8">
      <input id='disabledInput'  class="form-control input-md" value="<?php echo $_SESSION['number'];?>" disabled>
    
  </div>
                
</div>
			 
			
            </fieldset>
            </form>
        </div>
                 </div>
             </div>
           </div>
        </nav>
      </div>
      
  </body>
</html>