<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main-div {
            text-align: center;
        }

        input {
            outline: none;
        }

        #submit {
            background-color: rgb(51, 201, 255);
            border: none;
            border-radius: 5px;
            width: 15vw;
            padding: 5px 00px 5px 00px;
            font-weight: bold;
            font-size: 17px;
            color: black;
        }

        .two-input {
            width: 25vw;
            height: 20px;
            font-weight: bold;
        }

        label {
            font-weight: bold;
            width: 5vw;
            display: inline-block;
        }

        form {
            background-color: rgb(236, 236, 236);
            padding: 10vh;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 1px 1px 5px black;
            border: 3px inset;
        }
    </style>
</head>

<body>
    <div class="main-div">
        <h1>Register Page</h1>
        <form action="registerdata.php" autocomplete="of" method="POST">
            <label for="full-name">Full Name</label>
            <input type="text" class="two-input" id="full-name" name="fullname"><br><br>

            <label for="username">User Name</label>
            <input type="text" class="two-input" id="username" name="username"><br><br>

            <label for="Email">Email</label>
            <input type="text" class="two-input" id="Email" name="email"><br><br>

            <label for="password">Password</label>
            <input type="password" class="two-input" id="password" name="password"><br><br>

            <input type="submit" id="submit" name="register-btn" value="register-btn"><br>
            
            <div style=" padding:5px;margin-top:60px;">Allready have a account    <a href="login.php"
                    style="text-decoration:none;">Click</a></div>
        </form>
    </div>
</body>