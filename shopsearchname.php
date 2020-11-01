<?php
include "db.php";
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="description" content="Grocery at door step " />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Grocery at door step</title>

    <link rel="icon" type="image/png" href="img/cropped-favicon.png">
	<script type="text/javascript" src="rgcss/bootstrap.js"></script>
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="rgcss/index.css" rel="stylesheet">
     <link rel="stylesheet" href="rgcss/bootstrap1.css" >
    <script src="rgjs/jq.js" ></script>
    <script src="rgjs/bs.js" ></script>
    <script>
      function myMap() {
         var mapProp= {
         center:new google.maps.LatLng(31.253603,75.70366899999999),
          zoom:5,
        };
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
     </script>

    
    </head>
    <body>
    
        <div class="container">
            
    <div class="header">
        <a class="logo mx-auto" href="index.php">Grocery <span> at door step</span></a>
    <a  href="index.php">Home</a>
    <a href="#about">About</a>
        <a href="login.php">Sign In</a>
    <form class="form-inline my-2 my-lg-0">       
     <a href="#googleMap" title="Find A Store"  class=" mr-sm-2" ><span aria-hidden="true" class="glyphicon glyphicon-map-marker"  ></span>Find A Store</a>&nbsp; &nbsp;</form>
      
      <form class="logo mx-auto"  role="search" method="POST" action="searchresult.php">
					<div class="input-group" id="searchbox">
						<input type="text" class="form-control" placeholder="Shop Name" name="search" id="search">
						<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
					</form>
      </div>
            </div>
        <p></p>
     
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
		$query=mysqli_query($con,"select * from shopkeeper where shopname like '$name%'");
	if(mysqli_num_rows($query)==0)
    {
      echo "There is No Shop Registered With this name";
    }
   
  
		while($row=mysqli_fetch_array($query)){
		    
				$shp_name =  $row['shopname'];
				$shp_add =  $row['address'];
				$inc = ($inc == 4) ? 1 : $inc+1; 
			if($inc == 1) echo "<div class='row'>";
			?>
			<div class= "col-lg-3">
			    <div>
			         <div style="height:60px; width:230px; margin-left:17px;"><strong><?php echo $shp_name; ?></strong></div>
			         <div style="height:60px; width:230px; margin-left:17px;"><strong><?php echo $shp_add; ?></strong></div>
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
    


    

<section class="service-sec" id="benefits">
  <div class="container">

    </div>

    </section>
<section class="about-sec parallax-section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2><small>Who We Are</small>About Us<br>
        </h2>
      </div>
      <div class="col-md-4">
        <p>Are you puzzle for the grocery every month? We are here to solve your problem by just on single click. It is easy to make you list and to select the shop you want to order. It also helps to save you are time and cost.  </p>
        <p> In the today life, we are very busy to schedule our time and to manage it properly. In every month we need to buy grocery item as per our need. In this process, we make a list of items which is given to the shopkeeper and afterward the shopkeeper used to send the items to our respective home. 
</p>
      </div>
      <div class="col-md-4">
        <p>This all process uses to be completed two or three days but now it would be done by just selected the items and shop from which you wish to buy the item and it would be delivered at your doorstep only.</p>

            <p>  In this, we only select and pay the money for the item when it is being delivered to us. It would help you to save time and process also take the lesser time as the earlier. So that our project is also named as “Grocery at Doorstep”.</p>
        </div>      
      <div class="col-md-4">
        <p></p>
        <p><a href="#" class="btn btn-transparent-white">Explore More</a></p>
      </div>
    </div>  
  </div>
</section>
<div><p>&nbsp;</p>
      <div id="googleMap" style="width:100%;height:400px;"></div>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXCTxsK9fvEvul-BTh1CliMfp1mYCf_44&callback=myMap"></script>

    </p></div>
     </div>
       
        <div class="container">
<footer>Copyright &copy;Grocery at door step</footer>
        </div>
        <div class="container">
        <button onclick="topFunction()" id="sctop"  title="Go to top">Top</button>

<script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
        document.getElementById("sctop").style.display = "block";
    } else {
        document.getElementById("sctop").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

        </div>
       
       
        
    </body>
</html>
        
      
      