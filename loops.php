<?php
echo "activity 1:\n";
echo "numbers from 1 to 10:\n";
$count=1;
while ($count <=10){
    echo $count . " ";
    $count++;
}
echo "\n";

echo "numbers from 1 to 20:\n";
$count=1;
while ($count <=20){
    if ($count % 2 == 0){
    echo $count . " ";
    }
    $count++;
}
echo "\n";

echo "Activity 2:\n";
$password = "";
do{
    echo "Please enter the password: ";
    $password = trim(fgets(STDIN));

    if ($password !== "password123"){
        echo "incorrect password.\n";

    }
} while ($password !== "password123");

echo "Access Granted.\n"

?>