<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP FORMS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-color: grey">
<header>
    <h1 style="background-color: orangered">Welcome to php forms</h1>
</header>
<div class="container">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" role="form" class="form-group">
       <label for="firstname">
           Firstname
       </label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter your firstname">
        <label for="lastname">
           Lastname
       </label>
        <input type="text" name="lastname" class="form-control" placeholder="Enter your lastname">
       <label for="email">
           Email
       </label>
        <input type="email" name="email" class="form-control" placeholder="Enter your Email">
       <label for="password">
           Password
       </label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password">
        <input type="submit" value="Register" class="btn btn-primary btn-block">
    </form>
</div>
</body>
</html>

<?php


if($_SERVER["REQUEST_METHOD"]== "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];



    if (empty($firstname) && empty($lastname) && empty($email) && empty($password)){
        echo "A field is empty";
    }else{
        echo $firstname."<br>";
        echo $lastname."<br>";
        echo $email."<br>";
        echo $password."<br>";
    }
}


































?>