<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data</title>
    <style>
        input{
            outline:none;
        }
    </style>
</head>
<body>
    <div style="text-align:center; margin-top:10vh;">
        <form action="<?php$_server['PHP_SELF']; ?>" method="POST">
            <div>
            <label for="roll">Roll</label>
                <input type="text" name="roll" id="roll">
            </div><br>
            <div>
                <input type="submit" name="show" id="show">
            </div>
        </form><br>
           <?php
           if(isset($_POST['show'])){
           
            $id = $_POST["roll"];
            include 'conn.php';

            $sql = "SELECT * FROM student WHERE id = {$id}";
            $result = mysqli_query($conn, $sql) or die("table connection faild");
            if(mysqli_num_rows($result) > 0){
               while($row = mysqli_fetch_assoc($result)){
           ?>
        
        <form action="edit.php" method="POST">
            <div>
            <label for="name">name</label>
            <input type="text" vlaue="<?php echo $row['name']; ?>" name="name" id="name">
            </div><br>
            <div>
                 <label for="class">class</label>
                <input type="text" vlaue="<?php echo $row['class']; ?>" name="class" id="class">
            </div><br>
            <div>
                 <label for="address">address</label>
                <input type="text" vlaue="<?php echo $row['address']; ?>" name="address" id="address">
            </div><br>
            <div>
                <input type="submit" name="btn" id="btn">
            </div><br>
        </form>

        <?php
              }
            }
          }
        ?>

    </div>   
</body>
</html>