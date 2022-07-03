<?php
include_once 'connection.php';

if(isset($_POST['submit']))
{
    $uname = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO loginform (username, password) VALUES('$uname','$pass')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h1 class="heading">Login Page</h1>
        <form action="#"  method="POST">
            <input type="text" name="user" id="user" class="logintag" placeholder="User Name">
            <input type="password" name="pass" id="pass" class="logintag" placeholder="Password">
            <input type="submit" name="submit" value="Login" class="loginbtn">
        </form>
    </div>
</body>
</html>