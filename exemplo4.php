<?php

// Não vejo nenhuma resposta que tenha abordado o fato de que letras maiúsculas são caracteres diferentes de minúsculas para count_chars ()

if (isAnagram('Polo','pool')) {
    print "Is anagram";
} else {
    print "This is not an anagram";
}

function isAnagram($string1, $string2)
{
    // quick check, eliminate obvious mismatches quickly
    if (strlen($string1) != strlen($string2)) {
        return false;
    }

    // Handle uppercase to lowercase comparisons
    $array1 = count_chars(strtolower($string1));
    $array2 = count_chars(strtolower($string2));

    // Check if 
    if (!empty(array_diff_assoc($array2, $array1))) {
        return false;
    } 
    if (!empty(array_diff_assoc($array1, $array2))) {
        return false;
    } 

    return true;
}
