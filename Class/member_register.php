<?php
 $yr = substr($_POST["ju1"],0,2);
 
 if($_POST["ju2"] == "1" || $_POST["ju2"] == "2" )
 	 $year = 1900 + $yr;
 else
	 $year = 2000 + $yr;
 
  $age = date("Y", time()) - $year;
  echo "AGE : " .  $age;
  
  if ( $_POST["ju2"] == "1" || $_POST["ju2"] == "3" )
	  $gender = "M";
  else
	  $gender = "F";
  
?>
