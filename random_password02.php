<?php

/**
 * Generates a secure and random password.
 * 
 * This function creates a random password with a customizable length and an even distribution 
 * of symbols, numbers, uppercase, and lowercase letters.
 *
 * @param int $length The desired length of the password. Default is 10 characters.
 * @return string The generated password.
 */
function generateRandomPassword($length = 10) {
    // Define character sets
    $symbols = '!@#$%^&*()_+{}|:<>?-=[]\;,./';
    $numbers = '0123456789';
    $upperLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowerLetters = 'abcdefghijklmnopqrstuvwxyz';

    // Ensure the password contains at least one of each character type
    $password = [
        $symbols[random_int(0, strlen($symbols) - 1)],
        $numbers[random_int(0, strlen($numbers) - 1)],
        $upperLetters[random_int(0, strlen($upperLetters) - 1)],
        $lowerLetters[random_int(0, strlen($lowerLetters) - 1)]
    ];

    // Fill the rest of the password length with random characters from all types
    for ($i = count($password); $i < $length; $i++) {
        $randomType = random_int(1, 4);
        switch ($randomType) {
            case 1:
                $password[] = $symbols[random_int(0, strlen($symbols) - 1)];
                break;
            case 2:
                $password[] = $numbers[random_int(0, strlen($numbers) - 1)];
                break;
            case 3:
                $password[] = $upperLetters[random_int(0, strlen($upperLetters) - 1)];
                break;
            case 4:
                $password[] = $lowerLetters[random_int(0, strlen($lowerLetters) - 1)];
                break;
        }
    }

    // Shuffle the password to randomize the order of characters
    shuffle($password);
    
    // Convert the array into a string and return it
    return implode('', $password);
}

// Usage
$password = generateRandomPassword(10);
echo $password; // Outputs a 10-character random password

?>
