<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Maria', 'surname' => 'Rossi', 'gender' => 'F'],
    ['name' => 'Luca', 'surname' => 'Bianchi', 'gender' => 'M'],
    // Aggiungi altri utenti se necessario
];

foreach ($users as $user) {
    $name = $user['name'];
    $surname = $user['surname'];
    $gender = $user['gender'];

    if ($gender === 'M') {
        echo "Buongiorno Sig. $name $surname\n";
    } elseif ($gender === 'F') {
        echo "Buongiorno Sig.ra $name $surname\n";
    } else {
        echo "Buongiorno $name $surname\n";
    }
}


