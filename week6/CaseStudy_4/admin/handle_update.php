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

// get data
$request = $_POST;

$coffeeNameDict = array();
$coffeeNameDict['just-java'] = 'Just Java';
$coffeeNameDict['house-blend-s'] = 'Cafe Au Lait (single)';
$coffeeNameDict['house-blend-d'] = 'Cafe Au Lait (double)';
$coffeeNameDict['iced-cappuccino-s'] = 'Iced Cappuccino (single)';
$coffeeNameDict['iced-cappuccino-d'] = 'Iced Cappuccino (double)';


foreach (array_keys($request) as $coffeeName) {
  // echo $key . " " . $request[$key] . "\n";
  $sqlQuery = "UPDATE CoffeeMenu SET price=" . $request[$coffeeName] . " WHERE name='" . $coffeeNameDict[$coffeeName] . "';";
  if (mysqli_query($conn, $sqlQuery)) {
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}
header("Location: http://192.168.56.2/f31ee/week6/CaseStudy_4/admin.php");
exit();

mysqli_close($conn);