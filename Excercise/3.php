<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Reversing Strings</h1>

    <form action="#" method="get">
        <p>Enter a string</p>
        <input type="text" name="text" />
        <input type="submit" value="submit" />
    </form>

    <?php
    if(ISSET($_GET['text'])){
        $str = $_GET['text'];
        $reverse_str = strrev($str);
        echo $str . " reversed is: " .$reverse_str ;
    

    } else {
        echo "";
    }
        
        
        
    ?>
</body>
</html>
