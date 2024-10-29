<?php

    include 'Database.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $title = isset($_POST['title']) ? $_POST['title'] : null;
        $genre = isset($_POST['genre']) ? $_POST['genre'] : null;

        if(!empty($title)&& !empty($genre)){
            $sql="INSERT INTO game (title, genre) VALUES('$title','$genre')";

            if($conn->query($sql)===TRUE){
                echo "New Game Added Successfully!";

            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
        }
        else{
            echo "Please fill in all the fields";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding New Game</title>
</head>
<body>
    <h2>Add a New Game</h2>
    <form method="post" action="AddGame.php">
        Title: <input type="text" name='title'> <br><br>
        Genre: <input type="text" name="genre"> <br><br>
        <input type="submit" value="Add Game">
    </form>
    <a href="View.php">Back to Game List</a>
    
</body>
</html>