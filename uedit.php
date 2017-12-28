<pre>
<?php
session_start();
include("dbora.php");
//print_r($GLOBALS);
$pid=$_REQUEST['pid'];
$name=$_POST['name'];
$discription=$_POST['discription'];
$buying_price=$_POST['buying_price'];
$selling_price=$_POST['selling_price'];
$discount=$_POST['discount'];
//echo $buying_price;
$sql="UPDATE  PRODUCT SET PRODUCT_NAME='$name', DISCRIPTION='$discription',
BUYING_PRICE=$buying_price ,
SELLING_PRICE=$selling_price , DISCOUNT=$discount where PRODUCT_ID=$pid ";

insertIntoDB($sql);
header("location: adminpanel.php");



?>
</pre>