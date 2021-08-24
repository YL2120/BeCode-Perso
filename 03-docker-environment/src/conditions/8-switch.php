<html>
<head>
    <title>7-School sucks</title>
</head>

<body>

<?php
 if(isset($_GET['note'])){
     $note=$_GET['note'];
    switch ($note){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4: 
            echo "This work is really bad. What a dumb kid!";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            echo "This is not sufficient. More studying is required.";
            break;
        case 10:
            echo "barely enough!";
            break;
        case 11:
        case 12:
        case 13:
        case 14:
            echo "Not bad!";
            break;
        case 15:
        case 16:
        case 17:
        case 18:
            echo "Bravo, bravissimo!";
            break;
        case 19:
        case 20:
            echo "Too good to be true : confront the cheater!";
            break;



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