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
    setcookie("username", "John", time() + (86400 * 30), "/"); // expires in 30 days
    
    if(isset($_COOKIE["username"])) {
        echo "Welcome " . $_COOKIE["username"] . "!";
    } else {
        echo "Cookie not set!";
    }
    ?>
    <?php
       
        $cookie_name ="user";
        $cookie_value = "johny";
        setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/" );
        echo "Cookie".$cookie_name." is set!<br>";
        echo "Value is :", $_COOKIE[$cookie_name];
    ?>
</body>
</html>