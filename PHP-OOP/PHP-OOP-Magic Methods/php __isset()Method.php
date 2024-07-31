<?php
// This method is called when using isset() or empty() on inaccessible or non-existing properties.

class isSetClass {
    private $data = array('name' => 'Aashish Neupane');

    public function __isset($name) {
        return isset($this->data[$name]);
    }
}

$obj = new isSetClass();
// var_dump(isset($obj->name)); //bol(true)
?>
