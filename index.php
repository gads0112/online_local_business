<?php
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
      
      <form class="logo mx-auto"  role="search" method="POST" action="shopsearchname.php">
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
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="img/gst.png" alt="404" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/slide1.jpg" alt="404" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/slide4.jpg" alt="404" style="width:100%;">
      </div>
         <div class="item">
        <img src="img/goodsservices.jpg" alt="404" style="width:100%;">
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    

<section class="service-sec" id="benefits">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="heading">
                <center> <h2><small>Benefits of Grocery at door step </small><br> Enjoy the glow of good health</h2></center>
    </div>
        </div>
      <div class="col-md-12">
        <div class="row">
      <div class="col-md-6 text-center">
      <img class="img-circle" src="img/luxury_special_offer.png">
      <h2>Offers &amp; New Arrivals</h2>
      <p><a class="btn btn-default" href="#" target="_blank">View details</a></p>
    </div>
            <div class="col-md-6 text-center"> 
      <img class="img-circle" src="img/user.jpg">
      <h2> New Users </h2>
      <p><a class="btn btn-default" href="comb.php" target="_blank"> Sign Up</a></p>
    </div>
          </div>
        </div>
      </div>
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
        
      
      