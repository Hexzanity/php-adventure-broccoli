<!-- 
    Write a program that outputs the first n triangular numbers.
 -->
 <?php
$n = 7;
echo "Number is = " . $n . "<br>";

for ($a = 1; $a <= $n; $a++) {
  for ($b = 1; $b <= $a; $b++) {
    printf("%4d", $b);
  }
  echo "<br>";
}
?>