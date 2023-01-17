<?php
include 'conn.php';
if(isset($_FILES['post-image'])){
    $errors = array();
    
    $file_name = $_FILES['post-image']['name'];
    $file_size = $_FILES['post-image']['size'];
    $file_tmp = $_FILES['post-image']['tmp_name'];
    $file_type = $_FILES['post-image']['type'];

    $pass = explode('.',$file_name);
    $file_ext = strtolower(end($pass));

    $extensions = array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions) === false){
        $errors[] = "this extension file not allowed, please chosse png,jpeg,jpg";
    }
    if($file_size > 2097152){
        $errors[] = "file size must be 2 mb";
    }
    $target = time() . $file_name;

    if(empty($errors) == true){
        move_uploaded_file($file_tmp,"add-post-image-upload/" . $target);
    }else{
        print_r ($errors);
        die();
    }
}
session_start();
$title = $_POST['title'];
$desc = $_POST['desc'];
$cate = $_POST['cate'];
$date = date("d M Y");     
$author = $_SESSION['user'];
//$postimage = $_POST['post-image'];
$btn = $_POST['btn'];

$sql = "INSERT INTO post(title,description,cate,date,author,img) VALUES('{$title}','{$desc}','{$cate}','{$date}','{$author}','$target')";

if(mysqli_query($conn,$sql)){
    header("Location:index.php");
}else{
    echo "Query failed"; 
}
?>