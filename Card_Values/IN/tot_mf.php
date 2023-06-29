<?php
// Step 1: Form connection with phpMyAdmin
$servername = "localhost"; // Change it if necessary
$username = "root"; // Change it if necessary
$password = ""; // Change it if necessary
$dbname = "happiness_index"; // Change it if necessary

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Extract all entries of "f" value from "basic_info" table from "happiness_index" database
$sql = "SELECT * FROM basic_info WHERE department = 'IN' AND Gender='f'";
$resultf = $conn->query($sql);

// Step 2: Extract all entries of "m" value from "basic_info" table from "happiness_index" database
$sql = "SELECT * FROM basic_info WHERE department = 'IN' AND Gender='m'";
$resultm = $conn->query($sql);

// Step 3: Store the total number of entries from the above query in "fno" variable
$fno = $resultf->num_rows;
$mno = $resultm->num_rows;


// Step 4: Print the desired value at the end in a variable named "fno"
// echo $fno, $mno;

// Close the database connection
$conn->close();
?>
