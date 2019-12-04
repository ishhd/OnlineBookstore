<?php 
include('server.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    
    <body id="page">
        <div id="box">
            <h1 id="main">SignUp</h1>
    <form action="" method="post">
        <?php include('errors.php'); ?>
        <br>
        Name  <input type="text" name="name" required><br><br>
        Username  <input type="text" name="username" required><br>
        <br>
        Email  <input type="email" name="email" required><br><br>
        Password  <input type="password" name="password" required><br><br><br>
        You already have an account? <a href="Login.php">Login</a> here 
        <br><br>
        <input type="submit" name="signButton" value="Sign Up">
    </form>
            </div>
    </body>
</html>