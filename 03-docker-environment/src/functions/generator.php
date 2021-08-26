<html>
<head>
    <title>Random words</title>
</head>

<body>
    
<?php

function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>

<h1>Generate a new word</h1>
<form method="post" action="" id="form1">       
    <button type="submit" form="form1" >Generate</button>
</form>
<p>
<?php 
$word_1=rand(1,5);

echo generaterandomString($word_1); 

?>
</p>
<p>
    <?php       
$word_2=rand(7,15);
echo generaterandomString($word_2);
?>
</p>















</body>









</html>