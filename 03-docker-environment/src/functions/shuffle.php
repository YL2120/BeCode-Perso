<?php

// $str = 'This is going to be shuffled !';
// $str = str_shuffle($str);

// echo $str;


$string="According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are, 
the only important thing is that the first and last letter be at the right place. 
The rest can be a total mess and you can still read it without problem. 
This is because the human mind does not read every letter by itself but the word as a whole.";

$words=explode(" ",$string);

/* for($i=0;$i<count($words);$i++)
{
    $words[$i]=str_shuffle($words[$i]);
} 

$final_string=implode(" ",$words); 

print_r($final_string); */

foreach($words as $word)
{
    echo str_shuffle($word)." ";
}






?>