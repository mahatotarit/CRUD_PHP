<?php
include 'header.php';
?>
<?php
$id = $_POST["id"];
$name = $_POST["name"];
$class = $_POST["class"];
$address = $_POST["address"];

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
    <title>edit page</title>
</head>
<body>
    <h1> edit page</h1>
</body>
</html>