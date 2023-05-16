<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Strings</h1>

    <form action="#" method="get">
        <p>Enter a text</p>
        <input type="text" name="text" />
        <input type="submit" value="submit" />
    </form>
    <?php
        if(ISSET($_GET['text'])){
            $text = $_GET['text'];
            $length = strlen($text);
            $lower_case = strtolower($text);
            $upper_case = strtoupper($text);
            $reverse = strrev($text);

            echo "Main text: ".$text;
            echo "<br><br>";
            echo "Length is: ".$length;
            echo "<br>";
            echo "Lower case is: ".$lower_case;
            echo "<br>";
            echo "Upper case is: ".$upper_case;
            echo "<br>";
            echo "Reverse is: ".$reverse;


        } else {
            echo "";
        }
        
    ?>
</body>
</html>