<?php
//PHP arrays
//array()
//$variableName = array('Benz', 'Toyota' )
//indexed array

$cars = array('Benz', 'Toyota', 'audi', 'ford');
//$cars[0] = 'benz'
//$cars[1] = 'toyota'
echo $cars[0];
echo "<br>";
echo $cars[2];
echo "<br>";

echo "I like ".$cars[0].", ".$cars[1].", ".$cars[2]." and ". $cars[3];
echo "<br>";

$num_cars = count($cars);
//echo $num_cars;
echo count($cars);
echo "<br>";

//for (init count; test count; increament count){}
for ($a = 0; $a < $num_cars; $a++){
    echo $a.".".$cars[$a]."<br>";
}

#PHP Associative Arrays
#Associative arrays are arrays that use named keys that
#you assign to them.

$food = array("Uganda"=>"matoke", "Kenya"=>"ugali", "Tanzania"=>"wali");
echo $food["Uganda"];
echo "<br>";
echo "I love eating ".$food["Uganda"].", ".$food["Kenya"]." and ".$food["Tanzania"];
echo "<br>";

foreach ($food as $country=>$dish){
    echo $country. " : ". $dish."<br><br>";
}

$electronics = array(); #empty array

$electronics['Phone'] = 'Huawei';
$electronics['Laptop'] = 'Yoga';
$electronics['Television'] = 'Samsung';

foreach ($electronics as $device=>$brand){
    echo $device. " : ". $brand."<br>";
}

//Assignment : create two functions ,one takes in an index array and that takes an associative
// array as an argument
//, and echos out  each item























































?>
