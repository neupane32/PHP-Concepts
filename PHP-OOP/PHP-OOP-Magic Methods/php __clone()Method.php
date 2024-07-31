<?php

// This method is called when an object is cloned using the clone keyword.

class cloneClass{
    public function __clone()
    {
        echo"Object cloned!";
    }
    
}
$obj = new cloneClass();
$obj1 = clone $obj;
?>