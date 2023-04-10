<?php

    $numbers = array(0, 1, 2, 3, 4, 5);

    echo "these are the elements in the array: ";

    for($i = 0; $i < 6; $i++){
        echo $numbers[$i];
    }
    echo "</br></br>";
    $largest_key = max(array_keys($numbers));

    echo "The largest key in the array is: " . $largest_key;

?>