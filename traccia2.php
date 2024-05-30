<?php

function calcolaMediaPari($numbers) {
    $sum = 0;
    $count = 0;

    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            $sum += $number;
            $count++;
        }
    }

    if ($count == 0) {
        return 0; 
    }

    return $sum / $count;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 

$media = calcolaMediaPari($numbers);

echo "La media dei numeri pari è: $media\n";
