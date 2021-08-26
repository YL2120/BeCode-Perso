<?php

/*function replace ($array){

    for($i=1;$i<count($array);$i++)
    {
        if (($array[$i]=="e") && ($array[$i-1]=="a"))
        {
            $array[$i-1]="æ";
            unset($array[$i]);
            array_values($array);

        }
    }
   
    $string=implode("",$array);
    return $string;

}

function opposite($array){

    for($i=1;$i<count($array);$i++)
    {
        if (($array[$i]=="æ") && ($array[$i-1]=="æ"))
        {
            $array[$i-1]="a";
            $array[$i]="e";

        }
    }
   
    $string=implode("",$array);
    return $string;

}
*/

$word_1="sphærotheca";
$new_1=preg_replace("/æ/","ae",$word_1);

$word_2="microsphaera";
$new_2=str_replace("ae","æ",$word_2);

echo $new_2;










?>