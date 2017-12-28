<?php
session_start();
$_SESSION['role'] = "";


require("dbora.php");

$username=$_REQUEST["username"];
$pass=$_REQUEST["password"];

$sql = "select * from userr where USERNAME = '$username' and PASSWORD = '$pass'";
$result = getJSONFromDB($sql);
$result = json_decode($result, true);


if(isset($result[0]["USER_ID"]) && $result[0]["USERNAME"] == $username && $result[0]["PASSWORD"] == $pass){
	if($result[0]["ROLE"] == "admin"){
		
		$_SESSION['ROLE'] = "admin";
		 $_SESSION['user_id'] = $result[0]["USER_ID"];
		 $_SESSION['user_name'] = $result[0]["USERNAME"];
		 
		header("Location: adminpanel.php");	
	}
	else{
		$_SESSION['ROLE'] = "customer";
		$_SESSION['user_id'] = $result[0]["USER_ID"];
		$_SESSION['user_name'] = $result[0]["USERNAME"];
		//echo $_SESSION['ROLE'];
		header("Location: KineFelun_Home.php");		
	}
	
}
else
{
	header("Location: login.php");
	//echo "hi";
}

?>
