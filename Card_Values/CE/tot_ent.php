<?php
// Establish connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "happiness_index";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Execute query to count entries with department CE
$sql = "SELECT COUNT(*) as total FROM basic_info WHERE department='CE'";
$result = mysqli_query($conn, $sql);

// Extract total number of entries from query result
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $ce_total = $row["total"];
} else {
  $ce_total = 0;
}

// Close database connection
mysqli_close($conn);

// Print total number of entries for department CE
echo $ce_total;
?>
