<?php
if(isset($_POST['btn_update'])) {
    #form validation
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }

    if (isset($_POST['name'])) {
        $name = $_POST['shoename'];
    } else {
        $name_err = "shoename is required";
    };

    if (isset($_POST['shoesize'])) {
        $price = $_POST['shoesize'];
    } else {
        $price_err = "shoesize is required";
    };

    if (isset($_POST['shoeprice'])) {
        $price = $_POST['shoeprice'];
    } else {
        $price_err = "shoeprice is required";
    };

    if (isset($_POST['image'])) {
        $image = $_POST['image'];
    } else {
        $image_err = "image is required";
    };
    include 'config.php';
    $sql = "UPDATE `assignment` SET `name`='$name',`lastname`='$lastname',`email`='$email' WHERE id=$id";
    #save data into db
    mysqli_query($conn,$sql);
    header("location:index.php");
}
?>