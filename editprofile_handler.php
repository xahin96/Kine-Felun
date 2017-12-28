<pre>
<?php
session_start();
include("dbora.php");
//print_r($GLOBALS);

$username=$_REQUEST['username'];
//$password=$_REQUEST['passid'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$uid=$_SESSION['user_id'];

//echo $password;

insertIntoDB("begin
adduser('$uid','$username','$email','$phone','$address');
end;");

header("location: viewprofile.php");


?>

</pre>