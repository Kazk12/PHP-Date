<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php 


$dateMTN = new DateTime("2016-03-01");
$date1 = new DateTime("2016-02-01");

$interval = $dateMTN -> diff($date1);

echo "Le nombre de jour dans le mois de février de l'année 2016 est de  :" . " " .$interval->days . " jours";

?>
    
</body>
</html>