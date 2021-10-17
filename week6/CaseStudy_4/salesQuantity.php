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
              <td class="menu-title"></td>
              <td>
                <h2>Total Quantities</h2>
              </td>
              <td>
                <h2>Total Revenue</h2>
              </td>
            </tr>
            <?php
            $sqlQuery2 = "SELECT category, SUM( sold ) AS totalQuantities, SUM( sold * price ) AS totalRevenue FROM CoffeeMenu GROUP BY category";
            $result2 = mysqli_query($conn, $sqlQuery2);

            if ($result2) {
              foreach ($result2 as $row) {
                # code...
                echo "<tr>";
                echo "<td><h2>" . $row['category'] . "</h2></td>";
                echo "<td>" . $row['totalQuantities'] . "</td>";
                echo "<td>" . $row['totalRevenue'] . "</td> ";
                echo "</tr>";
              }
            } else {
              mysqli_error($conn);
            }
            ?>
          </table>
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