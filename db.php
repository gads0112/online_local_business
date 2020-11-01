<?php
$server="localhost";
$username="gads";
$password="";
$db ="gads";
$con=mysqli_connect($server, $username, $password, $db);
if(!$con){
   echo "error"; 
}

?>