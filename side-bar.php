<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<style>
    * {
        padding: 00px;
        margin: 00px;
        box-sizing: border-box;
    }

    #sidebar {
        margin-left: 65%;
        margin-top: 5px;
        padding: 10px;
        position: absolute;
        width: 25%;
        background-color: rgb(245, 245, 245);
        border-radius: 5px;
    }

    .search-sb {
        height: 25vh;
        display: flex;
        flex-direction: column;
    }


    #search-input {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
        font-weight: bold;
        width: 80%;
        margin: auto;
        border-radius: 10px;
        background-color: white;

    }

    input {
        border: none;
        outline: none;
        padding: 5px;
    }

    h2 {
        padding: 5px;
        margin-left: 10px;
    }

    .sidebar-second-div {
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid black;
        border-radius:4px;
        width: 80%;
        padding:00px 0px 2px 0px;
        margin: auto;
        overflow:auto;
    }

    .image-desc {
        padding: 5px;

    }

    .s-image {
        width: 30%;
        margin-right: auto;
    }

    .s-small {
        padding: 2px;
        margin: 00px 2px 00px 2px;
    }

    .read-btn {
        border-radius: 5px;
    }
    .add-post-btn{
        display:inline-block;
        border:1px solid black;
        padding:5px;
    }
    .search-h2{
    }
</style>

<body>
    <div id="sidebar">
        <div class="search-sb">
            <div>
                <h2 class="search-h2">Search</h2>
            </div>
            <div id="search-input">
                <form action="search.php?" method="GET">
                    <input type="text" name="search" Placeholder="Search....">
                    <input type="submit" name="btn">
        </form>
    </div>
        </div>
        <br>
        <div class="second-sb">
        <?php
               $limit = 3;
              include 'conn.php';
              $sql1 = "SELECT * FROM post ORDER BY post_id DESC LIMIT {$limit}";
               $result1 = mysqli_query($conn, $sql1) or die("table connection faild");
              if (mysqli_num_rows($result1) > 0) {
    ?>   

            <?php
              while ($row1 = mysqli_fetch_assoc($result1)) {
            ?>
            <div class="sidebar-second-div">
                <div class="image-desc s-image"><img src="add-post-image-upload/<?php echo $row1['img'];?>" alt=""
                        width="60" height="70"></div>
                <div class="image-desc">
                    <h5 style="color:black;"><?php echo $row1['title'];?></h5>
                    <small class="s-small"><?php echo $row1['cate'];?></small><small class="s-small"><?php echo $row1['author'];?></small><small
                        class="s-small"><?php echo $row1['date'];?></small>
                    <div><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, fugiat!</small></div>
                    <div style="text-align:right;"><button class="read-btn"
                            style="background-color: rgb(0, 179, 255); padding:2px;"><a style="text-decoration: none;"
                                href="read.php?id=<?php echo $row1['post_id'];?>">Read</a></button></div>
                </div>
            </div>
              <br>

        <?php
                }  }
        ?>
          </div>
          <button class="read-btn" style="padding:5px; background-color:skyblue;"><a href="add-post.php">Add Post</a></button>
    </div>
</body>

</html>