<?php
require("menu.php");


include("../data/dbora.php");

	$x=$_SESSION['user_id'];
	
	$sql="SELECT EMAIL, ADDRESS  FROM INFO, USERR WHERE INFO.INFO_ID=USERR.INFO_ID AND USER_ID=$x";
	$jsonData= getJSONFromDB($sql);
	$jsonData = json_decode($jsonData, true);
?>
<html>
	
	<body>
	<table  border="1" align="center" >
	<tr>
	<td>
		<form method='POST'action="payment.php" >
		<b>1.YOUR EMAIL: </b>
		<b><?php  echo $jsonData[0]["EMAIL"];
			//var_dump($GLOBALS);
			//echo $_POST['email'];?></b>
		<br/>
		<br/>
		<hr/>
		<b>2.YOUR ADDRESS: </b>
		<b><?php echo $jsonData[0]["ADDRESS"]?><b/>

		
		<hr/>
		<b>3.ORDER SUMMARY</b>
		<br/>
		<hr/>
		
		<br/>
		<table style="width:100%">
			<tr>
				<td><b>ITEM</b></td>
				<td><b>QUANTITY</b></td>
				<td><b>UNIT PRICE</b></td>
				<td><b>DELEVERY DETAILS</b></td>
				<td valign="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL PRICE</b></td>
			</tr>
		<?php	
			$total=0;
	foreach($_SESSION['productList'] as $key=>$ithem)
	{	
 
	echo "<tr>";
			echo	"<td>". $_SESSION['productList'][$key]['name'] . "<br/>";
				 echo "SIZE: " . $_SESSION['productList'][$key]['size'] . "</td>";
			echo	"<td>" . $_SESSION['productList'][$key]['quantity'] . "</td>";
			echo	"<td>TK" . $_SESSION['productList'][$key]['unit_price'] . " </td>";
			echo	"<td>Delivered in 3-10 days</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					
						$price=$_SESSION['productList'][$key]['quantity']*$_SESSION['productList'][$key]['unit_price'];
						echo $price;
						$total=$total+$price;
			echo	"</td>
				
				
				
			</tr>";
	}
	
	?>
			
			
			
			
			
			
			<tr>
				<td>
				</td>
				<td>
				</td>
				<td>
				</td>
				<td>
				</td>
				<td valign="right">
				<b>TOTAL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<form method='POST' action="payment.php">
					<span> <?php
					echo $total . " TK";
					?></span>
					<input type="button" value="PLACE ORDER"  size="20" onclick="window.location.href='payment.php?total=<?php echo $total;?>'">
					</form>
					
				</b>
			</tr>
		</table>
		<br/>
		<br/>
		<center>
		
		</center>
		</form>
		</td>
		</tr>
		</table>
	</body>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php 
	require("footer.php");
	?>
</html>