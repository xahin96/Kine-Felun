<?php
	include ("menu.css");
	include ("menu.js");
	session_start();
?>
<html>	
	<body>	
			<table  style="width:100%" border="0" cellpadding="20" cellspacing="0">
				<tr>
					<center>
						<h1><span ><text > Kine felun</text></span></h1>
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
						<a href="adminPanel.php">Home</a></button>		
					</td>
					
					<td align = 'center'>
						<a>
							<input type ="text" name="search" id="search" placeholder="Search for Products, Brands and Categories" size="40"> <input type ="Submit" name="search" id="search" value="Search">
						</a>
					</td>
					
					<td align = 'center'>
						<div class="dropdown">
	                   		<button onclick="myFunction1()" class="dropbtn">Account</button>
		                    <div id="myDropdown1" class="dropdown-content">
							
							<?php	
					if(isset($_SESSION['user_id']))
					{	echo "logged in as" . " " . $_SESSION['user_name'];
						echo "<a href='logout.php'>logout</a>";
					}
					else {echo "<a href='login.php'>login</a>";}
					?>
							
								
							</div>
						</div>									
					</td>
					
				</tr>	
				
			</table>
			</div>
		</header>
	</body>
</html>



