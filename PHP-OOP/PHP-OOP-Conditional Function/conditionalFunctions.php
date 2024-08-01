<?php 
//class_exist() : check whether the class exist or not.

class MyClass {

}

if(class_exists('MyClass')){
    echo "This class is exists.";
    $obj = new MyClass();

}else{
    echo "This class is not exists.";
}

?>

<?php
//interface_exist() : check whether the interface exist or not.

interface MyInterface {

}
if(interface_exists('MyInterface')){
    echo "This interface is exists.";

}else{
    echo "This interface is not exists.";
}
?>

<?php
//method_exist(): check whether the method is exist or not

class MethodClass {
    public function myMethod() {
        
    }
}
$obj = new  MethodClass();
$obj->myMethod();

if(method_exists($obj, 'MyMethod')){
    echo "This Method is exists.";

}else{
    echo "This Method is not exists.";
}

?>

<?php
// trait_exists() : check whether is trait is exist or not.

trait myTrait {
    public function MyMethod(){

    }
}
if(trait_exists('MyTrait')){
    echo "This Trait is exists.";

}else{
    echo "This Trait is not exists.";
}

?>


<?php
//property_exists() : check wheter the property exists or not

class PropertyClass{
    public $name;
}
if(property_exists('PropertyClass', 'name')){
    echo "This Property is exists.";

}else{
    echo "This Propperty is not exists.";
}

?>

<?php
//is_a() : check whether the object is of the class or not. 

class isClass{

}

$obj = new isClass();

if(is_a($obj, 'isClass')){
    echo "This object is of class isClass.";
}
else{
    echo "This object is not of class isClass.";
}

?>

<?php
class parentClass{

}

class childClass extends parentClass {

}
$obj = new childClass();

if(is_subclass_of($obj, 'parentClass')){
    echo "This \$obj is a object of subclass of parentClass.";
}
else{
    echo "This \$obj is not a object of subclass of parentClass.";
}


?>