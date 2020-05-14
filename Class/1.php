<?php
$userid="";
if (isset($_COOKIE["id"]) )
{
    $userid = $_COOKIE["id"];           
}
?>

<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
 </head>
 <body>

 <form method="POST" action="sign_up.php">
  ID <input type="text" name="id"> <br>
  pw <input type="password" name="pw" ><br>
  age <input type="age" name="age">
   <input type="submit" value="확인">
 </form>

 </body>
</html>
