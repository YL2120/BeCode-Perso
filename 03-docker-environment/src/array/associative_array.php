<?php
 
 $me=array(
     "Firstname" => "Yassine",
     "Lastname"  => "Layachi",
     "Age" => 26,
     "Season" => "Summer",
     "Soccer" => true,
    //  "favorite_movies"=> ["Heat","Green Line","The 7 mercenaries","Rush Hour","The terminal","Bourne","Inside Man","Malcolm X"]
 );

 $me["hobbies"]=["Reading","Politics","Sport","History","Movies"];

 $brother=array(
    "Firstname" => "Redouane",
    "Lastname"  => "Layachi",
    "Age" => 17,
    "Season" => "Spring",
    "Soccer" => true,
   //  "favorite_movies"=> ["Heat","Green Line","The 7 mercenaries","Rush Hour","The terminal","Bourne","Inside Man","Malcolm X"]
);

$brother["hobbies"]=["Manga","Video Games","Sport","Fast-food"];

$me["brother"]=$brother;


 echo '<pre>';
print_r($me);
echo '</pre>';







?>