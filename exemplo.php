<?php

function factorise($word)
{
    // Take a number, split it into individual letters, and multiply those values together
    // So long as both words use the same value, you can amend the ordering of the factors 
    // as you like

    $factors = array("e" => 2, "t" => 3, "a" => 5, "o" => 7, "i" => 11,
        "n" => 13, "s" => 17, "h" => 19, "r" => 23, "d" => 29,
        "l" => 31, "c" => 37, "u" => 41, "m" => 43, "w" => 47,
        "f" => 53, "g" => 59, "y" => 61, "p" => 67, "b" => 71,
        "v" => 73, "k" => 79, "j" => 83, "x" => 89, "q" => 97,
        "z" => 101);

    $total = 1;

    $letters = str_split($word);

    foreach ($letters as $thisLetter) {
        if (isset($factors[$thisLetter])) {
            // This will skip any non-alphanumeric characters.
            $total *= $factors[$thisLetter];
        }
    }

    return $total;
}

$searchWord = "hasted";

$dict = array("abde", "des", "klajsd", "ksj", "hat", "hats");

$searchWordFactor = factorise($searchWord);

foreach ($dict as $thisWord) {
    // Factorise each word that we're looking for
    // If the word we've just factored is an exact divisor of the target word, then all the 
    // letters in that word are also present in the target word
    // If you want to do an exact anagram, then check that the two totals are equal

    $dictWordFactor = factorise($thisWord);

    if (($searchWordFactor % $dictWordFactor) == 0) {
        print ($thisWord . " is an anagram of " . $searchWord . "<br/>");
    }
}
