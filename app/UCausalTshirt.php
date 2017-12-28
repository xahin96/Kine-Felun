<?php
	include("adminHeader.php");
	include("C:/xampp/htdocs/web tech/data/dbora.php");
	//print_r($GLOBALS);

//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql="select * from product where category_id=1";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
//$_SESSION["pid"]=$jsonData[1]["pid"];

//echo $jsonData[1]["PRODUCT_ID"];
$count=1;

echo "<table align=" ."center" . ">";
	echo "<td>";

		echo "<table align=" ."center" . ">";
			echo "<tr>";
					foreach ($jsonData as $value)
					{
						echo "<td>";
				 		echo "<table border=". 0 . ">";
							echo "<tr>";
								echo "<td colspan=" . 5 .">
								<a href='UDetails.php?pid=$value[PRODUCT_ID]'> <img src='../app/" . $value['PICTURE'] . "'style=width:290px;height:230px;></a>
									  </td>";
									//  echo "'" . $value['PICTURE'] . "'";
							echo "</tr>";
						echo "<tr>";
							echo "<td colspan=". 5 .">" .$value['PRODUCT_NAME']. "</td>";
						echo "</tr>";
						echo "<tr>"; 
							echo "<td colspan=" . 3 .">". "  ৳  " . $value['SELLING_PRICE'] ."</td>";
							echo "<td align=" . "right> <a href='UDetails.php?pid=$value[PRODUCT_ID]'> <button type=" . "button" . ">EDIT</button> </a></td>";
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

