
<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Log In Form</title>
</head>
<body>
<form id="loginForm" name="loginForm" method="post" action="loginprocess.php">
<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td width="112"><b>User Name</b></td>
<td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
</tr>
<tr>
<td><b>Password</b></td>
<td><input name="password" type="password" class="textfield" id="password" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login" /></td>
</tr>
</table>
</form>

</body></html>


