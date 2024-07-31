<?php
//static method: Static methods can be called directly - without creating an instance of the class first.

class Name {
    public static function welcome(){
        echo "Hello Aashish!! <br>";
    }
}

//call the static method
Name::welcome();

?>

<?php
//exmaple:2

class greeting{
    public static function welcome(){
        echo "Hello! I am here. <br>";
    }

    public function __construct()
    {
        self::welcome();
    }
}
new greeting();
?>

<?php
//static method can be also called form another class. the static method should be public

class A{
    public static function welcome(){
        echo "Hello Aashish !!";
    }
}

class B{
    public static function where(){
        echo "I am here..";
    }
}

class C{
    public function message(){
        A::welcome();
        B::where();
    }
}

$obj = new c();
echo $obj->message();
echo "<br>";

?>

<?php
//To call a static method from a child class, use the parent keyword inside the child class.
class first{
    protected static function getMyfunction(){
        return "This is static function!!";
    }
}
class Second extends First{
    public $myFunction;

    public function __construct()
    {
        $this->myFunction = parent::getMyfunction();
    }
}
$Second = new Second;
echo $Second->myFunction;

?>

