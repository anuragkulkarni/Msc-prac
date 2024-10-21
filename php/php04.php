<?php
// Function to perform string operations
function stringOperations($inputString) 
{
    // Convert the string to all uppercase letters
    $upperCaseString = strtoupper($inputString);
    echo "Uppercase: $upperCaseString\n";

    // Convert the string to all lowercase letters
    $lowerCaseString = strtolower($inputString);
    echo "Lowercase: $lowerCaseString\n";

    // Make the first character uppercase
    $firstCharUpper = ucfirst($lowerCaseString);
    echo "First character uppercase: $firstCharUpper\n";

    // Make the first character of all words uppercase
    $wordsFirstCharUpper = ucwords($lowerCaseString);
    echo "First character of all words uppercase: $wordsFirstCharUpper\n";
}

// Example usage

stringOperations(readline("Enter the string "));
?>
