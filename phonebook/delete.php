<?php
    include 'db.php';

    if (isset($_GET['id'])){
        $id =$_GET['id'];

        $sql= "DELETE FROM contacts WHERE id=$id";
        if($conn->query($sql)===TRUE){
            echo "Contact successfully deleted!";
            //Redirect to index.php
            echo '<meta http-equiv="refresh" content="2;url=index.php">';
        }else{
            echo "Error deleting record." .$sql. "<br>" . $conn->error;
            echo '<meta http-equiv="refresh" content="2;url=index.php">';
        }
    }
    
?>