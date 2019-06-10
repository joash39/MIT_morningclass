<?php
/**
 * Created by PhpStorm.
 * User: emoblis
 * Date: 5/31/19
 * Time: 9:52 AM
 */
//Variables in php
//variables are containers for information
$name = "Joash";
echo $name;

$text = "Php is awesome";
echo $text;

$num1 = 100;
$num2 = 50;

echo $num1 + $num2;
# How to add html into php
echo "<header><h1>Welcome</h1></h1></header>";

//php is loosely typed
$float_number = 10.23; #floats are numbers that have decimal points
$integer_number = 1023;
$text = "Php is awesome";# astring any text inclosed inside any text enclosed
$isHappy = false;# boolean
$isSad = true;# boolean

//PHp variable scope
//variables can  be declared anywhere in php
//the scope of a variable is the part of the script where the variable can be used/referenced
    #local
    #global
    #static

$x = 5; //global variable

function myText(){
    global $x;
    $sentence = "Welcome to php class";
    echo "Hello world $x";
}

myText();

#Php data types
//variables store diff types of data type
    #1. String
    #2. Integer
    #3. Float
    #4. Boolean
    #5. Array
    #6. Object
    #7. Null
    #8. Resource

#Php String
$name = "Developer";
var_dump($name);
echo "<br>";
echo strlen($name);
echo "<hr>";
echo str_word_count("Hello world!");
echo "<hr>";
echo strrev("Hello world!");
echo str_replace("world", "kenya", "Hello world!");
?>

