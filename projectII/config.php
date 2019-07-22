<?php

$conn = mysqli_connect('localhost', 'root','','assignment');

if(!$conn){
    echo "Connection to the db is not successful: ".mysqli_connect_error();
}else{
    echo "Connection to the db is successful";
}
