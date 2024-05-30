<?php

$temperature = [
    "Venezia" => 16, "Bari" => 32,
    "Roma" => 28, "Napoli" => 30,
    "Milano" => 4, "Palermo" => 14,
    "Torino" => 24, "Roccaraso" => -5000,
    "Lecce" => 27, "Genova" => 30,
    "Catania" => 11, "Cosenza" => 9,
];

foreach ($temperature as $city => $temp) {
    if ($temp < 10) {
        $weather = "freddo";
    } elseif ($temp <= 25) {
        $weather = "caldo";
    } else {
        $weather = "molto caldo";
    }

    echo "A $city fa $weather con $temp °C\n";
}