<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

date_default_timezone_set("Europe/Paris");
// echo date("h:i:s A");


$gmt1 = mktime(15, 0, 0, 8, 2, 2016); // 15h, 0min, 0sec, 8eme mois, 2eme jour, année 2016

echo "Le timestamp du mardi 2 août 2016 à 15h00 est : " . " " . gmdate('d-m-y', $gmt1) . " " . date("H:i:s",$gmt1);


?>
    
</body>
</html>