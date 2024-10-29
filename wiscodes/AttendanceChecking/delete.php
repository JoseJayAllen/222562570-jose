<?php

    include "db.php";

    if (isset($_GET['id'])){
        $id=intval($_GET['id']);

        $sql= "DELETE FROM students WHERE id=$id";
        if ($conn->query($sql)=== TRUE){

        } else {
            echo "Error. Not deleted" . $sql . "<br>" . $conn->error;
        }


    }

    header("Location: index.php?message=deleted");
?>

