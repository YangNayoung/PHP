$sql = "INSERT INTO movie_director (id, name, birth) 
VALUES (9,'제임스 카메론', '1954-08-16'); ";

if(mysqli_query($conn, $sql)) {
    echo "새 레코드가 성공적으로 생성되었습니다.";
} else {
    echo "생성 실패: ".mysqli_error($conn);
}
