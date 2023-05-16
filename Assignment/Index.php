<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Enter Employee Details</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name: <input type="text" name="name"><br><br>
		Basic Salary: <input type="text" name="salary"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

    <?php
        include "connection.php";
        
        if(isset($_POST["submit"])){
		
			$name = $_POST["name"];
			$salary = $_POST["salary"];

            $DA = ($salary / 100) * 10;
            $TA = ($salary / 100) * 7.5;
            $total = $salary + $DA + $TA;
            
            $sql = "INSERT INTO employee (name, basic_salary, traveling_allowance, dearness_allowance, total_salary) 
            VALUES ('$name', '$salary', '$TA', '$DA', '$total')";

			try {
				if ($conn->query($sql) === TRUE) {
					header("Location: table.php");
				} else {
					throw new Exception("query wrong");
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
			
		
			$conn->close();
		}
    ?>
</body>
</html>