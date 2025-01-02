<?php

/*1. Count the number of vowels (a, e, i, o, u) in each string.
2. Reverse each string.
3. Print the original string and the modified strings along with their vowel counts.

You must use this array of strings:
$strings = ["Hello", "World", "PHP", "Programming"];

Your Output must look like this:
Original String: Hello, Vowel Count: 2, Reversed String: olleH

*/


$strings = ["Hello", "World", "PHP", "Programming"];

function vowelCount ($strings){
    $vowels= ['a', 'e', 'i', 'o', 'u'];
    $count= 0;

    for ($i=0; $i < strlen($strings); $i++){
        if (in_array ($strings[$i], $vowels)){
            $count++;
        }

    }
    return $count;
}

foreach ($strings as $item){
    $numbers_of_vowel = vowelCount ($item);
    $reverse = strrev($item);
    echo "Original String: " . $item. ", Vowel count: " . $numbers_of_vowel . ", Reversed String: " . $reverse. "</br>";
}
?>