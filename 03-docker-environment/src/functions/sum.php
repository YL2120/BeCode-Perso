<?php



function sum($a,$b){
    if((is_numeric($a)==false|| is_numeric($b)==false))
    {
        echo "Error: argument is not a number.";
    }
    else{
    return $a +$b;
    }
}

$letter="a";
$result=sum($letter,2);

echo $result;


?>