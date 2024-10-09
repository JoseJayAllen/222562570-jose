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

    <h1>Activity 2</h1>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Validator</title>
    </head>
    <body>
        <form method="post" action="">
            <label> Please enter the password:</label>
            <input type="password" name="password">
            <input type="submit" value="Submit">
        </form>
        
    </body>
    </html>
    <?php

    $pass = "password123";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['password'])){
        $input_password = $_POST['password'];

        if ($input_password === $pass) {
            echo "Access Granted.";
        } else {
            echo "Incorrect password.";
        }
    }
    ?>

    <h1>Activity 3</h1>
    <?php 
    for ($i = 1; $i <=10; $i++){
        echo "7 x $i = " .(7*$i)."<br>"; 
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
        echo $counter . ". " . $movie . "<br>";
    $counter++;
    }
    ?>

    <h1>Activity 7</h1>
    <?php
    $stud = [
        "name" => "Alice",
        "age" => 20,
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

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prime Number Checker</title>
    </head>
    <body>
        <form method="post" action="">
            <label>Enter a number:</label>
            <input type ="number" name="number">
            <input type ="submit" value="check">
        </form>
    </body>
    </html>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])){
        $number = $_POST['number'];
        $is_prime = true;

        if ($number < 2){
            $is_prime = false;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++){
                if ($number % $i == 0) {
                    $is_prime = false;
                    break;
                }
            }
        }

        if ($is_prime){
            echo "$number is a prime number.";
        } else {
            echo "$number is not a prime number.";
        }
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
    <form method="POST" action="">
        <label for="inputString">Enter a string:</label>
        <input type="text" name="inputString" id="inputString" required>
        <input type="submit" value="Reverse String">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inputString'])) {
        $inputString = $_POST['inputString'];

        $reversedString ="";

        for ($i = strlen($inputString)-1; $i >= 0; $i--) {
            $reversedString .= $inputString[$i];
        }

        echo "Input: " . htmlspecialchars($inputString) . "<br>";
        echo "Output: " . htmlspecialchars($reversedString) . "";
    }
    ?>

</body>
</html>