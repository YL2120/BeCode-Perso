<html>
    <head>
        <title>3b-Age_Gender</title>
    </head>
<body>
    


<!-- // 3. "Different greetings according to age" Exercise -->

<?php

// 3. "Different greetings according to age" Exercise


if (isset($_GET['age']) && isset($_GET['gender'])){
    $age=$_GET['age'];
    $gender=$_GET['gender'];
    // Form processing
    if($age < 12){
        if($gender=="Man"){
        echo "Hello cat !";
        }else{
            echo"Hello kitty !";
        }
    }else if ($age  >= 12 && $age  <= 18){
        if($gender=="Man"){
            echo "Hello teenager man !";
            }else{
                echo"Hello teenager woman !";
            }
    }else if ($age  >= 18 && $age  <= 115){
        if($gender=="Man"){
            echo "Hello adult man !";
            }else{
                echo"Hello adult woman !";
            }
    }else{
        if($gender=="Man"){
            echo "Wow! Still alive ? Are you a robot-MAN, like me ? Can I hug you ?";
            }else{
                echo "Wow! Still alive ? Are you a robot-WOMAN, like me ? Can I hug you ?";
            }
        
    };

    // some statement that removes all printed/echoed items

}

// Form (incomplete)
?>


<!-- // Form (incomplete) -->

<form method="get" action="3b-age_gender.php">
	<label for="age">Age:</label>
	<input type="text" name="age">
	<input type="submit" name="submit" value="Greet me now">
    <p>Gender : </p>
    <div>
        <input type="radio" name="gender" value="Man">
        <label for="man">Man</label>
        <input type="radio" name="gender" value="Woman">
        <label for="man">Woman</label>
    </div>

</form>


</body>

</html>