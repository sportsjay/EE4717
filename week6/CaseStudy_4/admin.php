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
  <title>JavaJam Coffee House - Administrative</title>
  <link rel="stylesheet" href="admin.css" />
</head>

<body>
  <div class="body">
    <header class="content-header">
      <img src="assets/javalogo.gif" alt="JavaJam Coffee" class="header-image" />
    </header>
    <div class="content-body">
      <nav>
        <a href="#">Product Price Update</a>
      </nav>
      <section class="content-wrapper">
        <div class="content-body-header">
          <h1>Follow the Winding Road to JavaJam</h1>
        </div>
        <section class="content-body-content">
          <table>

            <tr>
              <td><input type="checkbox" name="just-java-checkbox" onchange="onCheck('just-java');" checked></input>
              </td>
              <td class="menu-title">Just Java</td>
              <td>
                <p>
                  Regular house blend, decaffeinated coffee, or flavor of the
                  day.
                </p>
                <p class="menu-price">Endless Cup $<?php
                                                    $sqlQuery = "SELECT price FROM CoffeeMenu WHERE name='Just Java'";
                                                    $result = mysqli_query($conn, $sqlQuery);
                                                    $row =  mysqli_fetch_assoc($result);
                                                    echo $row["price"];
                                                    ?></p>
              </td>
              <td>
                <form class="just-java" action="./admin/handle_update.php" method="POST">
                  <p>Endless Cup</p>
                  <input type="number" step="0.01" value="0.00" name="just-java" class="qty-input">
                  <input type="submit" value="update" />
                </form>
              </td>
              </td>
            </tr>

            <tr>
              <td><input type="checkbox" name="house-blend-checkbox" onchange="onCheck('house-blend');" checked></input>
              </td>
              <td class="menu-title">Cafe au Lait</td>
              <td>
                <p>
                  House blended coffee infused into a smooth, steamed milk.
                </p>
                  <label>Single $<?php
                                  $sqlQuery = "SELECT price FROM CoffeeMenu WHERE name='Cafe au Lait (single)'";
                                  $result = mysqli_query($conn, $sqlQuery);
                                  $row =  mysqli_fetch_assoc($result);
                                  echo $row["price"];
                                  ?></p></label>
                  <label>Double $<?php
                                  $sqlQuery = "SELECT price FROM CoffeeMenu WHERE name='Cafe au Lait (double)'";
                                  $result = mysqli_query($conn, $sqlQuery);
                                  $row =  mysqli_fetch_assoc($result);
                                  echo $row["price"];
                                  ?></p></label>
              </td>
              <td>
                <form class="house-blend" action="./admin/handle_update.php" method="POST">
                  <p>Single</p>
                  <input type="number" step="0.01" value="0.00" name="house-blend-s" class="qty-input">
                  <p>Double</p>
                  <input type="number" step="0.01" value="0.00" name="house-blend-d" class="qty-input">
                  <input type="submit" value="update" />
                </form>
              </td>
            </tr>

            <tr>
              <td><input type="checkbox" name="iced-cappuccino-checkbox" onchange="onCheck('iced-cappuccino');"
                  checked></input>
              </td>
              <td class="menu-title">Iced Cappuccino</td>
              <td>
                <p>
                  Sweetened espresso with icy-cold milk and served in a
                  chilled glass.
                </p>
                  <label>Single $<?php
                                  $sqlQuery = "SELECT price FROM CoffeeMenu WHERE name='Iced Cappuccino (single)'";
                                  $result = mysqli_query($conn, $sqlQuery);
                                  $row =  mysqli_fetch_assoc($result);
                                  echo $row["price"];
                                  ?></p></label>

                  <label>Double $<?php
                                  $sqlQuery = "SELECT price FROM CoffeeMenu WHERE name='Iced Cappuccino (double)'";
                                  $result = mysqli_query($conn, $sqlQuery);
                                  $row =  mysqli_fetch_assoc($result);
                                  echo $row["price"];
                                  ?></p></label>
              </td>
              <td>
                <form class="iced-cappuccino" action="./admin/handle_update.php" method="POST">
                  <p>Single</p>
                  <input type="number" step="0.01" value="0.00" name="iced-cappuccino-s" class="qty-input">
                  <p>Double</p>
                  <input type="number" step="0.01" value="0.00" name="iced-cappuccino-d" class="qty-input">
                  <input type="submit" value="update" />
                </form>
              </td>
            </tr>

          </table>
        </section>
      </section>
    </div>
    <footer class="content-footer">
      <p>Copyright &copy; 2014 JavaJam Coffee House</p>
      <p>
        <a href="mailto:jason@nathaniel.com"><i>jason@nathaniel.com</i></a>
      </p>
    </footer>
  </div>
  <script>
  /**
   *  function to settle checkbox input
   *  @param onCheck requires formName:string 
   */
  function onCheck(formName) {
    /**
     *
     */
    const checkBox = document.querySelector(`input[name=${formName}-checkbox]`)
    const inputField = document.querySelector(`.${formName}`)
    if (!checkBox.checked) inputField.setAttribute('hidden', 'true')
    else inputField.removeAttribute('hidden')
  }
  </script>
</body>

</html>