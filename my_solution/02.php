<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php

function checkPalindrome($string1, $string2) {
    $string1 = strtolower($string1);
    $string2 = strtolower($string2);
    $reversed_string1 = strrev($string1);
    $reversed_string2 = strrev($string2);
    
    if ($string1 == $reversed_string1) {
        echo "The string '$string1' is a palindrome.";
    } else {
        echo "The string '$string1' is not a palindrome.";
    }
    echo "<br>";
    if ($string2 == $reversed_string2) {
        echo "\nThe string '$string2' is a palindrome.";
    } else {
        echo "\nThe string '$string2' is not a palindrome.";
    }
}

checkPalindrome("NasabayaBasan", "Kalawakan");

?>
