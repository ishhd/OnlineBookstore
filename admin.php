<!DOCTYPE html>
<html> 
    <title>Admin </title>
    <head>
    <link rel="stylesheet" type="text/css" href="design.css">
   
    </head>
     
    <body>
  
   
        <div id="body"> 
                 <form action="" method="post" enctype="multipart/form-data"  oninput="price.value=parseInt(a.value)  "> 
    <div id="Upimages"> 
        <div> 
        <input type="hidden" name="size " value="10000000">
        </div>
        <p> Put the URL image:  </p>
        <input type="text" name="image" accept="image/* " value=" ">
                
    
        </div>
        <br> 
        <table> 
    <div> 
             <tr> 
      <td><div> 
           <p>  Description:</p> <br>
        <textarea type="text" name=" description" > </textarea>
       </div> </td>
   
        <td><div> <pre> 
        
        </pre> 
       
           <p>  Book Name: 
        <input type="text" name="BookName" > <br> 
        <p> Price:
            <input type="range" id="a" name="x" >
             =
            <output name="price" for="a "></output>  RS 
            
       </div></td>
                 
                 </tr>
        </div>
        <br> 
           <tr> 
        
       <td><div>
            <p>Under wich collection:  
  <input type="radio" name="collection" value="IT" checked >  IT
  <input type="radio" name="collection" value="IS" >  IS 
  <input type="radio" name="collection" value="CS" >  CS  
           </p>
     </div></td> 
               <td> 
            
               </td>
       
     <td><div>
         <p> Recommended this month:  
        <p> yes  <input type="checkbox" name="recommended" value= "1">
        <p> No  <input type="checkbox" name="recommended" value= "0" checked>  
           
    
         
         </div></td> 
               
       </tr> 
            
            <tr> 
              <td> </td>  
            </tr>
             <tr>
            
    <td> <div> 
          
        <input id="butoon" type="submit" name="Submit" value="Done" >
        <input id="butoon" type="reset">

        </div></td></tr>
            <td> </td>
            <td> </td>
            <td>   
               
</td>
     </table> 
                       </form>
             <form action="change.php"> 
                <input id="butoon" type="submit" name="Back" value="Back" ></form>
            </div>
      
        
        <?php
        $smg= " ";
    if(isset($_POST['Submit'])){ 
     
     $bd= new mysqli("localhost", "root", "","onlinelibrary");
      
        $image= $_POST['image'];  
        $description=$_POST['description'];
        $BookName=$_POST['BookName'];
        $collection=$_POST['collection'];
        $price=$_POST['x'];
        $recommended=$_POST['recommended'];

   

     $sql = "INSERT INTO books(Name, Price, Description, Category, recommended, Image) VALUES ('$BookName', '$price' ,'$description' , '$collection', '$recommended' , '$image')";
        
  if (mysqli_query($bd, $sql)) {
 echo "";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($bd);
}
         
     
    mysqli_close($bd);}
    
?>


    </body>
   
</html>


