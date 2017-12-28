<?php 
require("menu.php");
?>



<script>
    function formValidation()  
    {  
	      
	    var passid = document.registration.passid;  
	    var uname = document.registration.username;  
	    var uadd = document.registration.address;  
	
	    var uemail = document.registration.email;  
	    var uphone = document.registration.phone; 
	      
	    	if(passid_validation(passid,7,12))  
	    	{  
	    		if(allLetter(uname))  
	    		{  
	    			if(alphanumeric(uadd))  
	   				{   
	    				
						if(ValidateEmail(uemail))  
						{  
							if(validphone(uphone))  
						    {  
						    	return true; 
						    }  
						}   	
	    			}  
	    		}  
	    	}  
	      
	    return false;  
	      
    } 
    
    function passid_validation(passid,mx,my)  
    {  
	    var passid_len = passid.value.length;  
	    if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
	    {  
	    alert("Password should not be empty / length be between "+mx+" to "+my);  
	    passid.focus();  
	    return false;  
	    }  
	    return true;  
    }  

    function allLetter(uname)  
    {   
	    var letters = /^[A-Za-z]+$/;  
	    if(uname.value.match(letters))  
	    {  
	    return true;  
	    }  
	    else  
	    {  
	    alert('Username must have alphabet characters only');  
	    uname.focus();  
	    return false;  
	    }  
    }  

    function alphanumeric(uadd)  
    {   
	    var letters = /^[0-9a-zA-Z]+$/;  
	    if(uadd.value.match(letters))  
	    {  
	    return true;  
	    }  
	    else  
	    {  
	    alert('User address must have alphanumeric characters only');  
	    uadd.focus();  
	    return false;  
	    }  
    } 
 
    function ValidateEmail(uemail)  
    {  
	    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	    if(uemail.value.match(mailformat))  
	    {  
	    return true;  
	    }  
	    else  
	    {  
	    alert("You have entered an invalid email address!");  
	    uemail.focus();  
	    return false;  
	    }  
    } 
    function validphone(uphone)  
    {  
     	var letters = /^[0-9]+$/;  
	    if(uphone.value.match(letters))  
	    {  
	    	return true;
	    }  
	    else  
	    {  
	    alert('User phone must have numeric characters only');  
	    uadd.focus();  
	    return false;  
	    }  
    }  
</script>


<html lang="en">
	 <table align="center">
	 <tr>
	 <td>
		<body >  
		<h1>Registration Form</h1>  
		<p>Use tab keys to move from one input field to the next.</p>  
			<form name='registration' onSubmit="return formValidation();" action="registration_handler.php">  
				<ul>  
				<li><label for="passid">Password:</label></li>  
				<li><input type="password" name="passid" size="12" /></li>  
				
				<li><label for="username">Name:</label></li>  
				<li><input type="text" name="username" size="50" /></li>  
				
				<li><label for="address">Address:</label></li>  
				<li><input type="text" name="address" size="50" /></li>    
				
				<li><label for="email">Email:</label></li>  
				<li><input type="text" name="email" size="50" /></li>  
				
				<li><label id="gender">Phone:</label></li>  
				<li><input type="text" name="phone" size="50" /></li>  

				<li><input type="submit" name="submit" value="Submit" /></li>  
				</ul>  
			</form>  
		</body> 
		</td>
			</tr>
		</table>
</html>