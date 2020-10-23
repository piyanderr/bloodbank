<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        
        foreach($rooms as $room) {

            echo 'ID: '.$room->id.'<br>';
            echo 'Name: '.$room->name. '<br>';

        }

    ?>

        // ID: 1 
        // NAME: brye
        // ID: 2
        // NAME: piyander



</body>
</html>