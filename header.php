<?php
session_start();

if(!isset($_SESSION["user"])){
    header("Location:login.php");

    echo $_SESSION["user"];
    echo $_SESSION["password"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        *{
            margin:00px;
            padding:00px;
            box-sizing:00px;
        }
     #headerdiv{
        background-color:rgb(0, 183, 255);
        padding:5px;
        color:black;
        font-weight:bold;
        flex-direction:row;
        display:flex;
     }
     h5{
        display:inline-block;
        margin-left:auto;
        text-align:center;
        display:flex;
        justify-content:center ;
        align-items:center;
        color:white;
     }
     a{
        text-decoration: none;
            color: black;
            font-weight: bold;
     }
    </style>
</head>
<body>
    <div id="headerdiv">
        <h2><a href="front-page.php">CRUD</a></h2>
        <h5>
           Hi <?php
           
           if(isset($_SESSION["user"])){
            echo $_SESSION["user"];
           }?>
           <div style=" text-align:right;">
            <button style="border:none; margin:00px 00px 00px 5px;"> <a
                    style=" display:inline-block;color:black;padding:1px; font-weight:bold;"
                    href="logout.php">Logout</a></button>
          </div>  
        </h5>
    </div>
</body>
</html>