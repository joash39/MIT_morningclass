<?php




if(isset($_POST['btn_submit'])) {

    $id = $_POST['shoe_id'];
    $name = $_POST['shoe_name'];
    $size = $_POST['shoe_size'];
    $price = $_POST['shoe_price'];
    $image = $_POST['shoe_image'];
}
$sql = "SELECT `id`, `name`, `size`, `price`, `image` FROM `shoes` WHERE 1 LIMIT 1";
$results = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($results);


$sql = "INSERT INTO `shoes`(`id`, `name`, `size`, `price`, `image`) VALUES (null,'$name','$size','$price','$image')";
#save user into the database
mysqli_query($conn,$sql);

?>
