<?php
    include 'Database.php';

    if (isset($_GET['id'])){
        $id =$_GET['id'];

        $sql= "DELETE FROM game WHERE id=$id";
        if($conn->query($sql)===TRUE){
            echo "Game successfully deleted!";
            //Redirect to index.php
            echo '<meta http-equiv="refresh" content="2;url=View.php">';
        }else{
            echo "Error deleting game." .$sql. "<br>" . $conn->error;
            echo '<meta http-equiv="refresh" content="2;url=View.php">';
        }
    }
    
?>