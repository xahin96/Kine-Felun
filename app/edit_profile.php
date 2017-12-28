<?php 
require("menu.php");
include("dbora.php");

$x=$_SESSION['user_id'];

$sql = "SELECT * FROM USERR,INFO WHERE USERR.INFO_ID=INFO.INFO_ID AND USER_ID='$x'";
$result = getJSONFromDB($sql);
$result = json_decode($result, true);


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
<table align="center">
<tr>
<td>

<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
    <form name='registration' onSubmit="return formValidation();" action="editprofile_handler.php">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><input name="username" type="text" value="<?php echo $result[0]["USERNAME"];?>"></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text" value="<?php echo $result[0]["EMAIL"];?>">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>				
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td>   
                  <?php echo $result[0]["ROLE"];?>
                </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td valign="top">Phone</td>
                <td valign="top">:</td>
                <td>
                    <input name="phone" type="text" value="<?php echo $result[0]["PHONE"];?>">
                </td>
                <td></td>
            </tr>
			<tr><td colspan="4"><hr/></td></tr>
			 <tr>
                <td valign="top">Address</td>
                <td valign="top">:</td>
                <td>
                    <input name="address" type="text" value="<?php echo $result[0]["ADDRESS"];?>">
                </td>
                <td></td>
            </tr>
        </table>
        <hr/>
        <input type="submit" value="Save">	
        <a href="KineFelun_Home.php">Home</a>
    </form>
</fieldset>

</td>
</tr>
</table>