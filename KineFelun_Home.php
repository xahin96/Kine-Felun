
<body>
<?php 
require("menu.php");
?>
<?php 
require("menu.css");
?>

	<table style="width:100%" border="0" cellpadding="70" cellspacing="0">
		<tr>
			<td valign="top">
				<table style="width:100%" cellpadding="4" cellspacing="4">
					<tr>
						<td>
			
							<font size="5px"><b style="color:purple"><a class="none" href="#">All Category:</a><b></font>
						</td>
					</tr>
					<tr>
						<td>
							<div class="dropdown">
                   <button onclick=myFunction2() class="dropbtn">Men's fashion</button>
                    <div id="myDropdown2" class="dropdown-content">
							<a href="CausalTshirt.php">Casual Shirt</a>
							<a href="JeansPants.php">Jeans Pants</a>
							<a href="FormalShirt.php">Formal Shirts</a>
							<a href="FormalPant.php">Formal Pants</a>
							<a href="Watch.php">Watch</a>
							<a href="Footwear.php">Footwear</a>
							<a href="SportProduct.php">Sports Outfit</a>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
								<div class="dropdown">
                   <button onclick=myFunction3() class="dropbtn">Women's fashion</button>
                    <div id="myDropdown3" class="dropdown-content">
							<a href="dress.php">Dresses</a>
							<a href="cosmetics.php">Cosmetics</a>
							<a href="shoe.php">Women's shoes</a>
							<a href="Jewelleries.php">Women's Jewelleries</a>							
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
								<div class="dropdown">
                   <button onclick=myFunction4() class="dropbtn">Phone and Tablets</button>
                    <div id="myDropdown4" class="dropdown-content">
							<a href="SmartPhone.php">Smart Phones</a>
							<a href="SmartWatch.php">Smart Watch</a>
							<a href="Accesories.php">Accesories</a>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
								<div class="dropdown">
                   <button onclick=myFunction5() class="dropbtn">Home and living</button>
                    <div id="myDropdown5" class="dropdown-content">
							<a href="Lighting.php">Lighting</a>
							<a href="Bedding.php">Bedding</a>
							<a href="Furniture.php">Furniture</a>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
								<div class="dropdown">
                   <button onclick=myFunction6() class="dropbtn">computing and gaming</button>
                    <div id="myDropdown6" class="dropdown-content">
							<a href="laptop.php">Laptops</a>
							<a href="Storage.php">Storage</a>
							<a href="Monitor.php">Monitors</a>
							<a href="comOther.php">Others</a>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
								<div class="dropdown">
                   <button onclick=myFunction7() class="dropbtn">Others</button>
                    <div id="myDropdown7" class="dropdown-content">
							<a href="Auto.php">Automobiles</a>
							<a href="kid.php">KIDS</a>
							<a href="pet.php">Pets</a>
							</div>
							</div>
						</td>
					</tr>
				</table>
			</td>
			<td >
				<head>
					<script type="text/javascript">
						<!-->
						var image1=new Image()
						image1.src="slider_Pic/1.jpg"
						var image2=new Image()
						image2.src="slider_Pic/2.jpg"
						var image3=new Image()
						image3.src="slider_Pic/3.jpg"
						var image4=new Image()
						image4.src="slider_Pic/4.jpg"
						var image5=new Image()
						image5.src="slider_Pic/5.jpg"
						var image6=new Image()
						image6.src="slider_Pic/6.jpg"
						var image7=new Image()
						image7.src="slider_Pic/7.jpg"
						//-->
					</script>
				</head>
				<body>
					<img src="slider_Pic/1.png" name="slide" width="750" height="400">
					<script type="text/javascript">
						<!--
						var step=1
						function change(){
						document.images.slide.src=eval("image"+step+".src")
						if(step<7)
						step++
						else
						step=1
						setTimeout("change()",2000)
						}
						change()
						//window.setInterval(change, 1000);
						//-->
					</script>
				</body>
			</td>
		</tr>
	</table>
	
	


<?php 
require("footer.php");
?>
</body>





