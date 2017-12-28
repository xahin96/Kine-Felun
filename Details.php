<?php
session_start();
	require("menu.php");
	
	include("../data/dbora.php");
	$x=$_REQUEST["pid"];
		$_SESSION['product_id'] = $x;


$sql="SELECT * FROM PRODUCT WHERE PRODUCT_ID= $x";
$sql1="SELECT P_SIZE FROM PRODUCT_SIZE WHERE PRODUCT_ID= $x";

$jsonData= getJSONFromDB($sql);
$jsonData1= getJSONFromDB($sql1);

$jsonData = json_decode($jsonData, true);
$jsonData1 = json_decode($jsonData1, true);

//print_r($GLOBALS);
	
?>
<html>
<style>
	.picture img{
		width:300px;
		height:300px;
    cursor: -moz-zoom-in; 
    cursor: -webkit-zoom-in; 
    cursor: zoom-in;
	}
</style>
<table align="center"  border="0" cellpadding="20" cellspacing="0">
<form action="detail.php">
	<tr>
		<td>
		<div align="center" class="picture">
			<img src="<?php echo $jsonData[0]["PICTURE"];?>"  alt="Mountain View">
		</div>
		</td>
		<td>
		<div><font size = "4"><?php echo $jsonData[0]["PRODUCT_NAME"];?></font></div><br/>
		
		<div><font size = "3">Size</font>
		 
		<select name="size">
			<?php
			foreach ($jsonData1 as $value){
			echo "<option value=" . $value["P_SIZE"] . ">" . $value["P_SIZE"] . "</option>";
			}
			?>
				
				
		</select>
		</div>
		
		<br/>
		<div><font size = "4"><?php echo "<input name='quantity' placeholder='quantity' size=" . 5 . ">";?></font></div><br/>
		
		<div><font size = "4"><b><?php echo "TK ";echo $jsonData[0]["SELLING_PRICE"];?></b></font></div>
		<?php echo "Discount : ";echo $jsonData[0]["DISCOUNT"];echo"%"?></div>
		
		<div align="left">
	<input type="submit" name="n" value="BUY NOW!"  '"  size="30"> </input>
	</div>
		
		</td>
	</tr>
	</form>
	</table>
	<br/>
	
	<br/>
	<br/>
	<br/>
	<br/>
</html>
<?php 
require("footer.php");
?>
