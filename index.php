<?php
    $partite =array(
        array("milan","fiorentina",11,24),
        array("juve","roma",12,17),
    );
    $name=$_GET["name"];
    $mail=$_GET["mail"];
    $age=$_GET["age"];
    
    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

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
        echo "partita" .$i. ":" .$partite[$i][0]. " - " .$partite[$i][1]. " | " .$partite[$i][2]. " : " .$partite[$i][3]."<br>";
        
    ?>
    <h1>Get</h1>
    <?php 
        if((strlen($name) > 3)&&(strpos($mail,'@'))&&(strpos($mail,'.'))&&(is_numeric($age)))
        echo "accesso riuscito";
        else
        echo "accesso non riuscito"
    ?>   
    <h1>Posts</h1>
    
    <?php
        $arrkeys=array_keys($posts);
        for($i2=0;$i2<count($posts);$i2++){ 
            echo $arrkeys[$i2]. "<br>";
            $selection=$arrkeys[$i2];
            $selectedarray=$posts[$selection];
            for($i3=0;$i3<count($selectedarray);$i3++){
                $elprint=$selectedarray[$i3];
                echo "title : ".$elprint['title']. "<br>";
                echo "author : ".$elprint['author']. "<br>";
                echo "text : ".$elprint['text']. "<br> <br>";
            }
        }    
    ?>

    <h1>Random</h1>

    <?php
        $numbers = [];
        $number = rand(0,100);
        array_push($numbers,$number);
        for($j=0;$j<14;$j++){
            $number = rand(0,100);
            if(in_array($number,$numbers)){
                $j--;
            }
            else{
                array_push($numbers,$number);
            }
        }
        print_r($numbers);
    ?>
</body>
</html>