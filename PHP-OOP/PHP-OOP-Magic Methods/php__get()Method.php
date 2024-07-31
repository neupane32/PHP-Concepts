<?php
//This method is called when attempting to access a property that does not exist or is inaccessible.

class getClass{
    private $data = [];

    public function __get($name)
    {
        if(array_key_exists($name, $this->data)){
            return $this->data[$name];
        }
        return null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

$obj = new getClass();
$obj->name = " Mr.Aashish";
echo $obj->name; 
?>
