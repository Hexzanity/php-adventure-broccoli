<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php
$List = array(5, 10, 20, 35, 50, 65);
echo "The list of array is: ";
foreach($List as $Show){
    echo $Show ." ";
}
echo "<br>";
$ave = array_sum($List) / count($List);
echo "The average of the array is: ". $ave;
?>