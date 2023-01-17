<?php
include 'conn.php';
if(empty($_FILES['post-image']['name'])){
    $file_name = $_POST['old-image'];
}else{
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
        move_uploaded_file($file_tmp,"add-post-image-upload/".$target);
    }else{
        print_r ($errors);
        die();
    }
}


$title = $_POST['title'];
$desc = $_POST['desc'];
$cate = $_POST['cate'];      
//$image = $_POST['post-image'];
$post_id = $_POST['post_id'];

$sql = "UPDATE post SET title='{$title}',description='{$desc}',cate='{$cate}',img='$target' WHERE post_id={$post_id}" or die("query failed");
$result = mysqli_query($conn,$sql);
if($result){
    header("location:post.php");
}else{
    echo "update data failed";
}

?>