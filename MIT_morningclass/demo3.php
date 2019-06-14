<?php
//Validating email and web URL

$name = $_POST["myname"];
$email = $_POST["email"];
$url = $_POST["url"];
$imgurl = $_POST["imgurl"];

if (empty($name)){
    $nameError = "Field is empty";
    echo $nameError;
}else{
   if(!preg_match("/^[a-zA-Z]*$/", $name)){
       $nameError = "entry letters and white space allowed";
   }else{
       echo "your name is $name";
   }
}

if (empty($email)){
    $emaiError = "Email cannot be empty";
    echo $emaiError;
}else{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emaiError = "Invalid email format";
        echo $emaiError;
    }else{
        echo "Email is valid";
    }
}

if (empty($url)) {
    $urlError = "URL cannot be empty";
    echo $urlError;
}else {
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
        $urlError = "Invalid URL";
        echo $urlError;
    } else {
        echo "URL is valid";
    }
}

if (empty($imgurl)) {
    $imgurlError = "Email cannot be empty";
    echo $imgurlError;
}else {
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $imgurl)) {
        $imgurlError = "Invalid imgurl";
        echo $imgurlError;
    } else {
        return $imgurl;
    }
}







?>
<html>
   <head>
       <title>Php name, Email and URL validation</title>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </head>
   <body>
  <div style="justify-content: center">
      <img src="<?php echo $_POST['imgurl']?>" alt="" style="height: 300px;" >
      <form action="demo3.php" method="post">
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="myname" class="form_group">
          </div>

          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form_group">
          </div>

          <div class="form-group">
              <label for="url">Web url</label>
              <input type="text" name="url" class="form_group">

              <div class="form-group">

          <div class="form-group">
                <label for="imgurl">Image url</label>
                      <input type="text" name="imgurl" class="form_group">

                      <div class="form-group">
                  <button name="submit" class="btn btn-primary">Submit</button>
              </div>
  </div>

   </form>
   </body>
</html>
