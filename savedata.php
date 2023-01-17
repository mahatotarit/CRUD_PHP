<?php
include 'header.php';
?>

<?php
$id = $_POST["id"];
$name = $_POST["name"];
$class = $_POST["class"];
$address = $_POST["address"];

include 'conn.php';

$sql = "INSERT INTO student(name,class,address) VALUES('{$name}','{$class}','{$address}')";
$result = mysqli_query($conn, $sql) or die("table connection faild");

header("Location:http://localhost/practice/index.php");
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>savedata page</title>
</head>
<body>
    <h1>savedata page</h1>
</body>
</html>