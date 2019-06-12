<?php
//Several predefined variables in PHP are "superglobals",
// which means that they are always accessible, regardless of
// scope - and you can access them from any function, class or file
// without having to do anything special.
//They include:
//    $GLOBALS
//    $_SERVER
//    $_REQUEST
//    $_POST
//    $_GET
//    $_FILES
//    $_ENV
//    $_COOKIE
//    $_SESSION

//$GLOBALS
//$GLOBALS is a PHP super global variable which is used to access global variables from
// anywhere in the PHP script (also from within functions or methods).
//PHP stores all global variables in an array
// called $GLOBALS[index]. The index holds the
// name of the variable.
//The example below shows how to use the super
// global variable $GLOBALS:

$x = 55;
$y = 45;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}
addition();
echo $z;

//$_Server

//$_SERVER is a PHP super global
// variable which holds information about headers, paths,
// and script locations.
//The example below shows how to use some of
// the elements in $_SERVER:

//1.PHP_SELF- Returns the filename of the current
//executing script
$_SERVER['PHP_SELF'];

echo //executing script
$_SERVER['PHP_SELF'];

//$_REQUEST
//PHP $_REQUEST is used to collect data after


if($_SERVER["REQUEST_METHOD"]== "POST"){
    $name = $_REQUEST['name'];
    $country = $_REQUEST['country'];

    if (empty($name)&& empty($country)){
        echo "Name and Country fields are empty";
    }else{
        echo $name."<br>";
        echo $country."<br>";
    }

}








?>