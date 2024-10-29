<?php
    include "db.php";
    $sql="Select * from students";
    $result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Attendance</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h2{
            color: #007BFF;
            margin-top:20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table,th,td{
            border:1px solid #ddd;
        }
        th,td{
            padding: 12px;
            text-align: center;
        }
        th{
            background-color: #007BFF;
            color: #fff;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        a.action-link{
            text-decoration: none;
            color:#fff;
            padding: 6px 12px;
            border-radius: 4px;
            margin: 0 4px;
        }
        a.delete {
            background-color: #dc3545;
        }
        a.edit{
            background-color: #28a745;
        }
        a.add-new{
            background-color: #007BFF;
            color: #fff;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
            display: inline-block;
        }
        a.add-new:hover{
            background-color: #0056b3;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Attendance List</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Year Level</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        if ($result->num_rows >0){
            while ($row=$result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['name']. "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td><a href='delete.php?id=". $row['id'] . "'>Delete</a></td>";
                echo "<td><a href='edit.php?id=". $row['id'] . "'>Edit</a></td>";
                echo "</tr>";
            }
        }
        else{
            echo "<tr><td colspan='3'>Empty list</td></tr>";
    }

    ?>

    </table>
<br>
<a href="add.php" class="add-new">Add New Student</a>
</body>
</html>