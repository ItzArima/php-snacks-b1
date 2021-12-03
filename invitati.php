<?php 
    $invitati=[
        "luca","marco","laura","fabio","ros",
    ];
    
    if(in_array($_GET["name"],$invitati)){
        echo "ok";
    }
    else{
        echo "ko";
    }
?>