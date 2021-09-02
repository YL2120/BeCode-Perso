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
    $conn = new PDO("mysql:host=$servername;port=$port",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "Connected succesfully";
} catch(PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>"; 
}


?>   

<form action="" method="POST">

<div>
<label for="name">Name:</label>
<input type="text" name="name" value="">
</div>
<div>
<label for="difficulty">Difficulty:</label>
<input type="text" name="difficulty" value="">
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


</form>

</body>
</html>