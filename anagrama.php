<?php

$palabra1 = "roma";
$palabra2 = "amro";

if(strlen($palabra1) !== strlen($palabra2)){
echo "não é um anagrama desde o início";
exit;
}

$pal1_array = str_split($palabra1);
$pal2_array = str_split($palabra2);
$aux = "";

for($i=0; $i<count($pal1_array); $i++){
	if( ($val = array_search($pal1_array[$i], $pal2_array))=== false ){
		echo "não é um anagrama"; exit;
	}
	//$aux.=$pal2_array[$val];
	unset($pal2_array[$val]);
	
}
echo "é anagrama";
