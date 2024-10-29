<?php
    include "Database.php";

    $sql="Select * from game";
    $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>
<body>
    <h2>Games</h2>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows >0){
            while ($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['genre'] . "</td>";
                echo "<td><a href= 'Remove.php?id=" .$row['id'] . "'>Delete</a></td>";
                echo "<td><a href= 'EditGame.php?id=" .$row['id'] . "'>Edit</a></td>";
                echo "<tr>";

            }
        }
        else{
            echo "<tr><td colspan='3'>No Games Found.</td></tr>";
        }
        ?>
    </table> 
    <a href="AddGame.php">Add New Game</a>   
</body>
</html>