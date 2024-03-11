<?php
// How to generate a random password using PHP

$password_length = 10;

// Add a symbol to the password
$symbols = '!@#$%^&*()_+{}|:<>?-=[]\;,./'; // List of symbols
$symbol_count = strlen($symbols); // Get the number of symbols
$index = random_int(0, $symbol_count - 1); // Choose a random position
$password = substr($symbols, $index, 1); // Add the symbol to the password

$password .= chr(random_int(48, 57)); // Add a number
$password .= chr(random_int(65, 90)); // Add an uppercase letter
$password .= chr(random_int(97, 122)); // Add a lowercase letter

// Add lowercase letters to reach the password length(specified length).
for ($i = strlen($password); $i < $password_length; $i++) {
    $password .= chr(random_int(97, 122));
}

// Shuffle the characters of the password
$password = str_shuffle($password);
echo $password; // Example output: 5@Aa{d9|c


?>