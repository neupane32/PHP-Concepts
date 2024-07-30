<?php
//creating a class

class Father {
    //class properties and method goes here
}

//object
$obj = new Father;

//var_dump() function is used to display the structured information (type and value) about one or more variables.
var_dump($obj);
echo "<br>";

?>

<?php
//another example

class Demo {
    private $a = "Hello Aashish";
    public function display(){
        echo $this->a;
    }
}
//obj
$demo = new Demo;
$demo->display();
echo "<br>";

?>

<?php
// example no. : 3

class Animal {
    private $name = "Lion" . "<br>";
    private $description = "Lion is the king of jungle";

    public function display(){
        echo $this->name;
        echo $this->description;
    }

}
$obj = new Animal;
$obj->display();
var_dump($obj);
?>
