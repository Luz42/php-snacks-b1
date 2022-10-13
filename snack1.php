<?php

/*
Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.

Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.

Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 
*/

$campionato = [
    [
      'homeTeam' => [
                    'name' => 'Milano',
                    'points' => rand(0, 100) 
                ],
    
      'challengeTeam' => [
                        'name' => 'Torino',
                        'points' => rand(0, 100) 
                    ]
    ],
    [
        'homeTeam' => [
                      'name' => 'Genova',
                      'points' => rand(0, 100) 
                  ],
    
        'challengeTeam' => [
                        'name' => 'Chieti',
                        'points' => rand(0, 100) 
                    ]
    ],
    [
      'homeTeam' => [
                    'name' => 'Bari',
                    'points' => rand(0, 100) 
                ],
    
      'challengeTeam' => [
                        'name' => 'Potenza',
                        'points' => rand(0, 100) 
                    ]
    ],
];

var_dump($campionato);

    for($i=0; $i < count($campionato); $i++){
        $match = $campionato[$i];
?>

<div>
    <h4>Partita n. <strong><?= $i + 1 ?></strong></h4>


<?php

        for($j=0; $j < count($match); $j++){
            $homeTeam = $match['homeTeam'];
            $challengeTeam = $match['challengeTeam'];
        }

?>

    <p><?= $homeTeam['name'] . ' - ' . $challengeTeam['name'] . ' | ' . $challengeTeam['points'] . ' - ' . $homeTeam['points'] ?></p>

</div>

<?php
            
    }
?>