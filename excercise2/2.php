<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Calculating Total Price</h1>

    <form action="#" method="get">
        <p>Enter num</p>
        <input type="number" name="num" />
        <limitp>Enter square </p>
        <input type="number" name="limit" />
        <input type="submit" value="submit" />
    </form>
    <?php
        if(ISSET($_GET['num'])){
            $num = $_GET['num'];
            $limit = $_GET['limit'];
            $squares = array();

            for($i = 1; $i <= $limit; $i++){
                $square = pow($num,$i);
                $squares[] = $square; 
            }

            print_r($squares);

        } else {
            echo "";
        }
        
    ?>
</body>
</html>