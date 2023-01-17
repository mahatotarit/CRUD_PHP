<?php
include 'conn.php';

$id = $_GET['id'];

$sql1 = "SELECT * FROM post WHERE post_id= {$id}";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($result);

unlink("add-post-image-upload/" . $row['img']);

$sql = "DELETE FROM post WHERE post_id={$id}";
if(mysqli_query($conn,$sql)){
    header("location:post.php");
}else{
    echo "delete failed";
}
?>