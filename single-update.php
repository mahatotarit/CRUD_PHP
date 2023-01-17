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
      #maindiv{
        text-align:center;
      }

    </style>
        <style>
        #form {
           
        }

        input {
            outline: none;
            padding: 5px;
            
        }
        label{
            background-color: rgba(182, 182, 182, 0.836);
            padding: 5px;
            border-radius: 5px;
            display: inline-block;
            width: 10%;
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
    <div id="maindiv">
        <h2>Update Page</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <div> <label for="name">Id No:</label><input type="text" name="roll"></div><br>
        <div><input type="submit" name="submit" value="View" id="btn"></div>
        </form><br>

        <?php

        include 'conn.php';

        if(isset($_POST['submit'])){

        $roll = $_POST['roll'];

        $query = "SELECT * FROM student WHERE id = '{$roll}'" or die("query false");

        $result = mysqli_query($conn,$query) or die("query faild");

        if(mysqli_num_rows($result)){
        ?>
        <form action="su.php" method="POST">
            <?php while($row = mysqli_fetch_assoc($result)){?>

             <div>
                <label for="name">Name</label>
                <input type="text" name="s-u-name" value="<?php echo $row['name'];?>">
                <input type="hidden" name="s-u-pasroll" value="<?php echo $roll;?>">
            </div>
             <br>
            <div>
                <label for="class">Class</label>
                <input type="text" name="s-u-class" value="<?php echo $row['class'];?>">
            </div>
             <br>
            <div>
                <label for="address">Address</label>
                <input type="text" name="s-u-address" value="<?php echo $row['address']; ?>">
            </div>
             <br>
            <div>
                <input type="submit" name="single-update" value="Update" id="btn">
            </div>

            <?php }?>
        </form>
        <?php      
        }
    }
        ?>
    </div>
</body>
</html>