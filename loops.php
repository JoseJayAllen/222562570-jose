<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Activity 1</h1>
    <?php

    $count=2;

    while ($count <= 20){
        echo $count. " ";
        $count +=2;
    }
    ?>

    <?php

    $pass = "correct";

    $userInput = "";

    do {
        echo "Please enter the password: ";

        $userInput = trim(fgets(STDIN));

        if ($userInput !== $pass){
            echo "Incorrect password.\n";
        }
    } while ($userInput !== $pass);
        echo "Access Granted.\n";
    ?>

    <h1>Activity 3</h1>
    <?php 
    for ($i = 1; $i <=10; $i++){
        echo "7 x $i = " .(7*$i)." "; 
    }
    ?>

    <h1>Activity 4</h1>
    <?php

    for ($i = 1; $i <= 10; $i++){
        if ($i == 5){
            continue;
        }
        if ($i == 9)
            break;
        echo $i." ";
    }
    ?>

    <h1>Activity 5</h1>
    <?php
    $sum = 0;
    $num = 1;

    while ($num <=100){
        $sum += $sum;
        $num++;
    }
    echo "the sum of the numbers from 1 to 100 is: ".$sum;
    ?>

    <h1>Activity 6</h1>
    <?php
    $mov = ["The Shawshank Redemption", "Inception", "The Dark Knight","Interstellar","Parasite"];

    $counter = 1;

    foreach ($mov as $movie){
        echo $counter . ". " . $movie . "\n";
    }
    $counter++;
    ?>

    <h1>Activity 7</h1>
    <?php
    $stud = [
        "name" => "John",
        "age" => 21,
        "grade" => "A",
        "city" => "Baguio"
    ];

    foreach ($stud as $key => $value){
        echo "$key: $value<br>";
    }
    ?>

    <h1>Activity 8</h1>
    <?php
    $num = 5;
    $fac = 1;

    for ($i = $num; $i >= 1; $i--){
        $fac*=$i;
    }
    echo "the factorial of $num is: $fac";
    ?>

    <h1>Activity 9</h1>
    <?php
    for ($i = 1; $i <= 50; $i++){
        if ($i % 3 == 0 && $i % 5 == 0){
            echo "FizzBuzz ";
        }
        elseif ($i % 3 == 0){
            echo "Fizz ";
        }
        elseif ($i % 5 == 0){
            echo "Buzz ";
        }
        else{
            echo $i . " ";
        }
    }
    ?>

    <h1>Activity 10</h1>
    <?php
    echo "Please enter a number: ";
    $number = intval(trim(fgets(STDIN)));

    $Prime=true;

    if ($number <= 1) {
        $Prime = false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++){
            if ($number % $i == 0){
                $Prime = false;
                break;
            }
        }
    }

    if ($Prime) {
        echo "$number is a prime number.\n";
    } else{
        echo "$number is not a prime number.\n";
    }
    ?>

    <h1>Activity 11</h1>
    <?php
    $first = 0;
    $second = 1;
    $count = 0;
    $limit = 10;

    while ($count < $limit){
        echo $first . " ";

        $next = $first + $second;

        $first = $second;
        $second = $next;

        $count++;
    }
    ?>

    <h1>Activity 12</h1>
    <?php
    echo "Enter a word: ";
    $input = trim (fgets(STDIN));

    $reversed = "";

    $length = strlen($input);
    for ($i = $length - 1; $i >= 0; $i--){
        $reserved .= $input[$i];
    }

    echo "Reverved string: " . $reversed . "\n";
    ?>
</body>
</html>