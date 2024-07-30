<?php

class Fruit
{
    private $name;
    private $desc;

    //constructor
    public function __construct($name, $desc)
    {
        $this->name = $name;
        $this->desc = $desc;
    }
    function getname()
    {
        return $this->name;
    }
    function getdesc()
    {
        return $this->desc;
    }
}

$apple = new Fruit("Apple", "An apple a day keep a doctor away!!");
echo $apple->getname();
echo "<br>";
echo $apple->getdesc();
echo "<br>";

?>

<?php

//destructor
class Fruits {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

$apple = new Fruits("Apple", "red");
?>

