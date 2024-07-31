<?php
// Interfaces allow you to specify what methods a class should implement.
// Interfaces make it easy to use a variety of different classes in the same way. 
// When one or more classes use the same interface, it is referred to as "polymorphism".

interface People {
     public function About();
}

Class Men implements People{
    public function About()
    {
        echo"This is a Men class". "<br>";
    }
}

class Women implements People{
    public function About()
    {
        echo"This is a Women class". "<br>";
    }

}
$men = new Men();
$men->About();

$women = new Women();
$women->About();
?>

<?php
//Interface + abstract class combo 

interface shapeOfAFigure{
    public function CalculateArea();
}

abstract class shape implements shapeOfAFigure{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function describe(){
        echo "The name of shape is : {$this->name}! <br>";
    }
}

class Cricle extends shape{
    private $radius;

    public function __construct($radius)
    {
        parent::__construct("Circle");
        $this->radius = $radius;
    }

    public function CalculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}


$circle = new Cricle(5);
echo $circle->CalculateArea();
echo "<br>";
echo $circle->describe();
?>