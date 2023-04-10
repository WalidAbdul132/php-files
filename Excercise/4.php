<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Printing Stars</h1>

    <form action="#" method="get">
        <p>Enter size</p>
        <input type="number" name="num" />
        <input type="submit" value="submit" />
    </form>

    <?php
    if(ISSET($_GET['num'])){
        $height = $_GET['num'];
        
        // Loop through each row of the triangle
        for ($i = 1; $i <= $height; $i++) {
        
            // Print spaces to align the triangle
            for ($j = 1; $j <= ($height - $i); $j++) {
            echo " ";
            }
            
            // Print stars for the current row
            for ($j = 1; $j <= (5 * $i - 1); $j++) {
            echo "*";
            }
            
            // Move to the next row
            echo "</br>";
        }

    } else {
        echo "";
    }
        
        
        
    ?>

