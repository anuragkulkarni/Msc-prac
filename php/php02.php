<?php

function countVowel($userinput){
    $vowels=array('a','e','i','o','u','A','E','I','O','U');
    $vowelCount=0;
    
    // Loop through each character
    for ($i=0;$i< strlen($userinput);$i++){
    
        if(in_array($userinput[$i],$vowels)){
            $vowelCount++;
        }
    }
    echo "\nTotal vowels in '$userinput': ",$vowelCount,"\n";

}
// $userinput=readline("enter string:");
countVowel(readline("enter string:"));

?>