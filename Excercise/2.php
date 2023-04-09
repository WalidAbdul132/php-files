<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Checking Palinedrome Number</h1>

    <form action="#" method="get">
        <p>Enter a number</p>
        <input type="number" name="num" />
        <input type="submit" value="submit" />
    </form>

    <?php
    if(ISSET($_GET['num'])){
        $num = $_GET['num'];
        $num_str = (string)$num;

        $reverse_str = strrev($num_str);

        if ($num_str === $reverse_str) {
            echo $num . " is a palindrome number";
        } else {
            echo $num . " is not a palindrome number";
        }

    } else {
        echo "";
    }
        
        
        
    ?>
</body>
</html>
