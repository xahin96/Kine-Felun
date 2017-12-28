<?php
	
	$conn = odbc_connect("127.0.0.1", "adbms", "pass");
	
	$username = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	
	
	$query = "select user_id from userr where username='$username' and password='$password'";
	$result = odbc_exec($conn,$query);
		
	while($row = odbc_fetch_array($result))
	{
		$_SESSION["USER_ID"] = $row[0];
		echo $row[0];
	}
?>