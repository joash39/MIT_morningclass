<?php include 'header.php';?>
<?php

session_start();
include 'config.php';
if (!isset($_SESSION['email']) && !isset($_SESSION['loggedin'])) {
    header('location:signup.php');
    exit();
}


?>

<div class='container'>
  <h2 style='text-align: center'>One of the finest shoes you can have</h2>         
  <table class='table table-striped'>
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Size</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php
#create a query/instruction to the db
$Sql = "SELECT * FROM `shoes`";
#fetch data from the database by issueing the query
#the data will be stored in the variable '$fetched_results'
$fetched_results = mysqli_query($conn,$Sql);
#To get individual data use a loop (while loop)
#convert fetched data into an associative array(key/value)
while($row = mysqli_fetch_assoc($fetched_results)){
    # for each record in the while loop grab the data in thier
    #respective columns
    extract($row);
    echo "

    <tr>
            
            <td>$id</td>
            <td>$name</td>
            <td>$size</td>
            <td>$price</td>
            <td>$image</td>
            <td><a href='delete.php?shoe_id=$id' class='btn btn-danger'>Delete</a>
            <a href='update.php?shoe_id=$id&u_shoename=$name&u_shoesize=$size&u_shoeprice=$price&image=$image' class='btn btn-info'>Update</a>
            </td>
            
           </tr>";
}
?>

    </tbody>
  </table>
</div>





<?php include 'footer.php';?>

