<html>
<head>
    <title>Table Hikes</title>
</head>
<body>
 <?php
$servername="mysql";
$username="root";
$password="root";
$port="3306";
try{
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=hiking",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "Connected succesfully";
} catch(PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>"; 
}


?>

<table>
<tr>
    <th>Name</th>
    <th>Difficulty</th>
    <th>Distance</th>
    <th>Duration</th>
    <th>Height Difference</th>
</tr>
<?php

    $sql= "SELECT name,difficulty,distance,duration,height_difference from hiking.Hiking";
    $result = $conn-> query($sql);  // runs the query
    $final = $result->fetchAll(PDO::FETCH_ASSOC); //associative array thanks to fecthAll

    if ($final) {
        foreach ($final as $row){
            echo "<tr><td>". $row["name"] . "</td><td>" . $row["difficulty"] ."</td><td>" . $row["distance"] . "km" . "</td><td>" . $row["duration"] . "</td><td>" . $row["height_difference"] . "m" ."</td></tr>";
        }
       
    }
    else{
        echo "0 result";
    }

    $conn=null; //closing connection


?>


</table>








</body>















</html>