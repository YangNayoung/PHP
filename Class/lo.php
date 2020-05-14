<?php
include "db_connect.php";

$name="KIM"; $id="kim"; $pass="1234";
if($id != "kim" || $pass != "1234"){
  echo "id 혹은 passwd가 틀렸습니다";
}
else{
  echo "{$id}님 환영합니다!<br></br>";
  setcookie("name", $name);
  $sql = "SELECT *FROM message_box where name='$name' and receive=0;
  $result = mysqli_query($conn, $sql);
  echo "New Messages <a href=sm.php>".mysqli_num_rows($result)."</a>";
}