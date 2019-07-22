<?php
session_status();
$email=$password_1='';
if (isset($_POST['signup'])){
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    if(empty($email)){
        header('location:signup.php?e_error');
        exit();
    }else{
        $email = $email;
    }

}