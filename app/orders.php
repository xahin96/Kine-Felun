<html>
<?php
	require("menu.php");
?>
	<body>
		<h3>My Orders :</h3>
		<table align="center" border="2" cellspacing="0"  cellpadding="10" style="width:100%">
			<tr>
				<td><b>ITEM</b></td>
				<td><b>ORDER NUMBER</b></td>
				<td><b>ORDER DATE</b></td>
				<td><b>PAYMENT METHOD</b></td>
				<td><b>ADDRESS</b></td>
				<td valign="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL AMOUNT</b></td>
			</tr>
			<tr>
				<td>Shirt<br/>
				Size:L </td>
				<td>309025</td>
				<td>28-04-2017</td>
				<td>bKash</td>
				<td>Nikunja,Khilkhet(Dhaka City)
				</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4040.00 Tk</td>
			</tr>
		</table>
		<br/>
		<br/>
		<center>
			<input type="submit" value="Order Status" onclick="window.location.href='orderStatus.php'"  size="50">
		</center>
	</body>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php 
	require("footer.php");
	?>
</html>