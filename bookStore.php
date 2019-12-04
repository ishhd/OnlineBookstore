<?php

session_start();
$conn = new mysqli("localhost", "root", "", "onlinelibrary");

if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header("location: login.php");
  }
if (isset($_POST['showBook'])){
    $book_id = $_GET["BookID"];
    $_SESSION['BookID'] = $book_id;
    header('location: bookInformation.php');
 
     } 
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Book Store</title>
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
 <section>
  <nav >
      <form action="bookStore.php" method="post" name=input>
      <P>Filter by Collection : </P><br>
  <input type="radio" name="cate" value="it">IT<br>
  <input type="radio" name="cate" value="cs">CS<br>
<input type="radio" name="cate" value="is">IS<br><br>          
   <input type="submit" value="Filter" name="sc"><br><br><br>     
      <p>Filter by Prices :</p>
  <input type="radio" name="price" value="low">30 - 50 RS<br>
  <input type="radio" name="price" value="moderate">50 - 100 RS<br>
  <input type="radio" name="price" value="high">more than 100<br><br>  
   <input type="submit" value="Filter" name="sf">  
   </form>
   
  </nav>
  
<article>
<?php

    
if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}

    
if(isset($_POST['sc'])){
$selected_radio=$_POST['cate'];
    
if($selected_radio=='it'){
$sql = "SELECT * FROM books WHERE Category='IT' ";
    $result= $conn->query($sql);
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<div id="books">
            <form action="home.php?action=add&BookID=<?php echo $row['BookID']; ?>" method="POST">
           <div id="book">
            <img src="<?php 
                echo $row['Image'];
                ?>" style="width: 120px"><br>
               <input id="showBook" type="submit" name="showBook" value="<?php echo $row['Name'];?>" >
                   
            </div>
            </form>
        </div>

   
<?php
    
  }
} 
 
}
elseif($selected_radio=='cs'){
$sql = "SELECT * FROM books WHERE Category='CS' ";
$result= $conn->query($sql);
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<div id="books">
            <form action="home.php?action=add&BookID=<?php echo $row['BookID']; ?>" method="POST">
           <div id="book">
            <img src="<?php 
                echo $row['Image'];
                ?>" style="width: 120px"><br>
               <input id="showBook" type="submit" name="showBook" value="<?php echo $row['Name'];?>" >
                   
            </div>
            </form>
        </div>

   
<?php
    
  }
} 
}
elseif($selected_radio=='is'){    
$sql = "SELECT * FROM books WHERE Category='IS' ";
$result= $conn->query($sql);


if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<div id="books">
            <form action="home.php?action=add&BookID=<?php echo $row['BookID']; ?>" method="POST">
           <div id="book">
            <img src="<?php 
                echo $row['Image'];
                ?>" style="width: 120px"><br>
               <input id="showBook" type="submit" name="showBook" value="<?php echo $row['Name'];?>" >
                   
            </div>
            </form>
        </div>


<?php
     }
} 
}
}

    
elseif(isset($_POST['sf'])){
$selected_radio=$_POST['price'];
    
if($selected_radio=='low'){
$sql = "SELECT * FROM books WHERE Price >= '30' AND Price <= '50'  ";
$result= $conn->query($sql);


if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<div id="books">
            <form action="home.php?action=add&BookID=<?php echo $row['BookID']; ?>" method="POST">
           <div id="book">
            <img src="<?php 
                echo $row['Image'];
                ?>" style="width: 120px"><br>
               <input id="showBook" type="submit" name="showBook" value="<?php echo $row['Name'];?>" >
                   
            </div>
            </form>
        </div>

<?php
    }
} 
}
elseif($selected_radio=='moderate'){
$sql = "SELECT * FROM books WHERE Price >= '50' AND Price <= '100'";
$result= $conn->query($sql);
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<div id="books">
            <form action="home.php?action=add&BookID=<?php echo $row['BookID']; ?>" method="POST">
           <div id="book">
            <img src="<?php 
                echo $row['Image'];
                ?>" style="width: 120px"><br>
               <input id="showBook" type="submit" name="showBook" value="<?php echo $row['Name'];?>" >
                   
            </div>
            </form>
        </div>

    
<?php
    
  }
} 
}
elseif($selected_radio=='high'){    
$sql = "SELECT * FROM books WHERE Price  >= '100' ";
$result= $conn->query($sql);


if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<div id="books">
<form action="home.php?action=add&BookID=<?php echo $row['BookID']; ?>" method="POST">
           <div id="book">
            <img src="<?php 
                echo $row['Image'];
                ?>" style="width: 120px"><br>
               <input id="showBook" type="submit" name="showBook" value="<?php echo $row['Name'];?>" >
                   
            </div>
            </form>         
</div>
<?php
     }
} 
}
}
else{ 
$sql = "SELECT * FROM books ";
$result= $conn->query($sql);


if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<div id="books">
<form action="home.php?action=add&BookID=<?php echo $row['BookID']; ?>" method="POST">
           <div id="book">
            <img src="<?php 
                echo $row['Image'];
                ?>" style="width: 120px"><br>
               <input id="showBook" type="submit" name="showBook" value="<?php echo $row['Name'];?>" >
                   
            </div>
            </form>         
</div>
    
    <?php

            }
        } 
    }

 
    
?>   
 
     </article>  
</section>
</body>
</html>