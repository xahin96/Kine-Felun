<pre>
<?php
session_start();
include("dbora.php");
//print_r($GLOBALS);

$username=$_REQUEST['username'];
$password=$_REQUEST['passid'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$role="customer";

//echo $password;

insertIntoDB("begin
edituser('$username','$password','$role','$email','$phone','$address');
end;");

header("location: KineFelun_Home.php");


?>

</pre>