<?php
include ("menu.css");
include ("menu.js");
session_start();
?>
<html>
	<head>
		<title>Kine felun</title>
	</head>
	
	<body>
		
			
			<table  style="width:100%" border="0" cellpadding="20" cellspacing="0">
				<tr>
					<center>
						<td><a href="KineFelun_Home.php"><img src="text.gif"></td>
					</center>
				</tr>
				<tr>
					<td align = 'left'>
						<?php 
							date_default_timezone_set("Asia/Dhaka");
							echo "<p align=\"RIGHT\">"."<b>". date("l")."</b>"."&nbsp;&nbsp;&nbsp"."<b>".date("Y-m-d ")."</b>"."</p>";			
						?>
					</td>
					
					<td align = 'center'>
						
						 <a href="KineFelun_Home.php">Home</a></button>
						</div>		
					</td>
					
					<td align = 'center'>
						<a>
							<input type ="text" name="search" id="search" placeholder="Search for Products, Brands and Categories" size="40"> <input type ="Submit" name="search" id="search" value="Search">
						</a>
					</td> 
					
					 <td align = 'center'>

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Contact Us</button>
  <div id="myDropdown" class="dropdown-content">
    <b>Call Us Now</b>
							16242<br/>
							<a href="help.php">kine felun Help center </a><br/>
							<a href="whyshop.php">Why Shop on kine felun ?</a><br/>
							<a href="howtoshop.php">How to shop on kine felun ?</a><br/>
						<a href="howtoshop.php">Track Your Order?</a><br/>
							
  </div>
</div>
				
					</td>
					
					<td align = 'center'>
					
					<div class="dropdown">
                   <button onclick="myFunction1()" class="dropbtn">Account</button>
                    <div id="myDropdown1" class="dropdown-content">
   
					<?php	
					if(isset($_SESSION['user_id']))
					{   echo "logged in as" . " " . $_SESSION['user_name'];
				
						echo "<a href='logout.php'>logout</a>";
						echo "<a href='viewprofile.php'>view profile</a>";
						
					}
					else {echo "<a href='login.php'>login</a>";
					
	
					echo		"<br/>
					 <b> Are you new in kine felun?</b> <br>
							<a href=" . "registration.php" . ">Register now</a><br/>";
					}
					?>
   	
                 </div>
                </div>
						
						  
							
														
					</td>
					
					<td align = 'center'>
						<table>
							<tr>
								<td align = 'center'>
									<div class="dropdown" >
										<a href="cart.php" >Cart</a>
									</div>										
								</td>
								<td align = 'center'>
								<?php	
					if(isset($_SESSION['productList']))
					{
						echo "<img src='02.png' width='60' height='60' align='right'>";
					}
					else {echo "<img src='01.png' width='60' height='60' align='right'>";}
					?>
									
								</td>
							</tr>
						</table>
						
					</td>
					
				</tr>	
				
			</table>
			</div>
		
	</body>
</html>



