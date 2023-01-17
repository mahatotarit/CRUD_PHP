<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        input {
            outline: none;
            padding: 5px;
            
        }
        label{
            background-color: rgba(182, 182, 182, 0.836);
            padding: 5px;
            border-radius: 5px;
            display: inline-block;
            width: 5%;
        }
        #btn{
            background-color: rgb(0, 94, 255);
            color: white;
            border: none;
            border-radius: 3px;
            padding: 5px;
            width:15%;
            font-weight: bold;
            font-size: 01rem;
        }
    </style>
</head>

<body>
    <div style="text-align: center ;margin-top:5vh;">
       <h1 style="padding:10px;">Insert Data</h1>
        <form action="savedata.php" method="POST">
            <div><label for="id">Id</label>
                <input type="text" id="id" name="id">
            </div><br>

            <div><label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div><br>

            <div><label for="class">class</label>
                <input type="text" name="class" id="class">
            </div><br>
            <div><label for="address">address</label>
                <input type="text" id="address" name="address">
            </div><br>
            <div><input type="submit" id="btn" name="btn" value="submit"></div>
        </form>
    </div>
</body>

</html>