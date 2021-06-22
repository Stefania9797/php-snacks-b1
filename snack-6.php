<?php
 
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>
    <!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
    <?php
    for ($i=0; $i < count($db) ; $i++) { 
        ?>
        <div style="width: 200px;background: grey;padding: 10px;">
            <h3><?= $db["teachers"][$i]["name"] ?></h3>
            <h3><?= $db["teachers"][$i]["lastname"] ?></h3>
        </div>
        <div style="width: 200px;background: green;padding: 10px;">
            <h3><?= $db["pm"][$i]["name"] ?></h3>
            <h3><?= $db["pm"][$i]["lastname"] ?></h3>
        </div>
        <?php
    }
    ?>
</body>
</html>