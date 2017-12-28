<pre>
<?php
session_start();
include("dbora.php");
//print_r($GLOBALS);


$pid=$_REQUEST['pid'];


//header("location: adminpanel.php");


$sql="delete from product where product_id=$pid";
insertIntoDB($sql);

header("location: deleteItem.php");


?>

</pre>