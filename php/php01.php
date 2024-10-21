<?php
// Function to calculate sum of digits, zeros, odd, and even digits
function analyzeNumber($number)
 {
 $sum = 0;
 $zeroCount = 0;
 $oddCount = 0;
 $evenCount = 0;
 // Convert the number to a string to easily loop through each digit
 $numStr = (string) $number;
 for ($i = 0; $i < strlen($numStr); $i++) 
   {
 $digit = (int) $numStr[$i];
 //calculate sum of digits
 $sum += $digit;
 //check if the digit is zero
 if ($digit == 0) {
 $zeroCount++;
 }
 // Check if the digit is odd
 elseif ($digit % 2 != 0) {
 $oddCount++;
 }
 // Otherwise, it is even
 else {
 $evenCount++;
 }
 }
 // Output the results
 echo "Sum of digits: $sum\n";
 echo "Number of zeros: $zeroCount\n";
 echo "Number of odd digits: $oddCount\n";
 echo "Number of even digits: $evenCount\n";
}

// Example usage
$number = 55;
analyzeNumber($number);
?>
