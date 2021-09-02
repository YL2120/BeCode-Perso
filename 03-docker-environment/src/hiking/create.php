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
    else if (!preg_match('/\\d{2}\\:\\d{2}\\:\\d{2}/', $duration)){
            $status="Please enter a valid duration ex: 01:15:00";
        }
    else {
        
        $sql = "INSERT INTO Hiking (name,difficulty,distance,duration,height_difference)
                VALUES 
                (:name,:difficulty,:distance,:duration,:height_difference)";

                $stmt = $conn->prepare($sql);

                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':difficulty', $difficulty);
                $stmt->bindParam(':distance', $distance);
                $stmt->bindParam(':duration', $duration);
                $stmt->bindParam(':distance', $height_difference);

                $stmt->execute();
        
        
        
        
        $status="Your message was sent";
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
    <input type="radio" id="veryHard" name="difficulty" value="veryHard">
    <label for="veryHard">Easy</label>
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