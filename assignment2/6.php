<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Fetching employee record</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Enter an employee name
        <input type="text" name="name"><br><br>
        <input type="submit" name="submit" value="Submit" />
	</form>

    <?php
        include "connection.php";

        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $name = strtolower($name);
            
            $sql = "SELECT * FROM emp WHERE ename = '$name'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                
                $id = $row['eno'];
                $name = $row['ename'];
                $salary = $row['salary'];
                $designation = $row['designation'];

                echo "employee no : ".$id;
                echo "<br>name : ".$name;
                echo "<br>Designation : ".$designation;
                echo "<br>salary : ".$salary;
                } else{
                echo "no records found";
            }
        }
        
    ?>
</body>
</html>