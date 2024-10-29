<?php
    include 'db.php';


    if (isset($_GET['id'])){
        $id =$_GET['id'];

        $sql= "SELECT * FROM contacts WHERE id=$id";
        $result=$conn->query($sql);
        if($result->num_rows > 0 ){
            $row =$result->fetch_assoc();
            $name =$row['name'];
            $phone =$row['phone'];
        }else{
            echo "No Contacts found with this id.";
            echo '<meta http-equiv="refresh" content="2;url=index.php">';
        }
    }
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $id=$_POST['id'];

    if(!empty($name) && !empty($phone)){
        $sql="UPDATE contacts SET name='$name', phone='$phone' WHERE id=$id";
        if($conn->query($sql)===TRUE){
            echo "Contact Successfully Updated!";
            //Redirect to index.php
            echo '<meta http-equiv="refresh" content="2;url=index.php">';
        }else{
            echo "Error updating record." .$sql. "<br>" . $conn->error;
            echo '<meta http-equiv="refresh" content="2;url=index.php">';
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
<h2>Edit a New Contact</h2>
    <form method="post" action="edit.php">
        <input type="hidden" name="id" value=<?php echo $id; ?>>
        Name: <input type="text" name='name'> <br><br>
        Phone: <input type="text" name="phone"> <br><br>
        <input type="submit" value="Update Contact">
    </form>
    <a href="index.php">Back to Phonebook</a>
</body>
</html>
