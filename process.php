<?php
$sql = "INSERT INTO topic(title,description,author,created)VALUES('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";
echo $sql;
// now() -> mysql의 함수 : created(Datetime) => 자동으로 now()의 위치에
// 현재 시간이 들어온다(저장된다)
$conn = mysqli_connect('localhost','root','wls120239');
mysqli_select_db($conn,'opentutorials');
$result = mysqli_query($conn,$sql);

header('Location:http://localhost/db/index.php');
?>
