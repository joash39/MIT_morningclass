<?php
//PHP LOOPS
//1. while .loops through a block of code as long as
//the specified condition is true
//2. do...while .loops through a block of code ONCE,
//and then repeats the loop AS LONG AS the specified
//condition is true
//3. for
//4. foreach

#syntax
/*
  while(condition){
  code to execute:
  }
*/
$x = 0;

while($x < 10){
    echo $x."hello world <br>";
    echo "<br>";
    $x++;
}

#do...while
/*
do{
    code to execute
} while(condition is true)
//NOTE: condition is tested after
*/

do{
    echo "hello world <br>";
    $x++;
}while($x < 10);

#for loop
//  execute a block of code a specified number of times

/*
for(init counter; test counter, increament counter){
    code to execute:
}

*/

for($y = 0;$y < 10;$y++){
    echo $y."hello world <br><br>";
}

#foreach
//The foreach loop works only on arrays, and is used
//to loop through each key/value pair in an array
#syntax
/*
foreach($array as $value)
    code to execute;

*/

$languages = array("html", "css", "bootstrap", "php");

foreach($languages as $language) {
    echo "$language <br><br>";
}

$n = 0;
while ($n <= 50) {
    if ($n % 2 == 0 and $n != 0) {
        echo "$n is divisible by 2<br>";
    } elseif ($n % 3 == 0 and $n != 0){
    echo "$n is divisible by 3<br>";

        echo $n;
        echo "<br>";
    }
    $n++;
}













?>