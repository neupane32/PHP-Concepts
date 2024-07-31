<?php
// This method is called when an object is used as a function.

class invokeClass{
    public function __invoke($param){
        return "Invoking object with parameter: $param";
    }
}

$obj = new invokeClass();
echo $obj('test');

?>