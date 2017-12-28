<?php
session_start();
	include("adminHeader.php");
	
	include("C:/xampp/htdocs/web tech/data/dbora.php");
	$x=$_REQUEST["pid"];
	

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
<form method = "POST" action="uedit.php?pid=<?php echo $x;?>"  enctype="multipart/form-data">
<table align="center"  border="0" cellpadding="20" cellspacing="0">
	<tr>
		<td>
			<div align="center" class="picture">
				<img src="<?php echo $jsonData[0]["PICTURE"];?>"  alt="Mountain View">
			</div>
		</td>
		<td>
			<div>
				<!--<font size = "4"><?php echo $jsonData[0]["PRODUCT_NAME"];?></font>-->
				Product Name: <input type="text" name="name" value=<?php echo $jsonData[0]["PRODUCT_NAME"];?> ><br>
			</div><br/>
		
			<div><font size = "3">Size</font> 
				<select>
					<?php
						foreach ($jsonData1 as $value)
						{
							echo"<option value=>";echo $value["P_SIZE"];echo"</option>";
						}
					?>	
				</select>
			</div><br/>
			<div>
				<font size = "4"><b><?php echo "buying price ";?></b></font>
				<input type="text" size="4" name="buying_price" value=<?php echo $jsonData[0]["BUYING_PRICE"];?> > <?php echo "tk";?><br>
			</div>
			<br/>

			<div>
				<font size = "4"><b><?php echo "selling price ";?></b></font>
				<input type="text" size="4" name="selling_price" value=<?php echo $jsonData[0]["SELLING_PRICE"];?> > <?php echo "tk";?><br>
			
			</div>
			<br>

			<div>
				<font size = "4"><b><?php echo "Discount : ";?></b></font>
				<input type="text" size="4" name="discount" value=<?php echo $jsonData[0]["DISCOUNT"];?> > <?php echo"%";?><br>
			</div>
		<br>
		<div>
				<font size = "4"><b><?php echo "DISCRIPTION : ";?></b></font>
            <textarea  cols="50" name="discription" value=<?php echo $jsonData[0]["DISCRIPTION"];?>	> <?php echo $jsonData[0]["DISCRIPTION"];?>	 </textarea>
	</div>
		
		<br>
		<div align="left">
    <?php echo " <a href='uedit.php?pid=$x'> <button type=" . "submit" . ">Apply Change</button> </a>";	?>
		
		</td>
	</tr>
	</table>
	</form>
	<br/>
	
	<br/>
	<br/>
	<br/>
	<br/>
</html>

