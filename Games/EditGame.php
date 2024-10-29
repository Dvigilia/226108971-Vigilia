<?php
    include 'Database.php';


    if (isset($_GET['id'])){
        $id =$_GET['id'];

        $sql= "SELECT * FROM game WHERE id=$id";
        $result=$conn->query($sql);
        if($result->num_rows > 0 ){
            $row =$result->fetch_assoc();
            $title =$row['title'];
            $genre =$row['genre'];
        }else{
            echo "No Games found with this id.";
            echo '<meta http-equiv="refresh" content="2;url=View.php">';
        }
    }
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $title=$_POST['title'];
    $genre=$_POST['genre'];
    $id=$_POST['id'];

    if(!empty($title) && !empty($genre)){
        $sql="UPDATE game SET title='$title', genre='$genre' WHERE id=$id";
        if($conn->query($sql)===TRUE){
            echo "Game Successfully Updated!";
            //Redirect to View.php
            echo '<meta http-equiv="refresh" content="2;url=View.php">';
        }else{
            echo "Error updating record." .$sql. "<br>" . $conn->error;
            echo '<meta http-equiv="refresh" content="2;url=View.php">';
        }
    }else{
        echo "Please fill in all fields.";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h2>Edit a New Game</h2> 
    <form method="post" action="EditGame.php">
        <input type="hidden" name="id" value=<?php echo $id; ?>>
        Title: <input type="text" name='title'> <br><br>
        Genre: <input type="text" name="genre"> <br><br>
        <input type="submit" value="Update Game">
    </form>
    <a href="View.php">Back to Game List</a>
</body>
</html>
