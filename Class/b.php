<?php
if (isset($_COOKIE["id"]) && isset($_COOKIE["name"]))
{
    $userid = $_COOKIE["id"];
    $username = $_COOKIE["name"];
    echo "id 쿠키 : " . $userid."<br>";
    echo "name 쿠키 : " . $username."<br>";
}
else
{
    echo "쿠키가 생성되지 않았다!";
}

?>
