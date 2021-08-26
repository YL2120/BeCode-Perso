<?php


function volume($ray,$height){

    $result=$ray*$ray*3.14*$height*(1/3);
    $final_result=round($result,2);
    echo 'The volume of a cone which ray is ' .$ray. ' and height is ' .$height. ' = ' . $final_result . ' cm<sup>3</sup><br />';


}


volume(5,2);







?>