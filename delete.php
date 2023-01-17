<?php
include 'header.php';
?>
<?php
include 'conn.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

        $sql = "DELETE FROM student WHERE id={$id}";
        $result = mysqli_query($conn, $sql) or die("table connection faild");
        if($result){
            echo "delete successful";
        }
        header("Location:http://localhost/practice/index.php");
    }




        if(isset($_POST['single-delete'])){
            $sd =  $_POST['pasroll'];

            $sql1 = "DELETE FROM student WHERE id={$sd}";
            $result1 = mysqli_query($conn, $sql1) or die("table connection faild");
            if($result1){
            echo "delete successful";
            }
           header("Location:http://localhost/practice/index.php");
        }






       
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete page</title>
</head>
<body>
    <h1>delete page</h1>
</body>
</html>