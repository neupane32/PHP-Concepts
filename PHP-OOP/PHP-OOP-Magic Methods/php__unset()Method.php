<?php
//This method is called when using unset() on inaccessible or non-existing properties.

class MyClass {
    private $data = array('name' => 'Aashish');

    public function __unset($name) {
        unset($this->data[$name]);
    }
}

$obj = new MyClass();
// unset($obj->name);
// var_dump(isset($obj->name)); // Outputs: bool(false)
