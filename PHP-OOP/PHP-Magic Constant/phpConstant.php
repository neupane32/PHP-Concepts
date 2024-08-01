<?php
// __NAMESPACE__ : provide the namespace name.
namespace MyNamespace;
echo 'The namespace is ' . __NAMESPACE__ . "<br>";
?>


<?php
// __LINE__ : Provides the current line number of the file.

echo "This is the line" . __LINE__ . "<br>";



echo "We are currently in line:" . __LINE__ . "<br>";

?>

<?php
// __FILE__ : provide the full path and filename of the file/

echo "This file is located at " . __FILE__ . "<br>";

?>

<?php
// __DIR__: Provides the directory of the file.

echo "The file is in directory " . __DIR__ . "<br>";

?>

<?php
//__Function__ : provides the name of the function where it is used.

function myFunction(){
    echo "The function name is " . __FUNCTION__. "<br>";
}
?>

<?php
// __class__ : provide the name of the class where it is used.
class Aashish{

    public function getClassName(){
        echo "The name of class is " . __CLASS__ ."<br>";
    }
}
$obj = new Aashish();
$obj->getClassName();

?>

<?php
// __Trait__ :Provides the name of trait where it is used.

trait myTrait {
    public function getTraitName(){
        echo "The name of trait is: " . __TRAIT__ ."<br>";
    }
}
class myClass{
    use myTrait;
}
$obj = new myClass();
$obj->getTraitName();

?>

<?php
// __METHOD__ : provide the name of class method where it is used.

class myClass1{
    public function getMethodName() {
        echo "the name of method is :". __METHOD__ . "<br>";
    }
}
$obj = new myClass1();
$obj->getMethodName();
?>



