<html>
<head>
    <title>10-ternary</title>
</head>

<body>
    
<?php 
 
 $hello="Welcome !";


if (isset($_GET['gender-choice'])){
    $gender=($_GET['gender-choice']);
    echo ($gender=="M") ?  $hello : "Not Welcome";
}








?>

<form action="10-ternary.php" action="get">
    <div>
<label for="gender">Man or Woman:</label>
<input type="radio" name="gender-choice" value="M">
<label for="gender-man">Man</label>
<input type="radio" name="gender-choice" value="W">
<label for="gender-woman">Woman</label>
</div>
<input type="submit" name="submit" value="Send">
</form>


</body>


</html>



