<html>
    <head>
        <title>4-mothertongue</title>
    </head>
<body>
    


<!-- // 3. "Different greetings according to age" Exercise -->




<!-- // Form (incomplete) -->

<form method="get" action="4-mothertongue.php">
	<label for="age">Age:</label>
	<input type="text" name="age">
	
    <p>Gender : </p>
    <div>
        <input type="radio" name="gender" value="Man">
        <label for="man">Man</label>
        <input type="radio" name="gender" value="Woman">
        <label for="man">Woman</label>
    </div>
    <p>Do you speak English ?</p>
    <div>
        <input type="radio" name="english" value="Yes">
        <label for="yes">Yes</label>
        <input type="radio" name="english" value="No">
        <label for="no">No</label>
    </div>
    <input type="submit" name="submit" value="Greet me now">
</form>
<?php

// 3. "Different greetings according to age" Exercise


if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])){
    // Form processing
    if($_GET['age'] < 12){
        if($_GET['gender']=="Man"){
            if($_GET['english']=="Yes"){
                echo "Hello Boy !";
            }else{
                echo"Aloha boy !";
            }
        }else if ($_GET['gender']=="Woman"){
            if($_GET['english']=="Yes"){
                echo "Hello Girl !";
            }else{
                echo"Aloha Girl !";
            }
        }
    }else if ($_GET['age']  >= 12 && $_GET['age']  <= 18){
        if($_GET['gender']=="Man"){
            if($_GET['english']=="Yes"){
                echo "Hello teenager man !";
            }else{
                echo"Aloha teenager man !";
            }
        }else if ($_GET['gender']=="Woman"){
            if($_GET['english']=="Yes"){
                echo "Hello teenager girl !";
            }else{
                echo"Aloha teenager girl !";
            }
        }
    }else if ($_GET['age']  >= 18 && $_GET['age']  <= 115){
        if($_GET['gender']=="Man"){
            if($_GET['english']=="Yes"){
                echo "Hello adult Boy !";
            }else{
                echo"Aloha adult boy !";
            }
        }else if ($_GET['gender']=="Woman"){
            if($_GET['english']=="Yes"){
                echo "Hello adult Girl !";
            }else{
                echo"Aloha adult Girl !";
            }
        }
    }else{
        if($_GET['gender']=="Man"){
            if($_GET['gender']=="Man"){
                if($_GET['english']=="Yes"){
                    echo "Very old Boy !";
                }else{
                    echo"Aloha old boy !";
                }
            }else if ($_GET['gender']=="Woman"){
                if($_GET['english']=="Yes"){
                    echo "Very old Girl !";
                }else{
                    echo"Aloha old Girl !";
                }
            }
            }
        
    };

    // some statement that removes all printed/echoed items

}

// Form (incomplete)
?>

</body>

</html>