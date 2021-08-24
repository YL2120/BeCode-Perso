<html>
<head>
    <title>7-School sucks</title>
</head>

<body>

<?php
 if(isset($_GET['note'])){
     $note=$_GET['note'];
    if($note<4){
        echo "This work is really bad. What a dumb kid! ";
    }else if(($note>5) && ($note<=9) ){
        echo "This is not sufficient. More studying is required.";
    }else if(($note==10) ){
        echo "barely enough!";
    }else if(($note>=11) && ($note<=14) ){
        echo "Not Bad!";
    }else if(($note>=15) && ($note<=18) ){
        echo "Bravo, bravissimo!";
    }else if(($note>19) && ($note<=20) ){
        echo "Too good to be true : confront the cheater!";
    }


 }





?>
    
<form action="7-school.php" method="get">
<label for="note">Note:</label>
<input type="text" name="note">
<input type="submit" name="Submit" value="Send" >






</form>




</body>











</html>