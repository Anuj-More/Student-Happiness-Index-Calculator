<?php
// Step 1: Form connection with phpmyadmin
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "happiness_index";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Extract the last "Entry_No" value from "basic_info" table
$sql = "SELECT Entry_No FROM basic_info ORDER BY Entry_No DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $data = $row["Entry_No"];
  }
} else {
  $data = 0; // If no rows found, set default value
}

// Step 3: Make sure the file does not print anything but only returns the desired value
echo $data;

// Close connection
mysqli_close($conn);
?>
