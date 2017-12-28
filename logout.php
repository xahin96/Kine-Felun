<?php
session_start();

		unset($_SESSION['user_id']);
				unset($_SESSION['ROLE']);
				
				header(header("Location: KineFelun_Home.php"));



?>