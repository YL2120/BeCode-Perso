<html>
    <head>
        <title>3b-Age_Gender</title>
    </head>
<body>
    


<!-- // 3. "Different greetings according to age" Exercise -->




<!-- // Form (incomplete) -->

<form method="get" action="4-age_gender.php">
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
<?php

// 3. "Different greetings according to age" Exercise


if (isset($_GET['age']) && isset($_GET['gender'])){
    // Form processing
    if($_GET['age'] < 12){
        if($_GET['gender']=="Man"){
        echo "Hello cat !";
        }else{
            echo"Hello kitty !";
        }
    }else if ($_GET['age']  >= 12 && $_GET['age']  <= 18){
        if($_GET['gender']=="Man"){
            echo "Hello teenager man !";
            }else{
                echo"Hello teenager woman !";
            }
    }else if ($_GET['age']  >= 18 && $_GET['age']  <= 115){
        if($_GET['gender']=="Man"){
            echo "Hello adult man !";
            }else{
                echo"Hello adult woman !";
            }
    }else{
        if($_GET['gender']=="Man"){
            echo "Wow! Still alive ? Are you a robot-MAN, like me ? Can I hug you ?";
            }else{
                echo "Wow! Still alive ? Are you a robot-WOMAN, like me ? Can I hug you ?";
            }
        
    };

    // some statement that removes all printed/echoed items

}

// Form (incomplete)
?>

</body>

</html>