<?php

// ## Snack 1

// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    $partite = [
        [
            "squadraCasa" => "Napoli",
            "squadraOspite" => "Olimpia Milano",
            "puntiCasa" => rand(50,90),
            "puntiOspite" => rand(50,90),
        ],
        [
            "squadraCasa" => "Varese",
            "squadraOspite" => "Brescia",
            "puntiCasa" => rand(50,90),
            "puntiOspite" => rand(50,90),
        ],
        [
            "squadraCasa" => "Fortitudo Bologna",
            "squadraOspite" => "Reggiana",
            "puntiCasa" => rand(50,90),
            "puntiOspite" => rand(50,90),
        ],
        [
            "squadraCasa" => "Venezia",
            "squadraOspite" => "Cremona",
            "puntiCasa" => rand(50,90),
            "puntiOspite" => rand(50,90),
        ],
    ];
?>
<?php
    // Stampiamo a schermo tutte le partite con questo schema
    // Olimpia Milano - Cantù | 55-60    
    for($i = 0; $i < count($partite); $i++) {
        echo "<h2>" . $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | " . $partite[$i]["puntiCasa"] . " - " . $partite[$i]["puntiOspite"] . "</h2>";
    }
?>



<!-- ## Snack 2 -->

<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che -->
<?php

        $PersonalData= $_GET;
        var_dump($PersonalData);

    if (empty($data['name']) || empty($data['mail']) || empty($data['age']))
    {
        echo "Errore";
    }
    else if (strlen($data['name']) <= 3) {
        echo 'Accesso negato - nome troppo corto';
    }
    else if (strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false) {
        echo 'Accesso negato - mail inesistente (serve . e @)';
    }
    else if (!is_numeric($data['age'])) {
        echo 'Accesso negato - l età non è numerica';
    }
    else {
        echo 'Accesso negato';
    }

?>

<!-- name sia più lungo di 3 caratteri, -->
<!-- che mail contenga un punto e una chiocciola  -->
<!-- e che age sia un numero. -->
<!-- Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”  -->


