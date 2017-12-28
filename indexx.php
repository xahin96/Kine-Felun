<?php
session_start();

if(isset($_SESSION['user_id']))
	{ 
      
		if($_SESSION['ROLE']=="customer")
		{
			header("location: index.php");
		}
		else {
			
			header("location: login.php?n=0");
		}
		
	}
	else{ 
	
	header("location: login.php?m=2");
      //require("menu.php");
	}

?>
