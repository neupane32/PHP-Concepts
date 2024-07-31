<?php
//This method is called when an object is treated as a string.

class toStringClass{
    public function __toString()
    {
        return "This is __toString method!!";
    }
}

$obj = new toStringClass();
echo $obj;

?>