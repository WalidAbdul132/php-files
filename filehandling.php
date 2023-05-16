<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        <p>Enter file name</p>
        <input type="text" name="text" />
        <input type="submit" value="submit" />
    </form>  
</body>
</html>
    <?php
    if(ISSET($_GET['text'])){
        $filename = $_GET['text'];

        try {
            if (file_exists($filename)) {
                throw new Exception("The file already exists!");
            } else {
                $file = fopen($filename, "a");
                fwrite($file, "Hello World!"); 
                fclose($file);
                echo "The file has been created successfully.";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    } else {
        echo "";
    }
    

    ?>
