<?php 
	$id=$_GET["myName"];
	$pw=$_GET["myPw"];
    if ($id=="kim" && $pw=="1234" )
		echo $id ." 님 로그인 성공";


	else
		echo " Check PASSWORD";		
?>