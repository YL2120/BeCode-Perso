<?php

function acronym ($string){
    $abbreviation=" ";
    $string=ucwords($string);
    $words=explode(" ","$string");
        foreach($words as $word)
        {
            $abbreviation .=$word[0];
        }
        return $abbreviation;

}

$becode="I Love BeCode";
$final_result=acronym($becode);

echo $final_result;


// solution found at https://gist.github.com/duncanmudulo/624e1d5d976b4d4865c1c3a4dc3eff86






?>