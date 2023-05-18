<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Removing an element in an array</h2>
    <?php
        $array = array(1, 2, 3, 4, 5);
        echo "Array values: ";
        $length = count($array);
        for($i = 0; $i < $length; $i++){
            echo $array[$i]." , ";
        }
        
    ?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Enter number to be removed
        <input type="number" name="num"><br><br>
        <input type="submit" name="submit" value="Submit" />
	</form>

    <?php
        if (isset($_POST["submit"])) {
            $num = $_POST["num"];

            $array = array_diff($array, array($num));
            
            echo "Operation Successful<br>";
            echo "Array after removal: ";
            print_r($array);
        }
    ?>
</body>
</html>