<?php
class conn
{
private $hostname;
private $pass;
private $username;
private $databasename;
private $con;

public function connection($hostname,$user,$pass,$db)
{
$this->hostname=$hostname;
$this->pass=$pass;
$this->username=$user;
$this->databasename=$db;

$this->con= mysql_connect($this->hostname,$this->username,$this->pass,  $this->databasename);

if (!$this->con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db($this->databasename, $this->con);

echo"Connection successfull-->";
}
}
?>
