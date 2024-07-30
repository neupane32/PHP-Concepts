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

?>