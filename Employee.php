<!DOCTYPE html>
<html>
<head>
	<title>Add Employee Details</title>
</head>
<body>
	<h2>Add Employee Details</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name: <input type="text" name="name"><br><br>
		Age: <input type="text" name="age"><br><br>
		Address: <input type="text" name="address"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		
		//ini_set('display_errors', 1);
		//ini_set('display_startup_errors', 1);
		//error_reporting(E_ALL);
		
		if(isset($_POST["submit"])){
		
			$name = $_POST["name"];
			$age = $_POST["age"];
			$address = $_POST["address"];

		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "test";

			$conn = new mysqli($servername, $username, $password, $dbname);
			
			
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

		
			$sql = "INSERT INTO employeedetais (Emp_name, age, address) VALUES ('$name', '$age', '$address')";

			try {
				if ($conn->query($sql) === TRUE) {
					echo "Employee details added successfully";
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
