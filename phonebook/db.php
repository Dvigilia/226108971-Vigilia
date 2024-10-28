<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbnme = "phonebook";

    //Create connection
    $conn=new mysqli($servername, $username, $password, $dbnme);

    if($conn->connect-error){
        die("Connection failed". $conn->connect_error);
    }
    echo "Connected successfully";
?>