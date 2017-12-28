<?php 
require("menu.php");
include("dbora.php");

$x=$_SESSION['user_id'];

$sql = "SELECT * FROM USERR,INFO WHERE USERR.INFO_ID=INFO.INFO_ID AND USER_ID='$x'";
$result = getJSONFromDB($sql);
$result = json_decode($result, true);


?>


<table align="center" >
<tr>
<td>

<fieldset>
    <legend><b>PROFILE</b></legend>
    <form>
        <br/>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
			
			<tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><?php echo $result[0]["USERNAME"]; ?></td>
            </tr>
            		
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $result[0]["EMAIL"]; ?></td>
            </tr>		
            
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td><?php echo $result[0]["ROLE"]; ?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td><?php echo $result[0]["PHONE"]; ?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td><?php echo $result[0]["ADDRESS"]; ?></td>
            </tr>
        </table>	
        <hr/>
        <a href="edit_profile.php">Edit</a>
        <a href="KineFelun_Home.php">Home</a>
    </form>
</fieldset>
</td>
</tr>
</table>