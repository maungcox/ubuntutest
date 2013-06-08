<?php
session_start();
include 'conn.php';
$dbobj=new conn();
$dbobj->connection(localhost,root,maung,test);
include 'credentialcheck.php';
$loginobj=new credentialcheck();
$loginobj->credential();
echo"<ol><li><a href='addContact.php'>AddContact</a></li>
<li><a href='contactView.php'>Contact List View</a></li>
</ol>";
?>
