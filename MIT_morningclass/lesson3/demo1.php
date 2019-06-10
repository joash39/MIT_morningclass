<?php
/**
 * Created by PhpStorm.
 * User: emoblis
 * Date: 6/3/19
 * Time: 10:36 AM
 */

#PHP operators
//1.Arithmetic operators
#Addition ; +
#Substraction : -
#Multiplication : *
#Division : /
#Modulus : %
#Exponential : **

$x = 100;
$y = 7;
#Addition
$x + $y;
$z = $x + $y;
echo $z;
echo "<br>";
$a = $x % $y;
echo $a;
echo "<br>";

//Assignment Operator
#They are used to write a value to a variable
$s = 1;
$d = 3;
$s += 23;# $s = $s + 23;
$d -= 12;# $d = $d - 12;
$d *= 12;# $d = $d * 12;
$d = 12;
$d = 12;
$d = 12;
//PHP comparison operators
$t = 1000000;
$r = 11000000;
//1.== equal
echo $t == $r;
//2.=== identical
#returns true if one variable is equal to another variable
// and they are of the  same data type
$u = 100;# Integer
$l = 12.12;# Float

var_dump($u ===$l);#false
echo "<br>";
var_dump($u !=$l);#true
echo "<br>";
var_dump($u >=$l);#true
echo "<br>";
#Increament and Decreament Operators
#Use in conjuction with variables
//++ : Increament
//-- : Decreament

$b = 0;
$c = 5;
echo ++$b;# 1 : Pre-increament, Increaments $b by one, then returns $b
echo "<br>";
echo $c++;#5 Post-increament, returns $c, then increament $c by one
echo "<br>";
echo --$b;
echo "<br>";
echo $b--;
echo "<br>";

#Logical operator
//Used to combine conditional statements
//#1. and : $x and $c : true if both $x and $c are true
//2. or : $x or $c : true if either $x or $c
//3. xor : $x xor $c : True if either $x or $c is true but not both
//4. && : $x and $c : true if both $x and $c are true
//5. || or : $x || $c : True if either $x or $y is true
//6. ! : !x : if $x is not true

$x = 100;
$y = 50;
if($x == 100 and $y == 50){
    ECHO "Conditions are true";
}
echo "<br>";

if($x == 99 or $y == 50){
    ECHO "One condition is not true";
}
echo "<br>";

if($x == 99 || $y == 50){
    ECHO "One condition is not true";
}
echo "<br>";

if(!$x == 99){
    ECHO "$x is not equal to 99";
}
echo "<br>";

#String Operators
$name = "Php";
$name_two = "Developer";
echo $name.$name_two;
echo "<br>";

//Concatenation assignment
$firstname = "John";
$secondname = "Doe";
echo $firstname.=$secondname; #$firstname=$firstname.$secondname
echo "<br>";






























?>