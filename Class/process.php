<?php 
	$id=$_POST["myName"];
	$pw=$_POST["myPw"];
    if ($id=="kim" && $pw=="1234" ){
?>
<?=$id?> 님 로그인 성공
<a href="test.html?id=<?=$id?> ">게시판</a>
<?php
	}
 else
	echo " <script> alert('fail'); history.go(-1); </script>";		
?>