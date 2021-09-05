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

$name_edit = $_GET['name'];
$statement = $conn->prepare("SELECT id from hiking.Hiking where name=:name");
$statement->execute(['name' => $name_edit]); 
$id_array = $statement->fetch();
$id=$id_array['id'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
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
    else{
        $sql = "UPDATE Hiking 
                SET name=:name,
                    difficulty=:difficulty,
                    distance=:distance,
                    duration=:duration,
                    height_difference=:height_difference
                WHERE 
                    id=:id";

                $stmt = $conn->prepare($sql);

                
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(":name", $name);
                $stmt->bindParam(":difficulty", $difficulty);
                $stmt->bindParam(":distance", $distance);
                $stmt->bindParam(":duration", $duration);
                $stmt->bindParam(":height_difference", $height_difference);

                $stmt->execute();
        
        
        
        
        $status="The hike has been added successfully.";
    }
    }
}

// ID



// $name_edit = $_GET['name'];
$query="SELECT name,difficulty,distance,duration,height_difference from hiking.Hiking where id='$id' ";
$result = $conn-> query($query);  // runs the query
$final = $result->fetch(PDO::FETCH_ASSOC); //associative array thanks to fecthAll


if ($final) {
?>

<form action="" method="POST">

<div>
<label for="name">Name:</label>
<input type="text" name="name" value="<?php echo $final['name'] ; ?>">
</div>
<div>
<p>Difficulty : </p>
<div>
    <input type="radio" id="Easy" name="difficulty" value="Easy" <?php if($final["difficulty"]=="Easy") echo "checked"; ?> >
    <label for="Easy">Easy</label>
</div>
<div>
    <input type="radio" id="Middle" name="difficulty" value="Middle" <?php if($final["difficulty"]=="Middle") echo "checked"; ?>>
    <label for="Middle">Middle</label>
</div>
<div>
    <input type="radio" id="Hard" name="difficulty" value="Hard"  <?php if($final['difficulty']=="Hard") echo "checked"; ?>>
    <label for="Hard">Hard</label>
</div>
<div>
    <input type="radio" id="VeryHard" name="difficulty" value="Very Hard"  <?php if($final['difficulty']=="Very Hard") echo "checked"; ?> >
    <label for="Very Hard">Very hard</label>
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