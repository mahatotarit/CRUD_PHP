<?PHP
// echo "<pre>";
// print_r( $_SERVER);
// echo "</pre>";
?>


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
        #blue {
            background-color: rgb(69, 69, 255);
            color: white;
        }

        a {
            color: rgb(255, 255, 255);
        }

        .page-n {}

        li {
            background-color: rgb(0, 102, 255);
            padding: 5px;
            margin: 2px;
            width: 15px;
            display: inline-block;
            color: white;
            font-weight: bold;
        }

        ul {
            text-align: center;
        }

        a {
            text-decoration: none;
            border: none;
        }

        button {
            border: none;
            border-radius: 5px;
            padding: 5px;
            text-shadow: 1px 5px 5px black;
        }

        table,
        td,
        tr {
            padding: 5px;
            border-collapse: collapse;
        }

        .three-a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            border: 1px inside black;
        }

        #r-p {
            display: inline-block;
        }

        #main-div {
            text-align: center;
        }

        table {
            margin-left: 32%;
        }

        #pre {
            width: 45px;
            border-radius: 5px 00px 00px 5px;
        }

        #next {
            width: 45px;
            border-radius: 00px 5px 5px 00px;
        }

        #logout-div {
            position: absolute;
            margin-right: 00px;
            border: 1px solid black;
        }
        .last-btn{
            background-color: purple;
            margin:5px;
        }
        #last-div{
            text-align:center;
        }
    </style>
</head>

<body>
    <div id="main-div">
        <h2>Home Page</h2><br>
        <div id="r-p">
            <button><a class="three-a" href="single-update.php">Edit</a></button>
            <button><a class="three-a" href="show.php">Delete</a></button>
            <button><a class="three-a" href="insert.php">Insert Data</a></button>
        </div>
        <?php
        include 'conn.php';
        $limit = 2;
        if(isset($_GET['pagen'])){
            $get = $_GET['pagen'];
        }else{
            $get = 1;
        }
        $final = ($get - 1) * $limit;

        $sql = "SELECT * FROM student LIMIT {$final},{$limit}";
        $result = mysqli_query($conn, $sql) or die("table connection faild");
        if (mysqli_num_rows($result) > 0) {

        ?>
        <table border="1">
            <tr>
                <thead>
                    <th>Student id &nbsp;&nbsp;</th>
                    <th>Student Name &nbsp;&nbsp;</th>
                    <th>Student class &nbsp;&nbsp;</th>
                    <th>Student address &nbsp;&nbsp;</th>
            </tr>
            <thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                <tr>
                    <td>
                        <?php echo $row['id']; ?>
                    </td>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                    <td>
                        <?php echo $row['class']; ?>
                    </td>
                    <td>
                        <?php echo $row['address']; ?>
                    </td>
                    <td><button style="background-color:blue;"> <a href="update.php?id=<?php echo $row['id'];?>"
                                style="background-color:blue; color:white;">Edit</a></button></td>
                    <td><button style="background-color:red;"><a href="delete.php?id=<?php echo $row['id'];?>"
                                style="background-color:red;  color:white;">Delete</a></button></td>
                </tr>

                <?php
                    }
                    ?>
            </tbody>
        </table><br>
        <?php
        } else {
            echo "<h2>No Record Found</h2>";
            die();
        }
        $sql1 = "SELECT * FROM student";
        $result1 = mysqli_query($conn,$sql1);
         $record = mysqli_num_rows($result1);
         $page = ceil($record/$limit);
        ?>
    </div>
    <ul>
        <?php
        if($get > 1){
            echo "<li id='pre'><a href='index.php?pagen=".($get - 1)."'>Pre</a></li>";
        }
         for($i = 1;$i <= $page; $i++){
            if($i == $get){
                $active = "blue";
             }else{
                 $active = "";
             }
          ?>
        <li id="<?php echo $active?>"><a class="page-n" href="index.php?pagen=<?php echo $i;?>">
                <?php echo $i;?>
            </a></li>
        <?php
        }
        if($page > $get){
            echo "<li id='next'><a href='index.php?pagen=".($get + 1)."'>Next</a></li>";
        }
        ?>
    </ul><br>
    <div id="last-div"><button class="last-btn"><a
            style=" color:rgb(254, 214, 13);font-weight:bold;" href="post.php">All Post</a></button>
            <button class="last-btn"><a
            style=" color:rgb(254, 214, 13);font-weight:bold;" href="front-page.php">Post</a></button>
    <button class="last-btn"><a
            style=" color:rgb(254, 214, 13);font-weight:bold;" href=" add-post.php">Upload Post</a></button>
    </div>

 </body>
<?php
mysqli_close($conn);
?>

</html>