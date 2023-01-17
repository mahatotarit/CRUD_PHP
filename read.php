<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Post</title>
    <style>
        *{
            padding: 00px;
            margin: 00px;
            box-sizing: 00px;
        }
        #main-div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .all-div{
            display:inline-block;
        }
        span{
            font-weight:bold;
        }
    </style>
</head>

<body>
    <?php
        include 'conn.php';

        $id = $_GET['id'];

        $sql = "SELECT * FROM post WHERE post_id={$id}";
        $result = mysqli_query($conn,$sql);
        if($row = mysqli_fetch_assoc($result)){
    ?>
    <div id="main-div">
        <?php
        
        ?>
        <div id="image">
            <div id=""class="all-div">
                <img src="add-post-image-upload/<?php echo $row['img']?>" alt="Post Image" width="200" height="200">
            </div>
        </div><br>
        
        <div id="title">
            <span>Title:</span>
            <div id="" class="all-div"><?php echo $row['title']?></div>
        </div><br>

        <div id="desc">
            <span>Description:</span>
            <div id="" class="all-div"><?php echo $row['description']?></div>
        </div><br>

        <div id="cate">
            <span>Category:</span>
            <div id=""class="all-div"><?php echo $row['cate']?></div>
        </div><br>

        <div id="btn">
            <div id=""class="all-div"><button><a href="post.php">Back</a></button></div>
        </div>

        <?php
        }
        ?>
    </div>
</body>

</html>