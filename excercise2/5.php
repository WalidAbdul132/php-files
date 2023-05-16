<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Removing characters from a String</h1>

    <form action="#" method="get">
        <p>Enter a sentence</p>
        <input type="text" name="text" />
        <input type="submit" value="submit" />
    </form>
    <?php
        if(ISSET($_GET['text'])){
            
            $text = $_GET['text'];
            $new_text = preg_replace('/\b\w+\s*$/', '', $text);
        
            echo "Main text: ".$text;
            echo "<br><br>";
            echo "New text: ".$new_text;

        } else {
            echo "";
        }
        
    ?>
</body>
</html>