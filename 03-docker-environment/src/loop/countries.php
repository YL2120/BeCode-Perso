<html>
<head>
    <title>Countries</title>
</head>

<body>
    

<?php

$countries=["Belgium","France","Germany","Netherlands","England","Morocco","Spain","Italy","Switzerland","Portugal"];



?>

<form action="">

<select name="" id="">
<option value="country">Select a Country  </option>

<?php            
    foreach($countries as $country){
?>

<option value="<?php echo $country; ?>"><?php echo $country; ?></option>

<?php } ?>

</select>

</form>










</body>

</html>