<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="includes/login.inc.php" method="post">
        <fieldset>
            <legend>Login</legend>
            <input type="email" name="userid" placeholder = "UserID"><br>
            <input type="password" name="password" placeholder = "Password"><br>
            <button type="submit" name = "lsubmit">Login</button><br><br>
            <a href="signup.php">Create an Account</a>
        </fieldset>
    </form>
</body>
</html>