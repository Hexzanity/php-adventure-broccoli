<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php

$string = "IT is not about the technology, it's about the people.";
$string = strtolower($string);
$char_count = array_count_values(str_split($string));

foreach ($char_count as $char => $count) {
    echo "The character '$char' appears $count times in the string." . "<br>";
}

?>