<?php
function ageCheck($age)
{
    //condition to check if age is 18 or above or not
    if ($age >= 18) {
        echo "you are eligeble";

    } else
        echo "you are not eligeble";
}

//calling the function and entering the number
ageCheck(readline("enter the age to check "));
?>