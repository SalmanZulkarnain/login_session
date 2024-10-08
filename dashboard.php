<?php
session_start();

if(!isset($_SESSION['logged'])) {
    header('Location: login.php');
}



if(isset($_POST['logout']))
{
    session_destroy();  
    header('Location: login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<body>
    <h1>Ini adalah halaman dashboard</h1>
    <form method="POST">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>