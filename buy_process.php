<?php session_start();
  include 'db.php'; 
  if(isset($_REQUEST['chk_del_id'])){
  $del_sql="DELETE FROM checkout WHERE chk_id='$_REQUEST[chk_del_id]'" ;
  $query=mysqli_query($con,"SELECT * FROM checkout WHERE chk_id='$_REQUEST[chk_del_id]'");
  while($row=mysqli_fetch_array($query))
	{
$item_id = $row['chk_item'];
$qty=$row['chk_qty'];
$sql="SELECT * FROM product WHERE product_id= $item_id";
$run1= mysqli_query($con,$sql);
$row2 = mysqli_fetch_assoc($run1);
$iterat=$row2['item_rate'];
$itequa=$row2['item_quatity']+$qty;
$iteamout=$row2['item_amount'];
$taxcal=($iteamout*($iterat/100))*$itequa;
$itemsgst1=$taxcal/2; 
$itemcgst1=$taxcal/2;
$itemigst1=0; 
$itemtotal1=$iteamout*$itequa; 
$sql4="UPDATE product SET item_quatity=$itequa,item_amount=$iteamout,item_sgsttax= $itemsgst1,item_cgsttax=$itemcgst1,item_igsttax=$itemigst1,item_totalamount=$itemtotal1 where product_id= $item_id";
$run4= mysqli_query($con,$sql4);
	}
  $run=mysqli_query($con,$del_sql);  
  }
 if(isset($_REQUEST['up_chk_qty'])){
  $up_chk_sql="UPDATE checkout SET chk_qty='$_REQUEST[up_chk_qty]' WHERE chk_id='$_REQUEST[up_chk_id]'";
$newqty=$_REQUEST['up_chk_qty'];
$query=mysqli_query($con,"SELECT * FROM checkout WHERE chk_id='$_REQUEST[up_chk_id]'");
 while($row=mysqli_fetch_array($query))
	{
$item_id = $row['chk_item'];
$sql="SELECT * FROM product WHERE product_id= $item_id";
$run1= mysqli_query($con,$sql);
$row2 = mysqli_fetch_assoc($run1);
$iterat=$row2['item_rate'];
$itequa=$row2['item_quatity']-$newqty;
$iteamout=$row2['item_amount'];
$taxcal=($iteamout*($iterat/100))*$itequa;
$itemsgst1=$taxcal/2; 
$itemcgst1=$taxcal/2;
$itemigst1=0; 
$itemtotal1=$iteamout*$itequa; 
$sql4="UPDATE product SET item_quatity=$itequa,item_amount=$iteamout,item_sgsttax= $itemsgst1,item_cgsttax=$itemcgst1,item_igsttax=$itemigst1,item_totalamount=$itemtotal1 where product_id= $item_id";
$run4= mysqli_query($con,$sql4);
	}
  $run=mysqli_query($con,$up_chk_sql);  
  }
   echo "<table class='table'>
   <thead>
    <tr>
	  <td class='text-center'>S.No</td>
	  <td class='text-center'>Item</td>
	  <td class='text-center'>Qty</td>
	  <td class='text-center'>Delete</td>
	  <td class='text-center'>Price</td>
	  <tdclass='text-center'>Total</td>
    </tr>
   </thead>
   <tbody>";
	  // $chk_sel_sql="SELECT * FROM checkout WHERE chk_ref='$_SESSION[ref]'";
	  if(! isset($_SESSION['ref']))
	  {
	      $_SESSION['ref']= null;
	  }
$chk_sel_sql="SELECT * FROM checkout c JOIN product o ON c.chk_item=o.product_id WHERE c.chk_ref='$_SESSION[ref]'";
$chk_sel_run=mysqli_query($con,$chk_sel_sql);
$c=1;
$total=0;
$delivery_charges=0;
while($chk_sel_row=mysqli_fetch_assoc($chk_sel_run)){
$item_price=$chk_sel_row['item_amount'];
$subtotal=$item_price * $chk_sel_row['chk_qty'];
$total+=$subtotal;
echo "<tr>
<td>$c</td>
<td>$chk_sel_row[item_name]</td>
<td><input type='number' style='width:45px;'onblur=up_chk_qty(this.value,'$chk_sel_row[chk_id]'); value='$chk_sel_row[chk_qty]'></td>";?>
<td><button class='btn btn-danger' onclick=" del_func(<?php echo $chk_sel_row['chk_id'];?>);">Delete</button></td>
<?php echo " <td><b>$item_price/-</b></td>
<td><b>$subtotal/-</b></td>
</tr>";
$c++;
}
$_SESSION['grandtotal']=$grandtotal=$total;
echo " </tbody>
</table>
</div>
</div>
</div>
<br><br>
<table class='table'>
     <thead>
	   <tr>
	   <td colspan='2' class='text-center'><b>Order Summary</b></td>
	   </tr>
	 </thead>
	 <tbody>"; ?>
<?php
 echo "<tr>
	 <td class='text-right'> Sub Total&nbsp;:</td>
	 <td class='text-center'><b>$total/-</b></td>
	 </tr>
	  <tr>
	 <td class='text-right'> Grand Total&nbsp;:</td>
	 <td class='text-center'><b>$_SESSION[grandtotal]/-</b></td>
	 </tr>
	 	 </tbody>
</table>
	 ";
	  ?>