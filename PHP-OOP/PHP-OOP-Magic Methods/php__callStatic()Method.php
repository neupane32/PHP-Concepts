<?php
// This method is called when invoking inaccessible or non-existing static methods.

class callStaticClass {
    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' " . implode(',' , $arguments);
    }
}
callStaticClass::runTest('in static context');

?>