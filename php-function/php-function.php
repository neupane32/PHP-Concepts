<?php
//normal function
function hello(){
    echo "Hello Everyone.";
}
hello();
?>


<?php
//function with parameter

function add($a,$b){
    echo $a + $b;
}
add(10,20);
add(30,40);


function name($name){
    echo "Hello $name . <br>";
}
name("Aashish");
name("Neupane");

?>


<?php
//function with return value

function Hello01($fname="First", $lname="Last"){
    $v = "$fname $lname";

    return $v;
}

$name = Hello01("Aashish","Neupane");
echo $name;
?>


<?php
//php fucntion Argument by Reference
function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;

?>

<?php
//php variable function

function wow(){
    echo"Hello! This is variable function";

}
$func = "wow";
$func();
?>

<?php
//anyonymous function 

$myName = function($Name){
    echo "Hello! $Name";
};

$myName("Aashish Neupane.")

?>

<?php
//Recursive function
function display($number){
    if($number <= 5){
        echo "$number <br>";
        display($number + 1);
    }
}
display(1);

//another example:factorial number
function factorial($num){
    if($num == 0){
        return 1;
    }else{
        return ($num * factorial($num-1));
    }
}
//
echo factorial(5);

?>