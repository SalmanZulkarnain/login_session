<?php 

session_start();
$username = 'salman';
$password = '2121';

if(isset($_SESSION['logged'])) {
    header('Location: dashboard.php');
    exit();
}

if(isset($_POST['username']) && isset($_POST['password']))
{
    $ambil_username = $_POST['username'];
    $ambil_password = $_POST['password'];

    if($ambil_username == $username && $ambil_password == $password)
    {
        $_SESSION['logged'] = TRUE;
        header('Location: dashboard.php');
        exit();
    }
    else
    {
        echo '<h3>Password atau Username salah!</h3>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>SILAHKAN LOGIN</h1>
    <form method="POST">
        Username: <input type="text" name="username"> <br>
        <br>
        Password: <input type="password" name="password"> <br>
        <br>
        <input type="submit" value="Login"> <br>
    </form> 
</body>
</html>