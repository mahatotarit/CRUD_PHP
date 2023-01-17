
<?php
include 'conn.php';
if(isset($_POST['register-btn'])){
$name = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO user(name,username,email,password) VALUES('{$name}','{$username}','{$email}','{$password}')";
$result = mysqli_query($conn, $sql) or die("table connection faild");

            if($result){
                session_start();
             $_SESSION['user'] = $username;
             $_SESSION['password'] = $password;

             header("Location:index.php");
            }

mysqli_close($conn);
}
?>