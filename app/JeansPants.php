<?php
	require("menu.php");
	include("../data/person_service.php");
	//print_r($GLOBALS);

//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql=searchAllJeans();
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
//$_SESSION["pid"]=$jsonData[1]["pid"];

//echo $jsonData[1]["PRODUCT_ID"];
$count=1;

echo "<table align=" ."center" . ">";
	echo "<td >";
		include ("sideMenuBar.php");
	echo "</td>";
	echo "<td>";

		echo "<table align=" ."center" . ">";
			echo "<tr>";
					foreach ($jsonData as $value)
					{
						echo "<td>";
				 		echo "<table border=". 0 . ">";
							echo "<tr>";
								echo "<td colspan=" . 5 ."><a href='Details.php?pid=$value[PRODUCT_ID]'> <img src=" . $value['PICTURE']. " 		 style=" . "width:290px;height:230px;" . "></a>
									  </td>";
							echo "</tr>";
						echo "<tr>";
							echo "<td colspan=". 5 .">" .$value['PRODUCT_NAME']. "</td>";
						echo "</tr>";
						echo "<tr>"; 
							echo "<td colspan=" . 3 .">". "  ৳  " . $value['SELLING_PRICE'] ."</td>";
							echo "<td align=" . "right> <a href='Details.php?pid=$value[PRODUCT_ID]'> <button type=" . "button" . ">Buy Now</button> </a></td>";
						echo  $count++;
				  
					   if($count%5==0)
					   {    
					   		echo "</table>";
							echo "</td>";
						    echo "<tr>";
					   }
					   else 
					   {
						 	echo "</table>";
							echo "</td>";  
					   }
					}	
			echo "</tr>";
		echo "</table>";

	echo "</td>";
echo "</table>";

?>
<br>
<br>
<br>

<?php
include ("footer.php");
?>

