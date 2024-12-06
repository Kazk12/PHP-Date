<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 



    $date = date("m/").date("d/").date("y");
    echo date('Y-m-d', strtotime($date. ' + 20 days'));


?>



    
</body>
</html>