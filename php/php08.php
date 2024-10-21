<?php
session_start(); // Start the session
// Check if the 'visit_count' session variable is set
if (isset($_SESSION['visit_count']))
{
    $_SESSION['visit_count']++; // Increment the visit count
}
else 
{
    $_SESSION['visit_count'] = 1; // Initialize visit count
}
// Display the visit count
echo "You have visited this page " . $_SESSION['visit_count'] . " times.";
?>
