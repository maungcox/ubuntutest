<?php

session_start();
include 'conn.php';
$dbobj=new conn();
$dbobj->connection(localhost,root,maung,test);

function getOwner( $thing )
{

	 //global $log;
	 //$log->log_event( "looking for thing $thing" );

	 $result = mysql_query( "select owner from things where thing='$thing'" );
 	 $row = mysql_fetch_assoc($result);
$rowa=array('first' => null, 'second' => 4);
        if ( array_key_exists('first', $rowa ) ){echo'valid';}
else 'invalid';
	 return $row['owner'];
}

echo getOwner('hat');
echo"<br>";
echo 'date\n';
echo"<br>";
	 echo "date\n";
echo"<br>";
	 echo `date\n`;
echo"<br>";
 echo "`date`\n";


?>
