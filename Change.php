<!DOCTYPE html >
<html> 
    <head>
    <link rel="stylesheet" type="text/css" href="design.css">
        <br> 
        <br> 
    </head>
  <body>
     <div id="log">
        <a  href="home.php?logout='1'" id="menu"> Logout</a>
</div> 
     <div id="topdiv">
         
      <b> <p id="ptop"> Choose book for update data or add a new book </b>
      
      </div>
     <div id="change">
    <?php
$conn = new mysqli("localhost", "root", "", "onlinelibrary");
$sql = "SELECT * FROM books ";
$result= $conn->query($sql);
    
    while($row = $result->fetch_assoc()) {
       ?> 
    
        <div id="books">
            <form action="book.php?action=add&BookID=<?php echo $row['BookID']; ?>" method="POST">
           <div id="book">
               <div id ="bookContent">
            <img src="<?php 
                echo $row['Image'];
                ?>" style="width:50% ; "><br>
               <input id="showBook" style=" font-family: Consolas; 
" type="submit" name="showBook" value="<?php echo $row['Name'];?> " >
                   </div>
            </div>
            </form>
             
        </div>
            
        <?php   
    }
 
        
if (isset($_POST['showBook'])){
    $book_id = $_GET["BookID"];
    $_SESSION['BookID'] = $book_id;
    header('location:Book.php');
 
     }  
 ?>
		
	<?php
         if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header("location: login.php");
  }
    if (mysqli_query($conn, $sql)) {
 echo "";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	$conn->close();
	?>
  <div id="div"> 
        <form action="admin.php" >

        <input type="image" src="++.png" style="width:10%">
        </form>
</div>
      </div>
    </body>
</html>