<?php
	require("menu.php");
	include("../data/dbora.php");
	$user=$_SESSION['user_id'];
		
		
	insertIntoDB("begin ADD_ORDERR('$user');end;");
	
	$jsonData= getJSONFromDB("select max(order_id) from orderr");
	$jsonData = json_decode($jsonData, true);
	$oid= $jsonData[0]["MAX(ORDER_ID)"];
	
	foreach($_SESSION['productList'] as $key=>$ithem)
	{		$pid=$_SESSION['productList'][$key]['id'];
			$q=$_SESSION['productList'][$key]['quantity'];
			$up=$_SESSION['productList'][$key]['unit_price'];
			$tp=$_SESSION['productList'][$key]['unit_price']*$_SESSION['productList'][$key]['quantity'];
		$s=$_SESSION['productList'][$key]['size'];
		insertIntoDB("begin ADDORDERR_INFO('$oid','$pid','$q','$up',
		'$tp','$s');end;");
		
		unset($_SESSION['productList'][$key]);
	}
	
	
	
?>
<html>
	<center><h1>Thank You!<h1>
		<h3><?php echo "order id: " . $oid= $jsonData[0]["MAX(ORDER_ID)"];?></h3>
		<p>
		We have received your order. If you need to confirm any information regarding your <br/>
		purchase, a kine felun custmer service will call you shortly.Otherwise your order<br/> will be automatically confirmed.
		
		</p>
	</center>
	<hr/>
	<h3>TRACK YOUR ORDER: </h3><br/>
	<center>
	<p><b>You can track your order My Account > My Orders</b></p><br/>
	<input type="submit" value="My Orders" onclick="window.location.href='orders.php'"  size="50" >
	</center>
	<hr/>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php 
	require("footer.php");
	?>
</html>
