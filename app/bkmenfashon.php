<pre>
<?php
session_start();
include("dbora.php");
//print_r($GLOBALS);

$category=$_POST['type'];
$name=$_POST['name'];
$discription=$_POST['description'];
$buying_price=$_POST['buying_price'];
$selling_price=$_POST['selling_price'];
$discount=$_POST['discount'];
$size=$_POST['size'];
$quantity=$_POST['quantity'];


//echo $_FILES["fileToUpload"]["name"];
if($category==1)
{     $p='causalTshirt_Pic/';
	$picture=$p.$_FILES['fileToUpload']['name'];
}
if($category==2)
{     $p='Jeans/';
	$picture=$p.$_FILES['fileToUpload']['name'];
}
if($category==3)
{     $p='FormalShirt_Pic/';
	$picture=$p.$_FILES['fileToUpload']['name'];
}
if($category==4)
{     $p='FormalPant_Pic/';
	$picture=$p.$_FILES['fileToUpload']['name'];
}
if($category==5)
{     $p='MensWatch_Pic/';
	$picture=$p.$_FILES['fileToUpload']['name'];
}
if($category==6)
{     $p='MensFootWear_Pic/';
	$picture=$p.$_FILES['fileToUpload']['name'];
}
if($category==7)
{     $p='sportsOutfit_pic/';
	$picture=$p.$_FILES['fileToUpload']['name'];
}
if($category==8)
{     $p='womensdress_pic/';
	$picture=$p.$_FILES['fileToUpload']['name'];
}
//echo $picture;

$target_dir = $p;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


insertIntoDB("begin ADDITEM('$name','$picture','$buying_price','$selling_price',
'$discription','$category','$size','$discount','$quantity');end;");

header("location: adminpanel.php");
?>

</pre>