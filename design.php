<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div class="box">
        <form action="sharwarma.php" method="post">
            <h2>Sign In</h2>
            <div class="inputBox">
                <input type="text"name="user_name" required>
                <span>Username</span>
                <i></i>
            </div>

            <div class="inputBox">
                    <input type="password" name="pass_word" required>
                    <span>Enter Password</span>
                    <i></i>
            </div>

            <input type="submit" value="login">
            <div class="links">
                <a href="#">Forget?</a>
                <a href="#">Sign Up</a>
            </div>
        </form>
    </div>
</body>
</html>
