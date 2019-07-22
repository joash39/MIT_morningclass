<?php include 'header.php'?>
<?php
include 'config.php';
if(isset($_GET['shoe_id'])){
    $id = $_GET['shoe_id'];
    $name = $_GET['u_shoename'];
    $size = $_GET['u_shoesize'];
    $price = $_GET['u_shoeprice'];
    $image = $_GET['u_image'];
}

?>



    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="update_handler.php" method="post">
                <input type="text" name="id" hidden value="<?php echo $id ;?>">
                <div class="form-group">
                    <label for="name">shoe name:</label>
                    <input type="text" name="shoename" class="form-control" id="shoename" value="<?php echo $name ;?>">
                </div>
                <div class="form-group">
                    <label for="shoesize">shoe size:</label>
                    <input type="text" name="shoesize" class="form-control" id="shoesize" value="<?php echo $size ;?>" >
                </div>
                <div class="form-group">
                    <label for="shoeprice">shoe price:</label>
                    <input type="number" name="shoeprice" class="form-control" id="shoeprice" value="<?php echo $price ;?>">
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="image" name="image" class="form-control" id="image" value="<?php echo $image ;?>">
                </div>

                <button type="submit" name="btn_update" class="btn btn-default">Update</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>








<?php include 'footer.php'?>