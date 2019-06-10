<?php
//Besides Besides the built-in PHP functions, we can create our own functions.
//
//A function is a block of statements that can be used repeatedly in a program.
//
//A function will not execute immediately when a page loads.
//
//A function will be executed by a call to th

/*
function functionName() {
    block of code to executed;
}
*/
#Creating/declaring a function
function sayHelloworld(){
    echo "hello world <br>";

}
sayHelloworld();#calling a function
$x = strrev("hello world");
echo $x;
echo "<br>";
#usdefault.aspe a parameter when declairing a function

function greetings($name, $age){
    echo "my name is $name and my age is $age years old";

}
#use argument when calling a function

greetings("Joash", 18);
echo "<br>";

$myName = "Joash";
$myAge = 18;
greetings($myName,$myAge);
echo "<br>";

#create a function that takes a number, and it echos
#out the square of the number

function getSquare($num){
    echo $num * $num;
}
getSquare(10);
echo "<br>";

$b = strrev("highschool");
echo $b;
echo "<br>";

function getMod($num1, $num2){
    $result = $num1 % $num2;
    return $result;
}

$getTheMod = getMod(3, 2);
echo $getTheMod;
echo "<br>";

function church($pastor= "Ng'anga"){
    echo "My pastor is Pst.$pastor";

}

church("Joseph");
















?>