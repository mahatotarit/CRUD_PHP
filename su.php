<?php
include 'header.php';
?>

<?php
$id = $_POST["s-u-pasroll"];
$name = $_POST["s-u-name"];
$class = $_POST["s-u-class"];
$address = $_POST["s-u-address"];

include 'conn.php';

$sql = "UPDATE student SET name = '{$name}', class = '{$class}',address = '{$address}' WHERE id = {$id}";
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
    <title>su page</title>
</head>
<body>
    <h1>su page</h1>
</body>
</html>