<?php

echo "Guessing game started\n";

$random_number = rand(1, 100);

echo "Make a guess: ";

$handle = fopen("php://stdin", "r");
$guess = fgets($handle);

while ($guess != $random_number) {
    echo "Your guess is: $guess";

    if ($guess > $random_number) {
        echo "Lower\n";
    } else if ($guess < $random_number) {
        echo "Higher\n";
    } else {
        echo "You guessed it!\n";
        break;
    }
    echo "Make a guess: ";
    $guess = fgets($handle);
}