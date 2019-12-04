
<html>
    <title>Confirm Information</title>
<style>
body {
	 background-image:url(library.jpg);
}
</style>
<body>

<div id = "content" style="  text-align: center;
    background-color: #92959ab5;
    margin: 20px;
    border-radius: 10px;
    padding: 20px;
    font-family: Consolas;
    font-size: 20px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%); 
    width: 70%;">
	<form action ="cart.php">
<input type="submit" name="sumitbutton" value="Go back" style="position:relative;  width: 125px; top:10px; right: 40%;">
</form>
    <FORM ACTION="" METHOD="POST" >
<h1 style=" font-family:Freestyle Script;
    font-size: 60px;" > Confirm Information </h1>
<br>
 City : 
<select name="choice">
  <option value="Riyadh">Riyadh</option>
  <option value="Jeddah">Jeddah</option>
  <option value="Makkah">Makkah</option>
  <option value="Dammam">Dammam</option>
  <option value="Abha">Abha</option>
</select>
<br>
<br>
 Card Number : <input type="text" name="CardNumber"> 
<br>
<br>
<input type="submit" name="sumitbutton" value="Checkout"style=" width: 125px;" > 
<?php
session_start();
   
$db = new mysqli("localhost","root","","onlinelibrary") ;
if (isset($_POST['sumitbutton'])){
    $choice = $_POST['choice'];
    $cardNumber = $_POST['CardNumber'];
    $username = $_SESSION['username'];
    $sql = "UPDATE users SET city = '$choice' , cardNumber = '$cardNumber' WHERE username = '$username' ";

mysqli_query($db,$sql);
    unset($_SESSION['shopping_cart']);
    header("location: done.html");
}

?>


</FORM>
    </div>
</body>
</html>
