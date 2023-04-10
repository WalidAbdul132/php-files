<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Checking Leap Year</h1>

    <form action="#" method="get">
        <p>Enter a year</p>
        <input type="number" name="num" />
        <input type="submit" value="submit" />
    </form>

    <?php
    if(ISSET($_GET['num'])){
        $num = $_GET['num'];
        $mod = $num % 4;
        if ($mod > 0) {
            echo $num . " is not a leap year";
        } else {
            echo $num . " is a leap year";
        }

    } else {
        echo "";
    }
        
        
        
    ?>
</body>
</html>
