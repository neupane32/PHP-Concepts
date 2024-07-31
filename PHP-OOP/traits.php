<?php

// PHP only supports single inheritance: a child class can inherit only from one single parent.

// So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
// Traits are used to declare methods that can be used in multiple classes. 
// Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

// Traits are declared with the trait keyword:

trait Logger {
    public function log($message){
        echo "Log: $message\n";
    }
}

class user{
    use Logger;

    public function createuser($name){
        $this->log("create User: $name");
    }
}

$user = new user();
$user->createuser('Aashish');
?>


<?php

//another example
trait Loggers{
    public function log($message){
        echo "Log: $message\n";
    }
}

trait Validator{
    public function validateEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->log("valid email: $email");
            return true;
        }
        else{
            $this->log("Invalid Email: $email");
            return false;
        }
    }
}

class Users {
    use Loggers, Validator;

    private $name;
    private $email;

    public function __construct($name,$email)
    {
        $this->name = $name;
        $this->email = $email;   
    }

    public function createUser(){

        if ($this->validateEmail($this->email)) {
            $this->log("Creating user: $this->name with email: $this->email");
            // Logic to create a user
        } else {
            $this->log("Failed to create user: $this->name due to invalid email");
        }
    }
}

$user = new Users("Aashish Neupane", "aashish@gmail.com");
$user->createUser();


?>