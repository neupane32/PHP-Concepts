<?php
//This method is called when invoking inaccessible or non-existing methods.

class callMethodClass{
    public function __call($name, $arguments)
    {
        echo "calling method '$name' " . implode(',' , $arguments);
    }
}

$obj = new callMethodClass();
$obj->runTest('in object context');