<?php

if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header("location: login.php");
  }


?>
<!DOCTYPE html>
<html>

 <head>
        <title>book Store</title>
        <link rel="stylesheet" type="text/css" href="Style2.css">
    </head>
     <div class="topnav">
        <a href="home.php">Home</a>   
        <a href="bookStore.php">Bookstore</a>  
        <a href="about.php">About</a>  
        <a href="cart.php"><img src="carticon.jpg" style="width: 3%"></a>
         <a href="home.php?logout='1'" id = "logout">Logout</a>
</div>
    

    
    
    
    
    <body>

        
<article3>
 <h>The store</h>       
<p> We provide you with an electronic library specializing in new and exclusive computer science books in <br>all computer magazines with different topics and interests at reasonable prices.</p><br>
        
<p> We provide the best types of books and ensure the quality of the cover and papers</p><br> 
      
<p>We deliver fast delivery in record time while maintaining the quality and safety of products</p> 
     
 
        
</article3>       
        
    </body>

