<?php
	include("adminHeader.php");
	include("C:/xampp/htdocs/Kine Felun 2/data/person_service.php");
?>

<html>
	<head>
		<title>Kine Felun
		</title>
	</head>
	
	<body>
		<center>
			<input type="button" value="Catagory" onclick="window.location.href='EditItem.php'" size="30" style="height:25px; width:100px; color:black;background-color:orange;"><br/><br/>
				
			
		</center>
		<?php
		
			$catagory = "Women Fashion";
			$que = "SELECT pid, Catagory, Type, Brand,  Price, Discount, Size FROM item WHERE Catagory = '$catagory'";
			$con = mysqli_connect("localhost", "root", "", "fnfe");	
			if(isset($_POST['update']))
			{
				$sql = "UPDATE item SET ItemID='$_POST[itemId]',Catagory='$_POST[catagory]',Type='$_POST[type]',Brand='$_POST[brand]',Details='$_POST[details]',Price='$_POST[price]',Discount='$_POST[discount]',Size='$_POST[size]',ImageName='$_POST[imageName]' WHERE ItemID ='$_POST[hidden]'"; 
				mysqli_query($con, $sql);
			}
			$result = mysqli_query($con, $que);
			
			
			
			echo	"<table  cellspacing = 0>
					<tr>
						<th>
							Item Id
						</th>
						
						<th>
							Catagory
						</th>
						
						<th>
							Type
						</th>
						
						<th>
							Brand
						</th>
						
						<th>
							Details
						</th>
						
						<th>
							Price
						</th>
						
						<th>
							Discount
						</th>
						
						<th>
							Size
						</th>
						
						<th>
							Image Name
						</th>
						
					</tr>";
			while($row = mysqli_fetch_array($result))
			{
				echo "<form method =POST>";
				echo "<style>
						 input[type=text], select {
						width: 100%-10px;
						padding: 10px 20px;
						padding-middle:10px;
						margin: 08px 0;
						display: inline-block;
						border: 1px solid #ccc;
						border-radius: 1px;
						box-sizing: border-box;
					}
					th {
					    text-align: left;
					}
					.button {
						background-color: #4CAF50;
						border: none;
						
						color: white;
						padding: 10px 22px;
						text-align: center;
						text-decoration: none;
						display: inline-block;
						font-size: 12px;
						margin: 4px 2px;
						cursor: pointer;
					}
					</style>
				
						<tr>
							<td> <input type=text name=itemId value=".$row['ItemID'].">							
							</td>
							
							<td> <input type=text name=catagory value=".$row['Catagory'].">								
							</td>
							
							<td> <input type=text name=type value=".$row['Type'].">								
							</td>
							
							<td> <input type=text name=brand value=".$row['Brand'].	">							
							</td>
							
							<td> <input type=text name=details value=".$row['Details'].">								
							</td>
							
							<td> <input type=text name=price value=".$row['Price'].">								
							</td>
							
							<td> <input type=text name=discount value=".$row['Discount'].">								
							</td>
							
							<td> <input type=text name=size value=".$row['Size'].">								
							</td>
							
							<td> <input type=text name=imageName value=".$row['ImageName'].">								
							</td>
							
							<td> <input type=hidden name=hidden value=".$row['ItemID'].">								
							</td>
							
							<td> <input type=submit class=button name=update value=Update >								
							</td>
							
						</tr>";
					echo "</form>";
				echo	"</table>";
				
				
			}
					
					
		?>
	</body>
	<br/>
	<br/>
	<br/>
</html>

<?php
	require("footer.php");
?>