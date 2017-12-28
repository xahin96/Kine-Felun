<?php
	require("menu.php");
		//include("dbora.php");
		//session_start();
		

	//$sql="SELECT * FROM PRODUCT WHERE pid='".$_REQUEST["pid"]."'";
//$jsonData= getJSONFromDB($sql);
//$jsonData = json_decode($jsonData, true);
?>


<html>
	<head>
		<title>Kine Felun
		</title>
	</head>
	
	<body>
	
		<center>
		<form method="POST" action="indexx.php">
			<h2 align="center">CART</h2>
			<table  border="1" align="center" >
			<tr>
			<td>
						<table align="center"   border="0" cellpadding="0" cellspacing="0" >
							<tr>
								<td>
									Item
								</td>
							</tr>
							<?php
							foreach($_SESSION['productList'] as $key=>$ithem)
                           {	
     
                     //foreach($ithem as $item)
                     //{
                            echo  "<tr>";
							echo  "<td>";
							//echo  $_SESSION['productList'][$key]['picture'];
							echo "<img src=" . "'" .$_SESSION['productList'][$key]['picture'] . "'" . "style=" . "width:180px;height:180px;>";
							
							echo	"</td>";
							echo  "<td>";
							echo "  <pre>   </pre>";
							echo  "</td>";
		
						echo		"<td>";
						echo "  ";
						  echo	$_SESSION['productList'][$key]['name'];
						  echo "  ";
						echo		"</td>";
						echo  "<td>";
							echo "  <pre>   </pre>";
							echo  "</td>";
						echo		"<td>";
						echo "  ";
						echo"SIZE: ";
								 echo $_SESSION['productList'][$key]['size'];
						echo "  ";

							echo 	"</td>";
							echo  "<td>";
							echo "  <pre>   </pre>";
							echo  "</td>";
						
							echo  "<td>";
							echo " quantity: ";
				echo $_SESSION['productList'][$key]['quantity'];
                         echo "  ";
						 echo  "</td>";
						 
						 
						 
						 echo  "<td>";
							echo "  <pre>   </pre>";
							echo  "</td>";
						 
						 
						 echo  "<td>";
							echo "  ";
				echo  " <td align=" . "right> <a href='cart_2.php?product=" . $_SESSION['productList'][$key]['name'] . "'> <button type=" . "button" . ">remove</button> </a></td>";
                         echo "  ";
						 echo  "</td>";
						 
						 echo  "<td>";
							echo "  <pre>   </pre>";
							echo  "</td>";
						 
						 
						 echo  "<td>";
							echo " tk: ";
							echo $_SESSION['productList'][$key]['unit_price'];
                         echo "  ";
						 echo  "</td>";
						// echo "<hr>";
							echo   "</tr>";
							echo "<tr>";
							echo "<td>";
							echo "<hr>";
							echo "</td>";
							echo "</tr>";
							
							
						//	}
							}
						?>
							
						</table>

			</td>
			</tr>
</table>			
	
<input type ="button" value ="Proceed to checkout" onclick="window.location.href='indexx.php'">
	
	<?php /*
	$ok=(isset($_SESSION['productList']));
	if($ok=true)
	{	
		var_dump($ok);
		echo "<input  type =" . "button" . " value = " . "Proceed to checkout" . "onclick=" . "window.location.href='indexx.php'" . ">";	
	}
	else
	{
		echo "no items ! go back";
	}

	*/
	?>
		</table>
		
		
		
		</form>	
		</center>
	
	</body>
	<br/>
	<br/>
	<br/>
</html>


<?php
	include("footer.php");
?>