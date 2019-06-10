<?php

#Php condition statements
//1.if statement: Executes some code if ONE condition is true
//2.if...else
//3.of...elseif...else
//4.switch

/*
if(condition){
   code to execute
}
*/
$gender = "Other";
if ($gender == "Female"){
    echo "happy womens' day";
}
echo "<br>";

if ($gender == "Female"){
    echo "happy womens' day";
}else{
    "Happy Mens' day";
}
echo "<br>";

if ($gender == "Something else"){
    echo "happy womens' day";
}elseif($gender == "Others"){
    echo "Happy Others day";
}else{
    echo "you are not a human being, maybe a Bigfoot";
}
echo "<br>";

$t = date("H");
echo $t;
if ($t <= "12"){
    echo "good morning";
}elseif($t == "12"){
    echo "goodafternoon";

}
echo "<br>";




//write a PHP Program which iterates the integers from 1 to 100
//For multiples of three print "Fizz" instead of the number
//and for the multiples of five print "buzz"
//For numbers which are multiples of both three
//and five print "fizzbuzz"

#The switch statement is used to perform
#actions based on different conditions
//blocks of code to be executed

//syntax
/*
switch(n){
  case label1:
        code to execute;
        break:
case label1:
        code to execute;
        break:
case label1:
        code to execute;
        break:

default:
    code to execute if n is different from labels:




}
*/
switch ('male'){
    case 'male':
        echo 'I am a male';
        break;
    case 'female':
        echo 'I am a female';
        break;
    case 'other':
        echo 'I am a other';
        break;
    default:
        echo "None of the above";
}


























?>