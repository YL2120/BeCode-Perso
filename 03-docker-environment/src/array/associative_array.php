<?php

 $me=array(
     "Firstname" => "Yassine",
     "Lastname"  => "Layachi",
     "Age" => 26,
     "Season" => "Summer",
     "Soccer" => true,
     "favorite_movies"=> ["Heat","Green Line","The 7 mercenaries","Rush Hour","The terminal","Bourne","Inside Man","Malcolm X"]
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

$b_hobbies= count($brother["hobbies"]); // count the numbers of values in an array
$my_hobbies= count($me["hobbies"]);
$total=$b_hobbies+$my_hobbies;

array_push($me["hobbies"],"Taxidermy");

$me["Lastname"]="Durand";

$soulmate=array(
   "Firstname" => "Aicha",
   "Lastname"  => "Malik",
   "Age" => 24,
   "Season" => "Summer",
   "Soccer" => false,
   "favorite_movies"=> ["Green Line","The intern","The terminal","Shrek"],
   "hobbies"=>["Art","Cooking","Reading","Movies"]
);

// perform array operation
$possible_hobbies_via_intersection = array_intersect($me["hobbies"],$soulmate["hobbies"]);
$possible_hobbies_via_merge = array_merge($me["hobbies"],$soulmate["hobbies"]);

$web_development=[
   "frontend" => [],
   "backend"  => []
];

array_push($web_development["frontend"],"xhtml");
array_push($web_development["backend"],"Ruby on Rails");
array_push($web_development["frontend"],"CSS");
array_push($web_development["frontend"],"Flash");
array_push($web_development["frontend"],"Javascript");
array_push($web_development["backend"],"Javascript");



$web_development["frontend"][0] = "html";
unset($web_development["frontend"][2]);

 echo '<pre>';
print_r($web_development);


 //  print_r($possible_hobbies_via_intersection);
//  print_r($possible_hobbies_via_merge);
 // print_r($total);
// print_r($me);
echo '</pre>';







?>