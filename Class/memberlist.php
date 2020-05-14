<?php
include "db_connect.php"

$sql = "SELECT * FROM members";
$result = mysqli_query($conn,$sql);
echo "id " . "   ". " name" . " <br/>";
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)){
        echo "$row[id] ";
        echo "<a href = 'detail_view.php?num=$row[num]'> $row[name] </a>";
        echo " <br/>";
    }
}
else {
    echo "저장된 데이터가 없습니다.";
}

mysqli_close($con);
?>