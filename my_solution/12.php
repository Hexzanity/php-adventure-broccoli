<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->
<?php
function generate_password($length) {
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+=-";
    $password = "";
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $password;
}
$length = 12;
echo "The length of the Password is: ".$length;
echo "<br>";
$password = generate_password($length);
echo "The generated password is: ". $password;
?>