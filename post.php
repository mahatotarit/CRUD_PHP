<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>
    <style>
        * {
            padding: 00px;
            margin: 00px;
            box-sizing: border-box;
        }

        #main-div {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            padding: 5px;
            margin: 5px;
        }

        table {
            padding: 5px;
            background-color: rgb(230, 230, 230);
            box-shadow:1px 1px 5px black;
            border-radius:10px;
        }

        .th {
            font-weight: bold;
            padding: 5px;
            margin: 5px;
        }


        table,td {
            border-collapse: collapse;
            padding:15px;
        }
        .btn-read{
            border-radius:15px;
            width:10%;
            padding:2px;
            text-align:center;
        }
        .last-button{
            border:none;
            background-color:skyblue;
            width:80%;
            padding:2px;
            border-radius:2px;
        }
        #last-button2{
            border:none;
            background-color:red;
            padding:2px;
            width:80%;
            border-radius:2px;
        }
        #add-Post-btn{
            background-color: rgb(21, 155, 238);
            padding:5px;
            display:inline-block;
            border:none;
            border-radius:5px;
        }
        .add-post{
            color:white;
             font-weight:bold;            
            text-decoration: none;
        }
        .width-btn{
            width:100%;
        }
        .last-td{
            width:12%;
        }
    </style>
</head>

<body>
    <div id="main-div">
        <h1>All Post</h1> <button id="add-Post-btn"><a class="add-post" href="add-post.php">Add Post</a></button><br> <button id="add-Post-btn" ><a class="add-post" href="front-page.php">All Post</a></button><br>
        <table border>
            <thead>
                <tr>
                    <td class="th">Id</td>
                    <td class="th">Post</td>
                    <td class="th">Author</td>
                    <td class="th">Title</td>
                    <td class="th">Catagory</td>
                    <td class="th">Description</td>
                    <td class="th btn-read">Read</td>
                    <td class="th btn-read">Edit</td>
                    <td class="th btn-read">Delete</td>
                </tr>
            </thead>
            <tbody>





              <?php
                include 'conn.php';
                $sql = "SELECT * FROM post";
                $result = mysqli_query($conn, $sql) or die("table connection faild");
                if (mysqli_num_rows($result) > 0) {
        
                ?>
                        <?php
                            while ($row = mysqli_fetch_assoc($result)) {
        
                            ?>
                        <tr>
                            <td class="all-td">
                                <?php echo $row['post_id']; ?>
                            </td>
                            <td class="all-td">
                                <?php echo $row['title']; ?>
                            </td>
                            <td class="all-td">
                               <?php echo $row['author']; ?>
                            </td>
                            <td class="all-td">
                                <?php echo $row['date']; ?>
                            </td>
                            <td class="all-td">
                                <?php echo $row['cate']; ?>
                            </td>
                            <td class="all-td">
                                <?php echo $row['description']; ?>
                            </td>
                            <td class="btn-read all-td">
                                <button class="last-button width-btn"><a href="read.php?id=<?php echo $row['post_id']; ?>" style="text-decoration: none; color: black; font-weight: bold;">Read</a></button>
                            </td>
                            <td class="btn-read all-td">
                                <button class="last-button width-btn"><a href="update-post.php?id=<?php echo $row['post_id']; ?>" style="text-decoration: none; color: black; font-weight: bold;">Edit</a></button>
                            </td>
                            <td class="btn-read all-td last-td">
                                <button id="last-button2" class="width-btn"><a href="delete-post.php?id=<?php echo $row['post_id']; ?>" style="text-decoration: none; color: white; font-weight: bold;">Delete</a></button>
                            </td>
                            
                        </tr>
                        <?php
                            }
                        }
                    ?>
            </tbody>
        </table>
    </div>
</body>

</html>