<?php
	include("adminHeader.php");
?>
<html>
	
	<body>
		<table align="center">
			<tr><td></td></tr>
			<tr>
				<center>
					<br><br><br>
					<td width= "25%" >
						<input onclick="window.location.href='AddItem.php'" type="submit" name="Add_Product" value="Add Item">
					</td>
					
					<td width= "25%" >
						<input onclick="window.location.href='EditItem.php'" type="submit" name="Edit_Product" value="Edit Item">
					</td >
					
					<td width= "25%" >
						<input onclick="window.location.href='deleteItem.php'" type="submit" name="Remove_product" value="Remove Item">
					</td>
					
					<td width= "25%" >
						<input onclick="window.location.href='checkorder.php'" type="submit" name="CheckOrder" value="Check Order">
					</td>
				</center>
			</tr>
		</table>
	</body>
	<br/>
	<br/>
	<br/>
	<br/>
</html>
