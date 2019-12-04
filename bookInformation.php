<!DOCTYPE html >
<html>
<head> 
<style>
body {
	 background-image:url("library.jpg");
}
</style>
<body>
<?php
session_start();
$conn = new mysqli("localhost", "root", "", "onlinelibrary");
    
$book = $_SESSION['BookID'];
$sql = " SELECT * FROM books WHERE BookID = $book ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
    $_SESSION['bookName']=$row["Name"];
    $_SESSION['bookPrice']=$row["Price"];
		?>
		<div id = "content" style = "font-family: Consolas; font-size: 20px; position: absolute; left: 55%; top: 70%; transform: translate(-50%, -50%); width: 70%; background-color: #92959ab5; border-radius: 10px; padding: 50px;" >
		<FORM ACTION="bookInformation.php?action=add&bookID=<?php echo $row['BookID']; ?>" METHOD="POST" NAME="namee">
            
            <input type="submit" name="add_to_cart" value="Add to Cart">
			<input type="submit" name="back" value="Back">
            <br>
            <br>
            <div id="bookName" style= " text-align: center; ">
		<h1 >
		<?php
		echo $row["Name"]; ?>
		</h1>
                </div>
		<img src="<?php 
                echo $row['Image'];
                ?>" style="width=200px">
		
		<h1 id="bookName">Description</h1>
		<p><strong><?php
		echo $row["Description"]; ?></strong></p>
		
		<h2>Price : <?php
		echo $row["Price"]; ?> RS</h2>
            <br><br>
            <div id="bookName">
		
			
            </div>
		
            </FORM>
            
		</div>

	<?php
}
    
	if(isset($_POST["add_to_cart"])){  
      if(isset($_SESSION["shopping_cart"])){  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id"); 
          $row = $result->fetch_assoc();
           
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["BookID"],  
                     'item_name'               =>     $_SESSION['bookName'],  
                     'item_price'          =>     $_SESSION['bookPrice']
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
               
                
           
      }  
      else {  
           $item_array = array(  
                'item_id'               =>     $_GET["BookID"],  
                'item_name'             =>     $_SESSION['bookName'],  
                'item_price'            =>     $_SESSION['bookPrice']
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }
        echo '<script>alert("Item has Added")</script>';  
                echo '<script>window.location="bookInformation.php"</script>';
   
        
 }
    if (isset($_POST['back'])){
        header("location:bookStore.php");
    }
 
 
 ?>  
</body>
</head>
</html>