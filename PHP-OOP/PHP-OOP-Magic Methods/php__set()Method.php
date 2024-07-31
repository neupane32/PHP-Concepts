<?php
//This method is called when attempting to set a value to a property that does not exist or is inaccessible.

class myClass{
    private $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

$obj = new myClass();
 echo $obj->name = "Aashish";   //sets the name property

?>