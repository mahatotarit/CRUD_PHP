<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 00px;
            padding: 00px;
            box-sizing: border-box;
        }

        #main-div {
            width: 98vw;
            height: 100vh;
        }

        #left-div {
            width: 40%;
            padding: 5px 15px 5px 15px;
            margin: 5px 00px 00px 15%;
            background-color:rgb(240, 240, 240);
            border-radius:5px;
        }

        .first-two {
            display: inline-block;
        }

        .first-second {
            width: 58%;
        }

        .first-first {
            width: 40%;
        }

        .fourth-div {
            padding: 5px;
        }

        .btn-div {
            text-align: right;
        }

        .btn {
            background-color: rgb(0, 179, 255);
            width: 20%;
            padding: 2px;
            border-radius: 3px;
        }

        a {
            color: black;
            font-weight: bold;
            text-decoration: none;
        }

        .three-span {
            padding: 2px;
            margin: 0px 10px 00px 10px;
            display: inline-block;
        }

        .br {
            color: black;
            background-color: black;
            border: 1px solid black;
        }
        .cates-session{
            background-color: rgb(50, 176, 254);
            width:100%;
            text-align:center;
        }
    </style>
</head>
<?php
    include 'side-bar.php';
    ?>
<body>
    <div id="main-div">
        <!-- <div class="cates-session">
            <span><a href="front-page.php?cate=news">News</a></span>
            <span><a href="front-page.php?cate=food">Food</a></span>
            <span><a href="front-page.php?cate=helth">Helth</a></span>
        </div> -->
        <div id="left-div">


        <?php
        if(isset($_GET['search'])){
            $search = $_GET['search'];
        }

        include 'conn.php';

        $sql = "SELECT * FROM post WHERE title LIKE '%{$search}%' 
        or cate LIKE '%{$search}%'
        or author LIKE '%{$search}%'";
        $result = mysqli_query($conn,$sql) or die("query failed");
        if(mysqli_num_rows($result)){
            while($row = mysqli_fetch_assoc($result)){
        ?>

            <div id="first-post">
                <div class="first-two first-first image-div"><img
                        src="add-post-image-upload/<?php echo $row['img'];?>" alt="" width="210" height="200">
                </div>
                <div class="first-two first-second">
                    <h2 class="post-id fourth-div"><?php echo $row['title'];?></h2>
                    <div class="author-span fourth-div">
                        <span class="three-span"><?php echo $row['author'];?></span>
                        <span class="three-span"><?php echo $row['cate'];?></span>
                        <span class="three-span"><?php echo $row['date'];?></span></div>
                    <div class="fourth-div">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ipsum quam
                        veniam doloremque impedit autem ducimus totam voluptas necessitatibus nostrum eius, officiis,
                        assumenda reiciendis libero quaerat error sapiente a porro.</div>
                    <div class="btn-div fourth-div">
                        <button class="btn"><a href="read.php?id=<?php echo $row['post_id'];?>">Read</a></button>
                    </div>
                </div>
            </div>
            <br>
            <hr class="br">
            <br>

            <?php
             }
            }else{
                echo "<h2 style='text-align:center;'>No Record Found</h2>";
            }
       
            ?>
        </div>
    </div>
</body>

</html>