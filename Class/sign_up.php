<?php
	$host = "127.0.0.1";
	$user = "root";
	$pw = "";
	$dbName="php"
	$conn = mysqli_connect($host,$user,$pw,$dbName);
	
	if(!$conn){
		die("Connection error: ".mysqli_connect_errno());
	}
	
	$user_id = $_POST['id'];
	$user_pw = $_POST['pw'];
	$user_age = $_POST['age'];
	
	$sql = "INSERT INTO members(id,pw,age)VALUES "."('{$user_id}','{$user_pw}',{$user_age})";
	if(mysqli_query($conn,$sql)){
		echo "성공";
	}else{
		echo "실패".mysqli_error($conn);
	}
?>