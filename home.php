<?php 
session_start();
$conn = new mysqli("localhost", "root", "", "onlinelibrary");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!isset($_SESSION['name'])) {
  	header('location: login.php');
  }

if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header("location: login.php");
  }
   
        
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
     <div class="topnav">
        <a href="home.php" id="menu">Home</a>   
        <a href="bookStore.php" id="menu">Bookstore</a>  
        <a href="about.php" id="menu">About</a>  
        <a href="cart.php" id="menu"><img src="carticon.jpg" style="width: 3%"></a>  
        <a href="home.php?logout='1'" id="logout">Logout</a>
</div> 
    <body>
        <div id="header">
        <br>
            <h1 id="phrase">A LAPTOP,<br>A GOOD BOOK,<br>AND YOU.</h1><br>
        </div>
        <?php  if (isset($_SESSION['name'])){ ?>
    	<h2 id="welcoming">Hello <strong><?php echo $_SESSION['name']; 
    ?> , I hope you enjoy your journey in our library </strong></h2>
        <?php } ?>
        <h2>This month's <br>RECOMMENDED BOOKS</h2>
<?php

$sql = "SELECT * FROM books WHERE recommended = '1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
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
        
if (isset($_POST['showBook'])){
    $book_id = $_GET["BookID"];
    $_SESSION['BookID'] = $book_id;
    header('location: bookInformation.php');
 
     }  
 ?>
       <form action="" method="POST"> 
        <div id="recommendations">
            <h2>Is there any book you want us to provide ? Just send us <br> we will see all your recomendations .. </h2>
            <textarea style="width: 50%"  placeholder="Any Book Recommendation? " name="textarea"></textarea><br><br>
            <input type="submit" name="send" value="Send">
        </div>
           </form>
        <?php  
        if (isset($_POST['send'])){
            $textarea = htmlentities($_POST['textarea']);
            $id = $_SESSION['username'];
            $query = "UPDATE `users` SET `recommendations`= '$textarea' WHERE `username`='$id' ";
            mysqli_query($conn, $query);
            echo '<script>alert("Your recommindation will be highly appreciated")</script>';  
                echo '<script>window.location="home.php"</script>';
        }
        
        ?>
        
    </body>
</html>