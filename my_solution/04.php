<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
 <?php

function sumOfDigits($number) {
    $sum = 0;
    $number_string = (string)$number;
    
    for ($i = 0; $i < strlen($number_string); $i++) {
        $sum += (int)$number_string[$i];
    }
    
    echo "The sum of the digits in $number is $sum.";
}

sumOfDigits(12345);

?>
 