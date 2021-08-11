<?php

function countingAnagrams($str)
    {
        $str_arry = [];
        $anagrams = 0;
        $str_arry= explode(' ', $str);
        for ($i = 0; $i < count($str_arry); $i++) {
            $str_cmp = $str_arry[$i];
            for($k = 0; $k < count($str_arry); $k++){
                if($i != $k){
                    $str_rev = $str_arry[$k];
                    if (count_chars($str_cmp, 1) == count_chars($str_rev, 1))
                    {
                        unset($str_arry[$i]);
                        $str_arry = array_values($str_arry);
                        $anagrams++;
                    }
                }
            }
        }
        return $anagrams;
    }


echo  countingAnagrams('cars are residing on my arcs');
