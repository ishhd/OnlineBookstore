 <?php 
session_start();  
$conn = new mysqli("localhost", "root", "", "onlinelibrary");



if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header("location: login.php");
  }
  
?>
<!DOCTYPE html>  
 <html>  
      <head>  
        <title>Cart</title>  
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
 
                <div id = "cart">  
                    You Have bought :<br><br>
                     <table>  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>    
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"])){  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values){  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td> <?php echo $values["item_price"]; ?> RS</td>
                              <?php  
                                    $total = $total +  $values["item_price"];  
                               }  
                          ?> 
                              <td > <?php echo number_format($total); ?> RS</td>
                          </tr>  
                            
                          <?php  
                          }  
                          ?> 
                           </table> 
                    
                          <button onclick="location.href='confirm.php'">Confirm</button>
                    
                    
                    
                </div>
         </body>
</html>


