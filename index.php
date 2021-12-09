<?php
// data and array section

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

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $pagelle=[
        [
            'name' =>'Ros',
            'voting' => [10,7,9,8,10,9],
        ],
        [
            'name' => 'Fabio',
            'voting' => [2,2,3,1,4,6,3]
        ]
    ];

    $ads = [
        [
            'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
            'link' => 'https://www.google.com',
            'is_active' => true,
        ],
        [
            'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
            'link' => 'https://www.facebook.com',
            'is_active' => true,
        ],
        [
            'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
            'link' => 'https://codepen.io',
            'is_active' => false,
        ],
        [
            'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
            'link' => 'https://laravel.com',
            'is_active' => false,
        ],
        [
            'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
            'link' => 'https://www.php.net',
            'is_active' => true,
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
    
<!-- snack 1 blocco 1 -->
    <h1>partite</h1>
    <?php for($i=0;$i < count($partite);$i++) 
        echo "partita" .$i. ":" .$partite[$i][0]. " - " .$partite[$i][1]. " | " .$partite[$i][2]. " : " .$partite[$i][3]."<br>";
        
    ?>

<!-- snack 2 blocco 1 -->
<h1>Get</h1>
    <?php 
        if((strlen($name) > 3)&&(strpos($mail,'@'))&&(strpos($mail,'.'))&&(is_numeric($age)))
        echo "accesso riuscito";
        else
        echo "accesso non riuscito"
    ?>   

<!-- snack 3 blocco 1 -->
<h1>Posts</h1>
    
    <?php
        $arrkeys=array_keys($posts);
        for($i2=0;$i2<count($posts);$i2++){ 
            echo $arrkeys[$i2]. "<br>";
            $selection=$arrkeys[$i2];
            $selectedarray=$posts[$selection];
            for($i3=0;$i3<count($selectedarray);$i3++){
                $elprint=$selectedarray[$i3];
                echo "title : ".$elprint[title]. "<br>";
                echo "author : ".$elprint[author ]. "<br>";
                echo "text : ".$elprint[text]. "<br> <br>";
            }
        }    
    ?>


<!-- snack 4 blocco 1 -->
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

<!-- snack 5 blocco 1 -->
<h1>Paragrafi</h1>

    <?php
        $paragrafo="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti placeat, atque aperiam ab culpa adipisci quos natus porro libero, nam architecto vel sed laboriosam? Explicabo ut officia delectus dicta expedita ex esse. Tenetur tempore dolore, quos aut sunt illum repellendus dolor? In ratione cum expedita fugiat quia veniam nisi ut reprehenderit amet vero ipsum, exercitationem adipisci? Aspernatur enim vero obcaecati omnis exercitationem temporibus, voluptas vitae. Soluta voluptatibus, quod placeat neque magni voluptatum dolor cum eum iure totam assumenda harum perferendis tempora laudantium omnis quam error ut nemo eligendi illum. Ipsum minima nemo excepturi iusto a dolores necessitatibus sint ab molestiae!";
        $paragrafi=explode(".",$paragrafo);
        print_r($paragrafi);
    ?>


<!-- snack 6 blocco 1 -->
<h1>Stampiamo</h1>
    
    <div class="green" style="background-color: lightgreen">
        <?php
            $pm=$db['pm'];
            for($j2=0;$j2<count($pm);$j2++){
                print_r($pm[$j2][name] ."\n");
                print_r($pm[$j2][lastname] ."<br>");
            }
        ?>
    </div>
    <div class="grey" style="background-color: lightgrey">
        <?php
            $tc=$db['teachers'];
            for($j2=0;$j2<count($tc);$j2++){
                print_r($tc[$j2][name] ."\n");
                print_r($tc[$j2][lastname] ."<br>");
            }
        ?>
    </div>

<!-- snack 7 blocco 1 -->    
<h1>Voti</h1>

    <?php
        for($k=0;$k<count($pagelle);$k++){
            $total=0;
            $votesarr=$pagelle[$k][voting];
            for($k1=0;$k1<count($votesarr);$k1++){
                $vote=$votesarr[$k1];
                $total+=$vote;
            }
            $votesnum=count($votesarr);
            $nome=$pagelle[$k][name];
            $media = floor($total / $votesnum);
            echo "nome : ".$nome." media : ".$media."<br>";
        }
    ?>

<!-- snack 1 blocco 2 -->
<h1>Ads</h1>

    <?php 
        $usable= [];
        foreach($ads as $ad){
            foreach($ad as $key => $value){
                if($key == 'is_active' && $value == true) {
                    array_push($usable , $ad);
                }
            }
        } 
        $randomDisplay=rand(0,count($usable));
        ?>
        <a href="<?php echo $usable[$randomDisplay]['link'] ?>"><img src="<?php echo $usable[$randomDisplay]['image_path']?>" alt="" height="300px" width="300px"></a>
        <?php
    ?>


</body>
</html>