
<?php
session_start();
//session_start();
include 'conn.php';
$dbobj=new conn();
$dbobj->connection(localhost,root,maung,test);
//include 'credentialcheck.php';
echo $username=$_SESSION['username'];
$result=mysql_query("select userid from user where login='$username'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Log In Form</title>
</head>
<body>
<form id="contactview" name="loginForm" method="post" action="contactProcess.php">
<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td width="112"><b>First Name</b></td>
<td width="188"><input name="fname" type="text" class="textfield" id="fname" /></td>
</tr>
<tr>
<td><b>Last Name</b></td>
<td><input name="lname" type="text" class="textfield" id="lname" /></td>
</tr>

<tr>
<td><b>Contact Number</b></td>
<td><input name="contact" type="text" class="textfield" id="contact" /></td>
</tr>
<tr> 
<td><input name="userid" type="text" class="textfield" id="userid" value="
<?php
while($row = mysql_fetch_array($result))
{
echo $row['userid'];
}
?>"/></td>

</tr>


<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Add Contact" /></td>
</tr>
</table>
</form>

</body></html>


