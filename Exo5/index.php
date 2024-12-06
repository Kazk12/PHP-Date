<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

$dateMTN = new DateTime("now");
$date1 = new DateTime("2016-05-16");

$interval = $dateMTN -> diff($date1);

// var_dump($interval);

echo "La différence de jours entre la date de mtn et la date du 2016 05 16 est de :" . " " .$interval->days . " jours";



?>



    
</body>
</html>