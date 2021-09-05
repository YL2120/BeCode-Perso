<html>
<head>
    <title>Form</title>
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

$status = "";
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
    else {
        
        $sql = "INSERT INTO Hiking (name,difficulty,distance,duration,height_difference) VALUES (:name,:difficulty,:distance,:duration,:height_difference)";

                $stmt = $conn->prepare($sql);

                
                $stmt->bindParam(":name", $name);
                $stmt->bindParam(":difficulty", $difficulty);
                $stmt->bindParam(":distance", $distance);
                $stmt->bindParam(":duration", $duration);
                $stmt->bindParam(":height_difference", $height_difference);

                $stmt->execute();
        
        
        
        
        $status="The hike has been added successfully.";
    }
    
}
else{
    echo "Fill the form please.";
}
}

?>   

<form action="" method="POST">

<div>
<label for="name">Name:</label>
<input type="text" name="name" value="">
</div>
<div>
<p>Difficulty : </p>
<div>
    <input type="radio" id="Easy" name="difficulty" value="Easy">
    <label for="Easy">Easy</label>
</div>
<div>
    <input type="radio" id="Middle" name="difficulty" value="Middle">
    <label for="Middle">Middle</label>
</div>
<div>
    <input type="radio" id="hard" name="difficulty" value="Hard">
    <label for="Hard">Hard</label>
</div>
<div>
    <input type="radio" id="veryHard" name="difficulty" value="Very Hard">
    <label for="Very Hard">Very hard</label>
</div>
</div>
<div>
<label for="distance">Distance:</label>
<input type="text" name="distance" value="">
</div>
<div>
<label for="duration">Duration:</label>
<input type="text" name="duration" value="">
</div>
<div>
<label for="height_difference">Height difference:</label>
<input type="text" name="height_difference" value="">
</div>
<input type="submit" value="Send">
<div>
    <?php echo $status ?>
</div>

</form>

</body>
</html>