<?php

$names=["Yassine","Antoine","Thomas","Thibault","Lucas","Adrien","William"];


function display_names($array){

    for($i=0;$i<count($array);$i++)
    {
        echo "<p> Hello $array[$i] !</p>";
        echo "<hr>";
    }

}

display_names($names);













?>