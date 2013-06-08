<?php
session_start();
include 'conn.php';
$dbobj=new conn();
$dbobj->connection(localhost,root,maung,test);

class contactProcess {
private $firstname;
private $lastname;
private $contactnumber;
private $userid;
private $result;


public function contactAdd()

{
$this->firstname=mysql_escape_string($_POST['fname']);
$this->lastname=mysql_escape_string($_POST['lname']);
$this->contactnumber=mysql_escape_string($_POST['contact']);
$this->userid=mysql_escape_string($_POST['userid']);

$this->result=mysql_query("insert into contact(contactid,firstname,lastname,contactnumber,userid) 

values(NULL,'$this->firstname','$this->lastname', $this->contactnumber, $this->userid)
" );
echo "<br>"."contact created successfully";
}
}
$contact=new contactProcess();
$contact->contactAdd();
?>
