<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>


    <h1> Registration Form </h1>

    <form action="Process.php" method="POST">
        <label>Name:  </label> </br>
        <input type="text" name="nm" required></p>

        <label>Email:  </label> </br>
        <input type="email" name="email" required></p>

        <label>Password:  </label> </br>
        <input type="password" name="password" required></p>

        <label>Phone Number:  </label> </br>
        <input type="text" name="pn" required></p>

        <input type="submit" name="register_button" value="Register">


    </form>

    <p><a href="index.php"> Click Here to Login! </a></p>



</body>
</html>