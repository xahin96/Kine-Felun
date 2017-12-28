<?php
session_start();
	$x=$_REQUEST['product'];
	
	foreach($_SESSION['productList'] as $key=>$ithem)
	{	
     //echo $key;
foreach($ithem as $item)
{
	
	if($item==$x)
	{   
unset($_SESSION['productList'][$key]);

//echo "hi";
 header("Location: cart.php");
			break;	
			}
			
	
	
	}
	//break;
	
	}
 
?>
