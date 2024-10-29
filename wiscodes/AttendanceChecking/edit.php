<?php


    include 'db.php';

    if (isset($_GET['id'])){
        $id=intval($_GET['id']);

        $sql= "SELECT * FROM students WHERE id=$id";
        $result=$conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $name =$row ['name'];
            $year= $row ['year'];
        }
        else{
            echo "<p class='error-msg'>No Employee found with that id</p>";
        }
    }
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $year=$_POST['year'];
    $id=intval($_POST['id']);


    if (!empty($name) && !empty($year)){
        $sql="UPDATE students SET name='$name', year='$year' WHERE id=$id";
        
        if ($conn->query($sql)=== TRUE){
            echo "<p class='success-msg'>Successfully edited</p>";
        } else {
            echo "<p class='error-msg'>Error. Not deleted" . $sql . "<br>" . $conn->error ."</p>";
        }

    } else{
        echo "<p class='error-msg'>Please fill in all fields</p>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Attendance</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #007BFF;
            margin-top: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        input[type="text"], input[type="submit"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .success-msg, .error-msg {
            margin-top: 10px;
            padding: 10px;
            text-align: center;
            width: 80%;
            border-radius: 4px;
        }

        .success-msg {
            background-color: #28a745;
            color: #fff;
        }

        .error-msg {
            background-color: #dc3545;
            color: #fff;
        }

        a {
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Edit List</h2>

    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        Year Level: <input type="text" name="year" value="<?php echo $year; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="index.php">Back to Attendance List</a>
</body>
</html>