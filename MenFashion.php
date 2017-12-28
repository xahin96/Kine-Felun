<?php
	session_start();
	include("adminHeader.php");
?>

<html>
	<head>
		<title>Kine Felun
		</title>
	</head>
	
	<body>
		<center>
			<form method = "POST" action="bkmenfashon.php"  enctype="multipart/form-data">
				<input type="button" value="Catagory" onclick="window.location.href='AddItem.php'" size="30" ><br/><br/>
				Men Fashion
				<input type="text" name="category" value="Men Fashion" style="display:none">
				<table border = "0" cellspacing = "30">
					
					
					<tr>
						<td>
							<input type = "radio" name = "type" value =1>Casual Shirt
							<input type = "radio" name = "type" value =2>Jeans Pants
							<input type = "radio" name = "type" value =3>Formal Shirts
							<input type = "radio" name = "type" value =4>Formal Pants
							<input type = "radio" name = "type" value =5>Watch
							<input type = "radio" name = "type" value =6>Footwear
							<input type = "radio" name = "type" value =7>Sports Outfit
							
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "text" name = "name" placeholder = "item name"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "text" name = "description" placeholder = "Description"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "number" name = "buying_price" placeholder = "buying Price"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "number" name = "selling_price" placeholder = "selling Price"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "number" name = "discount" placeholder = "Discount"><br/><br/>
						</td>
					</tr>
					
					<tr>
						<td>
						<div><font size = "3">Size</font>
		 
		<select name="size">
			
			
  <option value="S">S</option>
  <option value="L">L</option>
  <option value="XL">XL</option>
  <option value="XXL">XXL</option>
</select>
			
				
				
		
		</div>
						</td>
					</tr>
					
					<tr>
						<td>
							<input type = "number" name = "quantity" placeholder = "quantity"><br/><br/>
						</td>
					</tr>
					<tr>
					<td>
					Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
					</td>
					</tr>
					
				</table>
				<input type = "submit" value = "Insert" name = "insert" "><br/><br/>
			</form>
		</center>
	</body>
	<br/>
	<br/>
	<br/>
	<br/>
</html>
