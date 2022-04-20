<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cookie_name = "user";
        $cookie_value = "John Doe";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        
        echo $_COOKIE['user'];
        session_start();
        $_SESSION['name']="EESHAN";
    ?>
    <a href='./abcd.php'>click  me</a>
</body>
</html>