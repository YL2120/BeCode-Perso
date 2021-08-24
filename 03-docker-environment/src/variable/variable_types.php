

<html>
  <head><title>Variables types</title></head>
  <body>
    <?php $name="Yassine"; 
          $age=25;
          $color="brown";
          $family= array(
              0=> "Yassine",
              1=>"Redouane",
              2=>"Azzedine",
              3=>"Jamal"
          );
          $hungry= true;
    ?>
  	<p>Hi, my name is <?php echo $name; ?> !</p>
    <p>I am <?php  echo $age; ?> years old </p>
    <p>My eyes are <?php  echo $color; ?> </p>
    <p>The first person in my family is <?php echo $family[0]; ?></p>
    <p>Is he hungry ? <?php echo $hungry; ?> </p>
  </body>
</html>