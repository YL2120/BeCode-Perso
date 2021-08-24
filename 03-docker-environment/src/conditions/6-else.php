<html>
<head>
    <title>Girl Soccer Team</title>
</head>

<body>
<?php

$message="Sorry you don't fit the criteria";

if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender']) ){
    $name=$_GET['name'];
    $age=$_GET['age'];
    $gender=$_GET['gender'];

   if(($age>=21 && $age<=40) && ($gender=="Girl") ){
       $message= "welcome to the team !";
       
   }
   echo $message;

}


?>

    
 <form action="6-else.php" method="get">
 <div>
 <label for="name">Name:</label>
<input type="text" name="name">
</div>
<div>
<label for="age">Age:</label>
<input type="text" name="age">
</div>
<!-- <p>Gender:</p> -->
<div>
    <label for="gender-intro">Gender:</label>
    <input type="radio" name="gender" value="Boy">
    <label for="boy">Boy</label>
    <input type="radio" name="gender" value="Girl">
    <label for="girl">Girl</label>
</div>
<input type="submit" name="submit" value="Send">
 </form>



</body>

</html>