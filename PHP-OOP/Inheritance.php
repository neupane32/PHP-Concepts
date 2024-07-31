<?php
//Inheritance

class Animal {
    private $name;
    private $feature;

    public function __construct($name, $feature){
        $this->name = $name;
        $this->feature = $feature;
    }

    public function display(){
        echo "The name of animal is {$this->name} and the feature is {$this->feature} !! . <br>";
    }
}

class Dog extends Animal {
    public function about(){
        echo "The name of animal is dog";
    }
}

$dog = new Dog("puppy","Barking");
$dog->display();
$dog->about();
echo"<br>";
?>

<?php
//Overriding Inherited method

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "The name of fruit is {$this->name} and the color is {$this->color} !!";
    }
}

class Mango extends Fruit{
    public $taste;

    public function __construct($name, $color, $taste)
    {
        $this->name = $name;
        $this->color = $color;
        $this->taste = $taste;
    }
    public function intro(){
        echo "The name of fruit is {$this->name} and the color is {$this->color} and the taste is {$this->taste} !!";
    }
}
$mango = new Mango("Mango","Yellow","Tasty");
$mango->intro();

?>


<?php

//final keyword: used to prevent class inheritance or to prevent method overriding.
final class Fruits {
  // some code
}

// will result in error
// class Strawberry extends Fruits {
//   // some code
// }
?>