<?php
    $array_matches = [
        [
           'match' => 'Lakers - Nuggets',
           'result'=> '102 - 99'
        ],
        [
            'match' => 'Magic - Celtics',
            'result'=> '100 - 125' 
        ],
        [
            'match' => 'Trail Blazers - Warriors',
            'result'=> '105 - 104'
        ],
        [
            'match' => 'Cavaliers - Knicks',
            'result'=> '113 - 115'
        ],
        [
            'match' => 'Suns - Spurs',
            'result'=> '130 - 110'
        ],
        [
            'match' => 'Bucks - Bulls',
            'result'=> '125 - 90'
        ]      
    ]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP-snack</title>
    </head>
    <body>
        <ul>
            <?php foreach($array_matches as $item){ ?>
                <li><?php echo $item['match'].' | '.$item['result']; ?></li>
            <?php } ?>
        </ul>
    </body>
</html>