<?php
$servername = "localhost";
$username = "f32ee";
$password = "f32ee";
$dbname = "f32ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sqlQuery = "ALTER TABLE CoffeeMenu ADD category VARCHAR(64)";
$result = mysqli_query($conn, $sqlQuery);
if ($result) {
  echo "Successfully add column to table";
} else {
  mysqli_error($conn);
}


mysqli_close($conn);