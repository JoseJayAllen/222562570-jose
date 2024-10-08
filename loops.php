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

</body>
</html>