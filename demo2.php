

<?php
#Declaring empty variables to store data from the form
$firstname = $lastname = $email = $password = "";

$firstnameErr =$lastnameErr = $emailErr = $passwordErr = "";
#Declaring empty variables to store error message from the form



if($_SERVER["REQUEST_METHOD"]== "POST") {
    $firstname = clean_data($_POST)['firstname'];
    $lastname = clean_data($_POST)['lastname'];
    $email = clean_data($_POST)['email'];
    $password = $_POST['password'];

}


//  Grabbing data from the form
//  cleaning data using clean data{} function


$success_msg = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    if (empty($firstname)){
    $firstnameErr = 'Please enter Firstname';
    }else{
        $firstname = clean_data($_POST["firstname"]);
    }
    if (empty($lastname)){
        $lastnameErr = 'Please enter Lastname';
    }else{
        $lastname = clean_data($_POST["lastname"]);
    }
    if (empty($email)){
        $emailErr = 'Please enter email';
    }else{
        $email = clean_data($_POST["email"]);
    }
    if (empty($password)){
        $passwordErr = 'Please enter password';
    }else{
        $password = $_POST["password"];
        $msg = check_password($password);
    }
}


function clean_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;

}
#create a function
#function takes an argument(password)
#check number of characters password sould be !< 8 and > 8
#strength of the password
#special characters

function check_password($pass_data){
#grab the number of characters

    $num_chars = strlen($pass_data);

    #check if the number of characters is less than or equal to 8
    if ($num_chars >= 8 && $num_chars <= 12 ){
        $success_msg = "strong password";
        return $success_msg;
    }elseif($num_chars < 8 ){
        $passwordErr = "Weak password";
        return $passwordErr;
    }elseif(strpos($pass_data, "@") != "@"){
        $passwordErr = "password should contain special character @";
        return $passwordErr;
    }


}
check_password("pass1234");


?>
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
    <style>
        .error   </style>
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
        <span class="error">* <?php echo $firstnameErr ; ?></span>
        <input type="text" name="firstname" class="form-control" placeholder="Enter your firstname">
        <label for="lastname">
            Lastname
        </label>
        <span class="error">* <?php echo $lastnameErr ; ?></span>
        <input type="text" name="lastname" class="form-control" placeholder="Enter your lastname">
        <label for="email">
            Email
        </label>
        <span class="error">* <?php echo $emailErr ; ?></span>
        <input type="email" name="email" class="form-control" placeholder="Enter your Email">
        <label for="password">
            Password
        </label>
        <span class="error">* <?php echo $passwordErr ; ?></span>
        <span class="error">* <?php echo $success_msg ; ?></span>
        <input type="password" name="password" class="form-control" placeholder="Enter your password">
        <input type="submit" value="Register" class="btn btn-primary btn-block">
    </form>
</div>
</body>
</html>
