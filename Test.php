<?php
class MyObj
{
//this is just a comment......... this is todays test.............
private static $city = array("Dhaka", "London", "Honslow West", "Richmond");
	
    public function __construct()
	{


    foreach( self::$city as $key => $value )
		{
			echo $this->$key = $value;
echo "<br>";
		}
	}
}

$obj= new Myobj();
