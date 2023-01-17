<?php
session_start();

if(isset($_SESSION["user"])){
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #alert {
            text-align: center;
            color: green;
        }

        .main-div {
            text-align: center;
        }

        input {
            outline: none;
        }

        #submit {
            background-color: rgb(51, 201, 255);
            border: none;
            border-radius: 5px;
            width: 15vw;
            padding: 5px 00px 5px 00px;
            font-weight: bold;
            font-size: 17px;
            color: black;
        }

        .two-input {
            width: 25vw;
            height: 20px;
            font-weight: bold;
        }

        label {
            font-weight: bold;
            display: inline-block;
            width: 5vw;
        }

        form {
            background-color: rgb(236, 236, 236);
            padding: 10vh;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 1px 1px 5px black;
            border: 3px inset;
        }
    </style>
</head>

<body>
    <div id="alert"></div>
    <div class="main-div">
        <h1>Login Page</h1>
        <form action="login.php" method="POST">
            <label for="login-username">User Name</label>
            <input type="text" vlaue="" class="two-input" id="username" name="login-username"><br><br>

            <label for="username">Password</label>
            <input type="text"class="two-input" id="password" name="password"><br><br>

            <input type="submit" id="submit" name="login-btn" value="login-btn"><br>
            <small id="small"></small>

            <div style=" padding:5px;margin-top:60px;">Create An Account <a href="register.php"
                    style="text-decoration:none;">Click</a></div>

            <?php
              if(isset($_POST['login-btn'])){
              include 'conn.php';
              $username = $_POST['login-username'];
              $password = $_POST['password'];

             $sql = "SELECT * FROM user WHERE username='{$username}' AND password='{$password}'" or die('query faild');
             $result = mysqli_query($conn,$sql) or die("connection  failed");

             if(mysqli_num_rows($result) > 0 ){
             while($row = mysqli_fetch_assoc($result)){

             $_SESSION['user'] = $row['username'];
             $_SESSION['password'] = $row['password'];

            header("Location:index.php");
         }
      }else{
        echo "<h4 style='color:red;'>This User Name Is Not Register</h4>";
      }
  }
?>
        </form>

    </div>
</body>

</html>