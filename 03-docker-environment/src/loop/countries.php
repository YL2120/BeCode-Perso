<html>
<head>
    <title>Countries</title>
</head>

<body>
    

<?php

$countries=[
    "BE" => "Belgium",
    "FR" => "France",
    "DE" => "Germany",
    "NL" => "Netherlands",
    "GB" => "England",
    "MA" => "Morocco",
    "ES" => "Spain",
    "IT" => "Italy",
    "CH" => "Switzerland",
    "PT" => "Portugal"
];



?>

<form action="">

<select name="" id="">
<option value="country">Select a Country  </option>

<?php            
    foreach($countries as $key => $country){
?>

<option value="<?php echo $key; ?>"><?php echo $country; ?></option>

<?php } ?>

</select>

</form>










</body>

</html>