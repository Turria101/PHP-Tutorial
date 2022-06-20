<?php


// methods  internal-function 'String'

//length
$string ='ASTEILA' ; 
echo strlen($string);
//str-pos
echo strpos($string,1);
//substr
echo substr($string,0,strlen($string)-2);
//str_repeat
echo str_repeat($string,3);
//str_replace
echo str_replace("ASTEILA","BOBUPASME",$string);
// str_word
echo str_word_count($string);
//str_spilt // string to array 
//$newarr=str_split($string ,",",3);
//echo print_r($newarr);






?>