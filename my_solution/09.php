<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
 <?php
 function remove_vowels($string) {
    return preg_replace("/[aeiouAEIOU]/", "", $string);
}
$string = "I am Hector! How are you?";
echo "Original String is: ".$string;
echo "<br>";
$vowel_removed = remove_vowels($string);
echo "The string with vowels removed is: " . $vowel_removed;
 ?>