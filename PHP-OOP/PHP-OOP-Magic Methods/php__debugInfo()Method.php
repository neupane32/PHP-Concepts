<?php

// This method is called by var_dump() when dumping an object to get the properties to be shown.

class debugInfoClass{
    private $prop1 = 'value1';
    // private $prop2 = 'value2';


    public function __debugInfo()
    {
        return [
            'prop1' => $this->prop1,
            'custom' => 'Custom debug Info'
        ];
    }
}

$obj = new debugInfoClass();
var_dump($obj);

?>