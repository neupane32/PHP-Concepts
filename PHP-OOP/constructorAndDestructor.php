<?php

class Fruit
{
    private $name;
    private $desc;
    
    //constructor
    public function __construct($name, $desc)
    {
        $this->name = $name;
        $this->desc = $desc;
    }
    function getname()
    {
        return $this->name;
    }
    function getdesc()
    {
        return $this->desc;
    }
}

$apple = new Fruit("Apple", "An apple a day keep a doctor away!!");
echo $apple->getname();
echo "<br>";
echo $apple->getdesc();
