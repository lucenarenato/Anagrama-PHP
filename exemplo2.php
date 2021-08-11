<?php

// There's simpler way

function is_anagram($a, $b) {
    return(count_chars($a, 1) == count_chars($b, 1));
}


$a = 'brasileiro';
$b = 'ignorante';
echo is_anagram($a,$b);   // output: 1

$a = 'batman';
$b = 'barman';
echo is_anagram($a,$b);  // output (empty):

