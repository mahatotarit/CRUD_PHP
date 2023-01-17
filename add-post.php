<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <style>
        * {
            padding: 00px;
            margin: 00px;
            box-sizing: border-box;
        }

        #main-div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }

        #form-div {
            background-color: rgb(228, 228, 228);
            box-shadow: 1px 1px 5px rgb(150, 150, 150);
            border-radius: 10px;
            width: 50%;
            height: 60%;
            padding: 10px;
        }

        .input-div {
            width: 100%;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        input {
            width: 80%;
            margin-top: 10px;
            display: block;
            height: 15%;
        }

        label {
            display: block;
            width: 100%;
            font-weight: bold;
        }

        input,
        #btn {
            height: 4vh;
            border-radius: 5px;
            outline: none;
            border: 1px solid rgb(74, 74, 74);
        }

        #btn {
            background-color: rgb(59, 104, 255);
            color: white;
            font-weight: bold;
            letter-spacing: 1px;
            font-size: 15px;
        }

        #category {
            height: 4vh;
            width: 80%;
            text-align: center;
            margin-top: 10px;
        }

        #file {
            border: none;
        }

        h2 {
            padding: 10px;
            margin: 20px;
        }
    </style>
</head>

<body>
    <div id="main-div">
        <h2>Add New Post</h2>
        <div id="form-div">
            <form action="add-post-data.php" method="POST" enctype="multipart/form-data">
                <div class="input-div">
                    <label for="title">Title</label>
                    <input id="title" type="text" name="title">
                </div><br>
                <div class="input-div">
                    <label for="desc">Description</label>
                    <textarea id="desc" type="text" name="desc" cols="80" rows="5"></textarea>
                </div><br>

                <div class="input-div">
                    <label for="Category">Category</label>
                    <select name="cate" id="category">
                        <option value="" selected disabled>Category</option>
                        <option value="helth">Helth</option>
                        <option value="news">News</option>
                        <option value="food">Food</option>
                    </select>
                </div><br>

                <div class="input-div">
                    <span>
                        <label for="post-image">Post Image</label>
                        <input id="file" type="file" name="post-image">
                    </span>
                </div><br>
                <div class="input-div">
                    <input type="submit" id="btn" name="btn" Value="POST">
                </div>
            </form>
        </div>
    </div>
</body>

</html>