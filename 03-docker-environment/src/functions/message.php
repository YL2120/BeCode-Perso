<html>
<head>
    <title>message</title>
</head>

<body>
    
<?php

function feedback($message,$class="info"){
        
    $up=ucfirst($class);
    return "<div class=$class>$up: $message</div>";
}


?>

<?php echo feedback("Incorrect email address","Error"); ?>

</body>


</html>