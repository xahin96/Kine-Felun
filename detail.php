
<?php
session_start();
	//require("menu.php");
	
	include("../data/dbora.php");
	$x=$_SESSION["product_id"];
	$y=$_REQUEST["size"];
	$z=$_REQUEST["quantity"];	
$sql="SELECT * FROM PRODUCT WHERE PRODUCT_ID= $x";

$jsonData= getJSONFromDB($sql);

$jsonData = json_decode($jsonData, true);

$product['id']=$x;
$product['name']=$jsonData[0]["PRODUCT_NAME"];
$product['picture']=$jsonData[0]["PICTURE"];
$product['size']=$y;
$product['quantity']=$z;
$product['unit_price']=$jsonData[0]["SELLING_PRICE"];

	var_dump($product);
	
	if(isset($_SESSION['productList']))
		$productList = $_SESSION['productList'];
	
	if(isset($productList))
		$productList[count($productList)] = $product;
	else
		$productList[0] = $product;
	
	$_SESSION['productList'] = $productList;
	//echo $_SESSION['productList'][0]['id'];
	//var_dump()
 header("location: cart.php");

?>

