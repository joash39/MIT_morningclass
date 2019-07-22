<?php include 'header.php'?>

<form action="index.php" method="POST">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">

    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password_1" name="password_1">

    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <div>
        <p>New to Trings shoe collection?
            <a href="signup.php">Create an account</a></p>

    </div>
    <button type="submit" class="btn btn-info btn-block" name="btn_signup">Login</button>

</form>
<?php include 'footer.php'?>