<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Counting number of vowels</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Enter a string
        <input type="text" name="text"><br><br>
        <input type="submit" name="submit" value="Submit" />
	</form>

    <?php
        if (isset($_POST["submit"])) {
            $string = $_POST["text"];
            $string = strtolower($string);

            $countA = 0;
            $countE = 0;
            $countI = 0;
            $countO = 0;
            $countU = 0;
        
            for ($i = 0; $i < strlen($string); $i++) {
                $char = $string[$i];
        
                switch ($char) {
                    case 'a':
                        $countA++;
                        break;
                    case 'e':
                        $countE++;
                        break;
                    case 'i':
                        $countI++;
                        break;
                    case 'o':
                        $countO++;
                        break;
                    case 'u':
                        $countU++;
                        break;
                }
            }
        
            echo "A = $countA<br>";
            echo "E = $countE<br>";
            echo "I = $countI<br>";
            echo "O = $countO<br>";
            echo "U = $countU<br>";
        }
    ?>
</body>
</html>