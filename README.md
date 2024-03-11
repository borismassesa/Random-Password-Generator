# Random-Password-Generator

This PHP script generates a secure and random password that is both easy to use and integrate into your projects. By combining symbols, numbers, uppercase, and lowercase letters, it ensures a high level of password security suitable for various applications.

## Features

- **Secure Random Passwords**: Utilizes PHP's `random_int()` function to ensure true randomness, making each password unique and secure.
- **Customizable Length**: The default password length is set to 10 characters, but you can easily adjust this to meet your specific requirements.
- **Complexity**: Includes at least one symbol, one number, one uppercase letter, and one lowercase letter to comply with common password policies.

## How It Works

The script operates by sequentially adding different character types to the password:

1. **Symbol**: Adds a random symbol from a predefined list.
2. **Number**: Incorporates a digit between 0 and 9.
3. **Uppercase Letter**: Adds an uppercase letter from A to Z.
4. **Lowercase Letter**: Includes a lowercase letter from a to z.

After adding one of each character type to ensure complexity, it fills the remaining length with random lowercase letters. Finally, it shuffles all characters to randomize their order, enhancing the password's security.

## Usage

To use the Random Password Generator, simply include the script in your PHP project and call it whenever you need to generate a new password. The script will output a new, random password each time it's executed. You can modify the `$password_length` variable to change the length of the generated passwords according to your needs.

```php
<?php include 'path/to/random_password_generator.php'; ?>
