<?php
#Declaring empty variables to store data from the form
$firstname = $lastname = $email = $password = "";
#Declaring empty variables to store error msgs from  the form
$firstnameErr = $lastnameErr = $emailErr = $passwordErr = "";
$success_msg = $msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
//    Grabbing data from the form
//    cleaning data using clean_data() function
    $firstname = clean_data($_POST['firstname']) ;
    $lastname = clean_data($_POST["lastname"]);
    $email = clean_data($_POST['email']);
    $password = $_POST["password"];
    if ($_SERVER["REQUEST_METHOD"] == 'POST'){
        if (empty($firstname)){
            $firstnameErr = "Please enter First name";
        }else{
            $firstname = clean_data($_POST["firstname"]);
        }
        if (empty($lastname)){
            $lastnameErr = "Please enter last name";
        }else{
            $lastname = clean_data($_POST["lastname"]);
        }
        if (empty($email)){
            $emailErr = "Please enter email";
        }else{
            $email = clean_data($_POST["email"]);
        }
        if (empty($password)){
            $passwordErr = "Please enter password";
        }else{
            $password = $_POST["password"];
            $msg = check_password($password);
        }
    }}
function clean_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
#create a function
#function takes an argument(password)
#check no of character  !< 8 password > 8
#strength of the password
#speceial chars
function check_password($pass_data){
    #grab the number of characters
    $num_chars = strlen($pass_data);
    #check if the number of characters is less than or equal 8
    if ($num_chars >= 8 && $num_chars <= 12){
        $success_msg = "Strong password";
        return $success_msg;
    }elseif ($num_chars < 8 ){
        $passwordErr = "Weak password";
        return $passwordErr;
    }elseif(strpos($pass_data, '@') != "@" ){
        $passwordErr = "Password should contain special character '@' ";
        return $passwordErr;
    }
}
?>
<!DOCTYPE html>
<html lan="en">
<head>
    <meta charset="utf-8">
    <title>Php Forms</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .error{
            color:orangered;
        }
    </style>
</head>
<body>
<header>
    <h1 style="background-color: orangered">Welcome to php forms</h1>
</header>
<div class="container">
    <div class="justify-content-center">
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" role="form" class="form-group">
            <label for="firstname">
                Firstname
            </label>
            <span class="error">*  <?php echo $firstnameErr;?></span>
            <input type="text" name="firstname" class="form-control" placeholder="Enter First name">
            <label for="lastname">
                Lastname
            </label>
            <span class="error">*  <?php echo $lastnameErr;?></span>
            <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
            <label for="email">
                Email
            </label>
            <span class="error">*  <?php echo $emailErr;?></span>
            <input type="email" name="email" class="form-control" placeholder="Enter email">

            <label for="password">
                Password
            </label>
            <span class="error">*  <?php echo $passwordErr;?></span>
            <span class="error">*  <?php echo $success_msg;?></span>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
            <input type="submit" value="Register" class="btn btn-primary btn-block">
        </form>
    </div>
</div>
</body>
</html>