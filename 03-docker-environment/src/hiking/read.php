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
        foreach ($final as $row){ ?>
            <tr>
            <td> <?php echo $row['name']; ?></td>
            <td> <?php echo $row['difficulty']; ?> </td>
            <td> <?php echo $row['distance']; ?></td> 
            <td> <?php echo $row['duration']; ?> </td> 
            <td> <?php echo $row['height_difference']; ?> </td>
            <td><a href="update.php?name=<?php echo $row['name']; ?>">Update the hike</a></td>
        </tr>
       <?php }
       
    }
    else{
        echo "0 result";
    }

    $conn=null; //closing connection


?>


</table>








</body>















</html>