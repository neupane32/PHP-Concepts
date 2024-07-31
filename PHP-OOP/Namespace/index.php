<?php
//Namespace: 
// A namespace is a way to encapsulate and group related classes, interfaces, functions, and constants together. 
// It helps to avoid naming conflicts in larger projects where multiple libraries or modules might have the same class or function names.

require 'product.php';
require 'testing.php';

function wow(){
    echo "Wow from product page <br>";
}

$obj = new pro\Product();
$obj1 = new test\Product();


?>