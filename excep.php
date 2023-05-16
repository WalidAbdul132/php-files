<!DOCTYPE html>
<html>
<body>
<?php
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Cannot divide by zero");
    }
    return $numerator / $denominator;
}

try {
    $result = divide(10, 2);
    echo "Result: $result\n";
    
    $result = divide(10, 0);
    echo "Result: $result\n"; 
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
} finally {
    echo "End of program\n";
}
?>
</body>
<html>