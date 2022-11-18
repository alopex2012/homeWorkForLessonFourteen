<?php

namespace App;

class Compare
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public static function compare1($obj1, $obj2)
    {
        return ($obj1 == $obj2) ? "true" : "false";
    }

    public static function compare2($obj1, $obj2)
    {
        return ($obj1 === $obj2) ? "true" : "false";
    }

    public static function compare3($obj1, $obj2)
    {
        return ($obj1 === $obj2) ? 1 : (($obj1 == $obj2) ? 0 : -1);
    }
}
