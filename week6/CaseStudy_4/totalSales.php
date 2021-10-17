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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JavaJam Coffee House</title>
  <link rel="stylesheet" href="salesQuantity.css" />
</head>

<body>
  <div class="body">
    <header class="content-header">
      <img src="assets/javalogo.gif" alt="JavaJam Coffee" class="header-image" />
    </header>
    <div class="content-body">
      <nav>
        <a href="#">Sales quantities by product
          categories</a>
      </nav>
      <section class="content-wrapper">
        <div class="content-body-header">
          <table>
            <tr>
              <td>
                <h2>Name</h2>
              </td>
              <td>
                <h2>Sold</h2>
              </td>
              <td>
                <h2>Price</h2>
              </td>
              <td>
                <h2>Revenue</h2>
              </td>
            </tr>
            <?php
            $sqlQuery = "SELECT name, sold, price, sold * price AS revenue FROM CoffeeMenu";
            $result = mysqli_query($conn, $sqlQuery);

            if ($result) {
              foreach ($result as $row) {
                # code...
                echo "<tr>";
                echo "<td><h2>" . $row['name'] . "</h2></td>";
                echo "<td>" . $row['sold'] . " units</td>";
                echo "<td>$" . $row['price'] . "</td> ";
                echo "<td>$" . $row['revenue'] . "</td> ";
                echo "</tr>";
              }
            } else {
              mysqli_error($conn);
            }
            ?>
          </table>
          <div>
            <strong>
              Total Revenue: $
              <?php
              $sqlQuery2 = "SELECT sum(sold * price) AS totalRevenue FROM CoffeeMenu";
              $result2 = mysqli_query($conn, $sqlQuery2);
              if ($result2) {
                $row = mysqli_fetch_assoc($result2);
                echo $row['totalRevenue'];
              } else {
                mysqli_error($conn);
              }
              ?>
            </strong>
          </div>
        </div>
      </section>
    </div>
    <footer class="content-footer">
      <p>Copyright &copy; 2014 JavaJam Coffee House</p>
      <p>
        <a href="mailto:jason@nathaniel.com"><i>jason@nathaniel.com</i></a>
      </p>
    </footer>
  </div>
</body>

</html>