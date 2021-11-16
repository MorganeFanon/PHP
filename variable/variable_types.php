<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name = "Morgane"; 
    $age = "31";
    $colour = "brown";
    $family []= "Michèle";
    $family []= "Fanny";
    $family []= "Pierre";
    ?>
    <p>Hi! My name is <?php echo $name ?>.</p>
    <p>I am <?php echo $age ?> years old.</p>
    <p>My eyes are <?php echo $colour ?>.</p>
    <p>The second member of my family is <?php echo $family[1] ?>.</p>
    <p>I would store this kind of information in a boolean variable</p>


</body>
</html>
