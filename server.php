<?php
session_start();
$errors = array(); 
$db = new mysqli("localhost", "root", "", "onlinelibrary");

if (isset($_POST['signButton'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(strlen($_POST["password"]) < 8){
          array_push($errors,"Password must be more than 8 characters!");
      }
    $user_check_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) { 
        // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
    }

    if (count($errors) == 0) {
        $name=$_POST['name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
       
        $query = "INSERT INTO users(Name, username, email, password, city, cardNumber , recommendations)VALUES ('$name','$username','$email','$password','','','')";
  	    mysqli_query($db, $query);
  	    $_SESSION['name'] = $name;
        $_SESSION['username'] = $username;
  	    header('location: home.php');
    }
}

if (isset($_POST['loginButton'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (count($errors) == 0) {
        if($username == 'admin' && $password == '12345678'){
            header('location: change.php');
        }
    else {
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	    $results = mysqli_query($db, $query);
  	    if (mysqli_num_rows($results) == 1) {
            $name = "SELECT Name FROM users WHERE username='$username'";
            $nameResult =  mysqli_query($db , $name);
            $user = mysqli_fetch_assoc($nameResult);
            $_SESSION['name'] = $user['Name'];
            $_SESSION['username'] = $username;
  	        header('location: home.php');
        }else {
            array_push($errors, "Wrong username/password combination");
  	}
  }
}
}

?>