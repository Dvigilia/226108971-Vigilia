<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include 'db.php'

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name =$_POST['name'];
        $phone =$_POST['phone'];

        if(!empty($name)&& !empty($phone)){
            $sql="INSERT INTO contact (name, phone) VALUES('$name','$phone')";

            if($conn->query($sql)===TRUE){
                echo "New contact added successfully!";

            }
            else{
                echo "Failed to add new contact.";
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
    <title>Adding New Contact</title>
</head>
<body>
    <h2>Add a new contact</h2>
    <form method="post" action="add.php">
        Name: <input type="text" name='name'> <br><br>
        Phone: <input type="text" name="phone"> <br><br>
        <input type="submit" value="Add Contact">
    </form>
    <a href="index.php">Back to Phonebook</a>
    
</body>
</html>