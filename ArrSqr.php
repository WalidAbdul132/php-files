<!DOCTYPE html>
<html>
<body>
<?php

/*$string = "Horses are running beyond the dark cloud of night";

$pattern = "/\b\w{5}\b/";

preg_match_all($pattern, $string, $matches);


print_r($matches);



$string = "Horses are running beyond the dark cloud of night";

$pattern = "/dark/i";

$replacement = "red";

$newString = preg_replace($pattern, $replacement, $string);

echo $newString;



$string = "Horses are running beyond the dark cloud of night";


$words = preg_split("/\s+/", $string);


print_r($words); 



$string = "This is a string with special characters [ ] { } ( ) * + ? . \\ ^ $ |";


$escapedString = preg_quote($string, '/');


$pattern = '/^' . $escapedString . '$/';


if (preg_match($pattern, $string)) {
    echo "The pattern matches the string.\n";
} else {
    echo "The pattern does not match the string.\n";
}*/




$string = "Horses are running beyond the dark cloud of night";

preg_match('/\b(\w+)\b\s*$/', $string, $matches);

if (!empty($matches)) {
    $last_word = $matches[1];
    $string = preg_replace('/\b' . preg_quote($last_word, '/') . '\b\s*$/', '', $string);
}

echo "Original string: " . $string . "\n";
echo "</br>";
echo "Removed word: " . $last_word . "\n";







?>
</body>
<html>
