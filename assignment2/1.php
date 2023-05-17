<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <script>
        function validateForm() {
            var firstname = document.getElementById("firstname").value;
            var lastname = document.getElementById("lastname").value;

            if (firstname === "" || lastname === "") {
                alert("Please enter both the firstname and lastname.");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>
<body>
    <h2>User Input</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Enter Firstname
        <input type="text" name="firstname" id="firstname"><br><br>
		
	</form>

    <?php
        if(isset($_POST["submit"])){
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];

		
			$sql = "INSERT INTO users (firstname, lastname) VALUES ('$firstname', '$lastname')";

			try {
				if ($conn->query($sql) === TRUE) {
					echo "Insertion successfull";
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