<?php

session_start();
include 'conn.php';
$dbobj=new conn();
$dbobj->connection(localhost,root,maung,test);

class contactView
{
public $result;
public $row;
public $conn;
public $username;
public function contactList()
{
$this->username=$_SESSION['username'];
$this->result=mysql_query(
"SELECT contact.contactid, contact.firstname, contact.lastname, contact.contactnumber, user.login, user.userid, phone.phoneid, phone.phonenumber
FROM contact
INNER JOIN user ON contact.userid = user.userid
INNER JOIN phone ON contact.contactid = phone.contactid
AND user.login =  '$this->username'"
) ;
echo"<br>";
echo "Contact lists of--->".$_SESSION['username']."<br>"; 
echo"<table border=1>";


while($this->row=mysql_fetch_array($this->result))

{
echo"<tr><td>User Id:</td>";
echo "<td>".$this->row['userid']."</td>
</tr>";
echo"<tr><td>User Name:</td>"; 
echo "<td>".$this->row['login']
."</td></tr>";
echo"<tr><td>First Name:</td>";
echo "<td>".$this->row['firstname']."</td></tr>";
echo"<tr><td>Last Name:</td>";
echo "<td>".$this->row['lastname']."</td></tr>";
echo"<tr><td>Contact Id:</td>";
echo "<td>".$this->row['contactid']."</td></tr>";
echo"<tr><td>Primary Contact Number:</td>";

echo "<td>".$this->row['contactnumber']."</td></tr>";

echo"<tr><td>Alternative Contact Number:</td>";

echo "<td>".$this->row['phonenumber']."</td></tr>";

}

echo"<tr><td></td><td>"."<a href='addmoreContact.php'>+(Add More Contact Number)"."</td>
</tr>";

echo"</table>";
}
}
$viewobj= new contactView();
$viewobj->contactList();

?>
