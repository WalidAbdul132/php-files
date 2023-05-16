<!DOCTYPE html>
<html>
<body>
	<Title>PHP with Array </title>
	<?php
		$numbers= array(12, 13, 14, 15, 16, 17, 18, 19, 20);
		echo "</br>";
		
		$numbers2= array(30, 40, 50, 60, 70, 80, 90);
		
		echo "Display First Array:";
		print_r($numbers);
		
		echo "</br>";
		
		echo "Display Second Array:";
		print_r($numbers2);
		
		$mergarr = array_merge($numbers, $numbers2);
		
		echo "</br>";
		echo "Display Merged Array:";
		print_r($mergarr);
		
		$slice = array_slice($mergarr, 6,3);
		
		echo "</br>";
		echo "Display Sliced Array:";
		print_r($slice);
		
	?>
</body>
<html>
		