


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | New User</title>
    <link rel="icon" type="images/png" href="../src/icons/mascota.png">
</head>
<body>
    <center>
        <br><br>
        <img src="images/register.png" width="150">
    </center>
    <form name="signup-form" action="backend/signup.php" method="post">
        <table align="center">
            <tr><td><input type="text" name="fname" placeholder="Fullname" required></td></tr>
            <tr><td><input type="email" name="email" placeholder="Email" required></td></tr>
            <tr><td><input type="password" name="passwd" placeholder="*********" required></td></tr><br>
            <tr><td><input type="file" name="user_photo"></td></tr>
            <tr><td align="center"><button>Register</button></td></tr>
            <a href="signin.php">Enter a account</a>
        </table>
    </form>
</body>
</html>