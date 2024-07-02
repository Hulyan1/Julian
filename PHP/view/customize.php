<?php 
    session_start();

    // checks if the  user is login in a device
    if(isset($_SESSION['username']) || isset($_SESSION['email'])){
        header("Location: PHP/adminhub/index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../../index.php">back</a>
</body>
</html>