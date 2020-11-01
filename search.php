<?php
	
	if(isset($_POST['ss'])){
	$search = $_POST['name'];
	$query=mysqli_query($con,"select * from `product` where item_name like '%$search%' limit 5");
	if(mysqli_num_rows($query)==0){
		
		?>
		<div style="position:relative; left:12px; top:10px;">No results found</div>
		<?php
		
	}
	else{
		
		while ($row = mysqli_fetch_array($query)) {
		?>
 
			<div style="position:relative; left:12px; top:10px;">
				<a href="searchresult.php".php?id=<?php echo $row['product_id']; ?>"><?php echo $row['item_name']; ?></a><br><br>
			</div>
 
		<?php
		}
		
	}
}
?>