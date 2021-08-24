<html>
    <head>
        <title>3a-Age_greetings</title>
    </head>
<body>
    


<!-- // 3. "Different greetings according to age" Exercise -->
<?php

// 3. "Different greetings according to age" Exercise


if (isset($_GET['age'])){
    $age=$_GET['age'];
	// Form processing
    if($age < 12){
        echo "Hello kiddo !";
    }else if ($age  >= 12 && $age  <= 18){
        echo "Hello Teenager!";
    }else if ($age  >= 18 && $age  <= 115){
        echo "Hello Adult!";
    }else{
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    };

    // some statement that removes all printed/echoed items

}

// Form (incomplete)
?>



<!-- // Form (incomplete) -->

<form method="get" action="3a-age_greetings.php">
	<label for="age">Age:</label>
	<input type="text" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>


</body>

</html>


