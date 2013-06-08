<?php //test case.......
class MyObj
{
public $cityname;
const pi=3.14159;
private static $city = array("Dhaka", "London", "Honslow West", "Richmond");
	
    public function __construct($cityname)
	{
      echo self::pi."<br>";
        $this->cityname=$cityname;
try{
  if (!in_array($this->cityname, self::$city)) {
            throw new Exception("City Exception: invalid City name.");
        }
      

        
    foreach( self::$city as $key => $value )
		{
			echo $this->$key = $value;
echo "<br>";
		}
	}


catch(Exception $e)
  {
  echo 'Message: ' .$e->getMessage();
  }
}
}

$obj= new Myobj("Dhaka");


?>
