<?php 
session_start();
?>
<?php
class credentialcheck
{
public $username;
private $password;
private $result;
public function credential()
{

$this->username=mysql_escape_string($_POST['login']);
$this->password=mysql_escape_string($_POST['password']);
$this->result=mysql_query("select userid from user where login='$this->username' and password='$this->password'");
if(mysql_num_rows($this->result)>0)
{
echo"<br>";
echo "successfully logged in MR.";
echo $_SESSION['username']=$this->username;
}
else
{
echo"<br>";
echo "fill in the form again";
}
}

}
?>
