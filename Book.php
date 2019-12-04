<!DOCTYPE html >
<html>
<head> 
<link rel="stylesheet" href="design.css">
    </head>
<body>
    <div id="body" style="  top: 90%;" >
<?php
session_start();
$conn = new mysqli("localhost", "root", "", "onlinelibrary");

  if(isset($_GET['BookID'])){
 $book=$_GET['BookID'];
 $query = "SELECT * FROM books WHERE BookID=$book" ;
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
}

		?>
    
		<div>
            <img src="<?php 
                echo $row["Image"];?>  " style="width:150px ; "><br> 
            
            
		<form action=" " method="post" >
            <div>
                <p><b>Book Name:</b> 
         <input  size="50" type="text" name="BookName" value=" <?php
                 echo $row["Name"];?>" > 
                </div>
           <br> 
           
            <p> Description:</p>
             <br> 
              <textarea type="text" name=" description"  style="width:700px; height:200px; "  >  <?php
		echo $row["Description"];?> </textarea>
		
		
          <br>
            
            <p> Price:  <input type="text" name="x" value=" <?php
		echo $row["Price"]; ?> RS"  >
            
            <div>
         <p> Recommended this month:
                <?php
		echo $row["recommended"]; ?> <br> <p><b>New recommended this month:</b> 
       (1) yes <input type="checkbox" name="recommended" value= "1">
       (0) No <input type="checkbox" name="recommended" value= "0"  checked> 
        
                
         </div>
            
            <br><br>
           <table> 
               <tr> 
            
           <td>  <input id="butoon" type="submit" name="submit" value="Done" ></td>
           <td> <input id="butoon" type="reset"></td>
                   </tr>
                           </table>

            </form>
            <form  action="change.php"> <input id="butoon" type="submit" name="back" value="Back" ></form>
		</div>
 
	
<?php
         if(isset($_POST['submit'])){ 
        $BookName =$_POST['BookName'];
        $description=$_POST['description'];
        $price=$_POST['x'];
        $recommended=$_POST['recommended'];
        
         $sql = "UPDATE books SET Name='$BookName' ,Price='$price', recommended='$recommended', Description='$description' WHERE BookID='$book' ";
         
             
      
    if (mysqli_query($conn, $sql)) {
 echo " ";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  $conn->close();       

         }
 
 ?>  
        
    </div>
</body>

</html>