<?php

$dictionary = array("kayak");

$anagram = "kayak";

$anagramSorted = sortString($anagram);


foreach ($dictionary as $word)
{
    $wordSorted = sortString($word);
    if ($wordSorted == $anagramSorted)
    {
       echo 'true';
    }
}

function sortString($s)
{
    $chars = array();
    $length = strlen($s);
    for ($i=0;$i<$length;$i++)
    {
       $chars[] = $s[$i];
    }
    sort($chars);

    return implode("",$chars);
}
