<?php
class Suit {
    private static $CLUB, $DIAMOND, $HEART, $SPADE;
    private static $SUIT_NAMES = array("Club", "Diamond", "Heart", "Spade");
    private static $COLOURS = array("red", "black");

    private static $initialized = false;

    function __construct($name, $colour) {
        if(!self::$initialized)
        {
            self::$CLUB = new Suit("Club", "black");
            self::$DIAMOND = new Suit("Diamond", "red");
            self::$HEART = new Suit("Heart", "red");
            self::$SPADE = new Suit("Spade", "black");
            self::$initialized = true;
        }

        if (!in_array($name, self::$SUIT_NAMES)) {
            throw new Exception("Suit Exception: invalid suit name.");
        }
        if (!in_array($colour, self::$COLOURS)) {
            throw new Exception("Suit Exception: invalid colour.");
        }
       $this->name = $name;
       $this->colour = $colour;
    }
}
?>
