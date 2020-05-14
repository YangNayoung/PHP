<?php

 if($_POST["id"] == "kim" && $_POST["pw"] == "0000" )
 {
	 if ( $_POST["save_id"])
	 
		 $id = setcookie("id",$_POST["id"]);
 
  echo "<script> location.href = 'login_ok.php' </script>";
 }
 else
	 echo " <script> alert('fail'); history.go(-1); </script>";
?>
