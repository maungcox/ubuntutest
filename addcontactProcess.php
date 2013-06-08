<?php
session_start();
include 'conn.php';
$dbobj=new conn();
$dbobj->connection(localhost,root,maung,test);
class addcontactProcess
{
public $name;
public $phoneno;
public $subquery;
public $row;

public function addmoreContact()
{
echo $this->name=$_POST['fname'];
echo $this->phoneno=$_POST['phoneno'];
while($this->row=mysql_fetch_array($this->subquery))
{
echo $this->row['contactid'];

}
mysql_query("insert into phone(phoneid,phonenumber,contactid)
values(NULL,$this->phoneno,(select contactid from contact where firstname='$this->name')

)
");

}
}
$contactobj=new addcontactProcess();
$contactobj->addmoreContact();
?>
