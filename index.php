<?php
    $partite =array(
        array("milan","fiorentina",11,24),
        array("juve","roma",12,17),
    )
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>partite</h1>
    <?php for($i=0;$i < count($partite);$i++) 
        echo "partita 1:" .$partite[$i][0]. "<br>";
        
    ?>
</body>
</html>