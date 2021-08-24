<html>
    <head>
        <title>3-Age_greetings</title>
    </head>
<body>
    


<!-- // 3. "Different greetings according to age" Exercise -->




<!-- // Form (incomplete) -->

<form method="get" action="3-age_greetings.php">
	<label for="age">Age:</label>
	<input type="text" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php

// 3. "Different greetings according to age" Exercise


if (isset($_GET['age'])){
	// Form processing
    if($_GET['age'] < 12){
        echo "Hello kiddo !";
    }else if ($_GET['age']  >= 12 && $_GET['age']  <= 18){
        echo "Hello Teenager!";
    }else if ($_GET['age']  >= 18 && $_GET['age']  <= 115){
        echo "Hello Adult!";
    }else{
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    };

    // some statement that removes all printed/echoed items

}

// Form (incomplete)
?>

</body>

</html>


