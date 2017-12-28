<?php
	require("menu.php");
?>
<script>
		function validate1(){
			flag=true;
			m = document.getElementById("msg");
			if(document.frm.username.value.length==0){
				m.innerHTML="Username required";
				m.style.color="red";
				flag=false;
				
			}
			
			else if(document.frm.password.value.length==0){
				m.innerHTML="password required";
				m.style.color="red";
				flag=false;
				
			}
			return flag;
		}
	</script>

<html>
	<head>
		<title>Kine Felun
		</title>
		<h3>Please Login<hr/></h3>
		
		<!-- Customized css file -->
	

	
	
		
		
	</head>
	<br/><br/>
	
	<body>
	<table  border="1" align="center" >
	<tr>
	<td>
	
	<form  action="bklogin.php"  enctype="multipart/form-data" name="frm">
		<div align="center">
			<div><font size = "5"> User ID?</font></div><br/>
			<input style = "height:30px; width:280px;" type = "text" name ="username" id="txt1" placeholder="username@gmail.com" size ="35">
		</div>
		<br/>
		<div align="center">
		<p>
			<div><font size = "5">Enter your password</font></div><br/>
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;
			 
			<input style = "height:30px; width:280px;" type = "password" id="txt2" name = "password" size ="35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<br> 
				<span id="msg"> </span>
				<br>
			<br/><input type="checkbox" name="received" value="received">Remeber Password<br/>
			<br/><input type="submit" onclick="return validate1();"  value="Log In"  name="submit">
			<br/><br/><a href="registration.php"><font size="3"<b> Forgot password? </b></font></a>
			<br/><p>New in Kine Felun? <a href="registration.php"><font size="2" color = "blue"><b>Sign-up now! </b></font></a>
			</p><br/>
			
		</p>	
		</div>
		</td>
		</tr>
	
		</form>
		</table>
	</body>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php 
	require("footer.php");
	?>
</html>
