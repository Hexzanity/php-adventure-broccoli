<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
 <?php
$array = [5, 10, 17, 23, 25, 35, 37, 40, 41, 50];
echo "The list of array is: ";
foreach($array as $List){
    echo $List ." ";
}
echo "<br>";
sort($array);
$length = count($array);
$middle = (int) ($length / 2);
if ($length % 2 == 0) {
  $median = ($array[$middle - 1] + $array[$middle]) / 2;
} else {
  $median = $array[$middle];
}
echo "The median of the array is: ". $median;
?>