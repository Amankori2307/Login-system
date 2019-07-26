<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="includes/signup.inc.php" method="post">
        <fieldset>
            <legend>Signup</legend>
            <input type="text" name="name" placeholder = "Name..."><br>
            <input type="email" name="email" placeholder = "E-mail..."><br>
            <input type="date" name="dob" ><br>
            <input type="password" name="password" placeholder = "Password..."><br>
            <input type="password" name="password_r" placeholder = "Re enter your Password..."><br>
            <button type="submit" name = "ssubmit">Register</button>
        </fieldset>
    </form>
</body>
</html>