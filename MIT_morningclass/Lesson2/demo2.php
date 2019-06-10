<?php
/**
 * Created by PhpStorm.
 * User: emoblis
 * Date: 6/3/19
 * Time: 9:43 AM
 */
#constants are like variables except that once created they cannot be changed
#constants starts with alettrt or underscore
#no $ sign before the constant name
#constant are global
#To define a constant use define()
#syntax
    //define(name, value, case-insensitive)

define("coordinates", 90, false);
echo coordinates;
echo "<br>";

define("height", 5.7, true);
echo height;
echo "<br>";
echo HEIGHT;
echo "<br>";

#constant Arrays
//$fruits = array(["banana", "mango", "apple"])
define("fruits",["banana", "mango", "apple"]);
echo fruits[0];
echo "<br>";
echo fruits[1];
echo "<br>";
echo fruits[2];




?>