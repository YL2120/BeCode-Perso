<html>
<head>
    <title>Girl Soccer Team</title>
</head>

<body>
    
 <form action="5-girlteam.php" method="get">
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

 <?php

if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender']) ){
    if(($_GET['age']>=21 && $_GET['age']<=40) && ($_GET['gender']=="Girl") ){
        echo "welcome to the team !";
    }else{
        echo "Sorry you don't fit the criteria";
    }
}



?>


</body>








</html>