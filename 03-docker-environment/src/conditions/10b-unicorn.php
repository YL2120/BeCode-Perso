<html>
<head>
    <title>10b-unicorn</title>
</head>

<body>

<?php

if(isset($_GET["gender-choice"])){

    $gender=$_GET["gender-choice"];
    $human_gif='<iframe src="https://giphy.com/embed/bASySzJH6bsxG" width="464" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/human-body-bASySzJH6bsxG">via GIPHY</a></p>';
    $cat_gif='<iframe src="https://giphy.com/embed/ICOgUNjpvO0PC" width="480" height="359" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cat-humour-funny-ICOgUNjpvO0PC">via GIPHY</a></p>';
    $unicorn_gif='<iframe src="https://giphy.com/embed/j0kQJxo5mzGYb4EvWK" width="480" height="377" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/moodman-j0kQJxo5mzGYb4EvWK">via GIPHY</a></p>';
    
    echo   ($gender=="Human") ? $human_gif : ( $gender=="Cat" ? $cat_gif : $unicorn_gif);


}





?>

<form action="10b-unicorn.php" method="get">
<label for="gender">Are you a human, a cat or a unicorn ?</label>
<div>
    <input type="radio" name="gender-choice" value="Human">
    <label for="human">Human</label>
    <input type="radio" name="gender-choice" value="Cat">
    <label for="cat">Cat</label>
    <input type="radio" name="gender-choice" value="Unicorn">
    <label for="unicorn">Unicorn</label>
</div>
    <input type="submit" name="submit" value="Send">

</form>












</body>












</html>