<?php
// An abstract class is a class that contains at least one abstract method. 
// An abstract method is a method that is declared, but not implemented in the code.
// An abstract class or method is defined with the abstract keyword:

abstract class Animals{
    abstract public function behaviour();

    public function dipslay(){
        echo"This is a Animal";
    }

}
class Dog extends Animals{
    public function behaviour()
    {
        echo "Dog make sound by barking";
    }
}
class Cat extends Animals{
    public function behaviour()
    {
        echo "Cat make sound by meow";
    }
}

$dog = new Dog();
$dog->behaviour();
$dog->dipslay();
echo "<br>";

$cat = new Cat();
$cat->behaviour();
$cat->dipslay();
echo "<br>";

?>

<?php
//abstract function with argument

abstract class Header{
    abstract public function greet($style);
}

class Footer extends Header{
    public function greet($style){
        if ($style == "Hindu"){
            echo "Namaste Aashish";
        }
        elseif ($style == "muslim"){
            echo "Salammalekum Ashihs";
        }
        else{
            echo "hey Aashish";
        }
    }
}

$footer = new Footer();
$footer->greet("hindu");

?>