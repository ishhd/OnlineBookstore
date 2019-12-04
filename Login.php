<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    
    <body id="page">
        <div id="box">
            <h1 id="main">Login</h1>
    <form action="" method="post">
        <?php include('errors.php'); ?>
        <br>
        Username  <input type="text" name="username" required><br><br>
        Password  <input type="password" name="password" required><br><br><br>
        You do not have an account? <a href="SignUp.php">SignUp</a> here 
        <br><br>
        <input type="submit" name="loginButton" value="LogIn">
        </form>    
    </div>
    </body>
</html>