<?php
// 2. "Different greetings according to time" Exercise
date_default_timezone_set('Europe/Paris');
$now = date('H:i') ; // How to get the current time in PHP ? Google is your friend ;-)


// Test the value of $now AND display the right message according to the specifications.
if( $now >= "5" AND $now <="9"  ){
    echo("Good morning !");
} else if( $now >= "09:01" AND $now <="12:00" ){
    echo("Good day !");
}else if( $now >= "12:01" AND $now <="16:00" ){
    echo("Good afternoon !");
}else if( $now >= "16:01" AND $now <="21:00" ){
    echo("Good evening !");
}else if( $now >= "21:01" AND $now <="04:59" ){
    echo("Good night !");
}





?>