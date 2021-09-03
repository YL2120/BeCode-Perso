<html>
<head>
    <title>Update the hike !</title>
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




/* if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["name"]) && isset($_POST["difficulty"]) && isset($_POST["distance"]) && isset($_POST["duration"]) && isset($_POST["height_difference"]) ){
    $name = $_POST["name"];
    $difficulty = $_POST["difficulty"];
    $distance = $_POST["distance"];
    $duration = $_POST["duration"];
    $height_difference = $_POST["height_difference"];
 
    if(empty($name) || empty($difficulty) ||  empty($distance) || empty($duration) ||  empty($height_difference)){
        $status ="All fields are compulsory.";
    }
    else if (strlen($name) > 100 || !preg_match('/[a-zA-Z]/', $name ) ){
            $status = "Please enter a valid name";
        } 
    else if ( !preg_match( '/\d/', $distance) || !preg_match( '/\d/', $height_difference )){
            $status = "Please enter only numbers";
        }
    else if (!preg_match("/^(2[0-3]|[01]?[0-9]):[0-5][0-9]$/", $duration)){
            $status="Please enter a valid duration ex: 01:15 or 1:15";
        }
*/
$name = $_GET['name'];
$query="SELECT difficulty,distance,duration,height_difference from hiking.Hiking where name='$name' ";
$result = $conn-> query($query);  // runs the query
$final = $result->fetch(PDO::FETCH_ASSOC); //associative array thanks to fecthAll
print_r($final);
if ($final) {
?>

<form action="" method="POST">

<div>
<label for="name">Name:</label>
<input type="text" name="name" value="<?php echo $name ; ?>">
</div>
<div>
<p>Difficulty : </p>
<div>
    <input type="radio" id="easy" name="difficulty" value="easy">
    <label for="easy">Easy</label>
</div>
<div>
    <input type="radio" id="middle" name="difficulty" value="middle">
    <label for="middle">Middle</label>
</div>
<div>
    <input type="radio" id="hard" name="difficulty" value="hard">
    <label for="hard">Hard</label>
</div>
<div>
    <input type="radio" id="veryHard" name="difficulty" value="very hard">
    <label for="veryHard">Very hard</label>
</div>
</div>
<div>
<label for="distance">Distance:</label>
<input type="text" name="distance" value="<?php echo $final['distance'] ?>">
</div>
<div>
<label for="duration">Duration:</label>
<input type="text" name="duration" value="<?php echo $final['duration'] ?>">
</div>
<div>
<label for="height_difference">Height difference:</label>
<input type="text" name="height_difference" value="<?php echo $final['height_difference'] ?>">
</div>
<?php } ?>
<input type="submit" value="Update" name="update">
<div>
    <?php 
    echo $status 
    ?>
</div>

</form>












</body>








</html>