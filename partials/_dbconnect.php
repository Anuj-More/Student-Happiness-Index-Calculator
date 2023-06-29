<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "happiness_index";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Sorry, we failed to connect");
    }
    // else{
    //     echo "Connection was successful";
    // }
    
?>