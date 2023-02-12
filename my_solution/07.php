<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
 <?php
 function longest_string($strings) {
    $longest_string = "";
    foreach ($strings as $string) {
        if (strlen($string) > strlen($longest_string)) {
            $longest_string = $string;
        }
    }
    return $longest_string;
}
$strings = array("Hector", "Herrera", "Junior");
$longest_string = longest_string($strings);
foreach($strings as $showarray){
echo $showarray .", ";
}
echo "<br>";
echo "Longest string is: <b>" . $longest_string;
?>