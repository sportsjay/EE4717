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


$sqlQuery2 = "SELECT category, SUM( sold ) AS totalQuantities, SUM( sold * price ) AS totalRevenue FROM CoffeeMenu GROUP BY category";
$result2 = mysqli_query($conn, $sqlQuery2);

if ($result2) {
  foreach ($result2 as $row) {
    # code...
    echo $row['category'] . " " . $row['totalQuantities'] . " " . $row['totalRevenue'];
    echo '<br>';
  }
} else {
  mysqli_error($conn);
}



echo "<br>";

$sqlQuery = "SELECT price FROM CoffeeMenu  WHERE name='Just Java';";
$result = mysqli_query($conn, $sqlQuery);
if ($result) {
  $row = mysqli_fetch_assoc($result);
  echo array_keys($row) . " " . $row['price'];
} else {
  mysqli_error($conn);
}


mysqli_close($conn);