<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  

<?php
$datastring = "gilang";
$dataint = 231;
$datafloat = 0;
$databool = true;
$dataarray = array("volvo","bmw","toyota");
?>

<h1><?php echo "$datastring ini adalah string" ?></h1><br>
<h1><?php echo "$dataint ini adalah integer" ?></h1><br>
<h1><?php echo "$databool ini adalah boolean" ?></h1><br>
<h1><?php echo "$datafloat ini adalah float" ?></h1><br>
<h1><?php var_dump($dataarray)?></h1><br>

</body>
</html>