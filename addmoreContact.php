<?php
session_start();
include 'conn.php';
$dbobj=new conn();
$dbobj->connection(localhost,root,maung,test);

class addmoreContact{
public $result;
public $row;

public function dropdown()
{

$this->result=mysql_query("select * from contact");
echo"<table>";
echo"<form name='form' action='addcontactProcess.php' method='post'>";
echo"<tr><td>"."Select Name to add more contact number"."</td>";

$dropdown = "<select name='fname'>";
while($this->row = mysql_fetch_assoc($this->result)) {

$dropdown .= "\r\n<option value='{$this->row['firstname']}'>{$this->row['firstname']}</option>";

}

$dropdown .= "\r\n</select>";

echo"<td>".$dropdown."</td></tr>";
echo"<tr><td>"."Enter additional phone number"."</td>";
echo"<td>"."<input type='text'name='phoneno'>"."<td></tr>";
echo"<tr><td></td>"."<td><input type='submit' value='Process'></td></tr>";


echo"</form>";
echo"</table>";     

}

}

$addobj=new addmoreContact();
$addobj->dropdown();

?>
