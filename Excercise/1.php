<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Calculating factorial</h1>

    <form action="#" method="get">
        <p>Enter a number</p>
        <input type="number" name="num" />
        <input type="submit" value="submit" />
    </form>

    <?php
    if(ISSET($_GET['num'])){
        $fact = 1; $num; $n;
        $num = $_GET['num'];
        $n = $num;

        while($num > 0){
            $fact = $fact * $num;
            $num--;
        }

        echo "The factorial for ".$n." is ".$fact; 

    } else {
        echo "";
    }
        
        
        
    ?>
</body>
</html>
