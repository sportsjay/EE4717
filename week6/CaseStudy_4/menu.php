<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JavaJam Coffee House - Menu</title>
  <link rel="stylesheet" href="menu.css" />
  <script type="text/javascript" src="menu.js"></script>
</head>

<body>
  <div class="body">
    <header class="content-header">
      <img src="assets/javalogo.gif" alt="JavaJam Coffee" class="header-image" />
    </header>
    <div class="content-body">
      <nav>
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="music.php">Music</a>
        <a href="jobs.php">Jobs</a>
      </nav>
      <section class="content-wrapper">
        <div class="content-body-header">
          <h1>Follow the Winding Road to JavaJam</h1>
        </div>
        <section class="content-body-content">
          <table>
            <tr>
              <td class="menu-title">Just Java</td>
              <td>
                <p>
                  Regular house blend, decaffeinated coffee, or flavor of the
                  day.
                </p>
                <p class="menu-price">Endless Cup $2.00</p>
              </td>
              <td>
                <input class="qty-input" type="number" value="0" min="0" id="regular-blend-qty"
                  onchange="onChangeQty('regular-blend')" />
              </td>
              <td>
                <input id="regular-blend-subtotal-price" type="number" readonly class="qty-input" />
                <!-- <p class="subtotal-price">
                    $<span id="regular-blend-subtotal-price"></span>
                  </p> -->
              </td>
            </tr>
            <tr>
              <td class="menu-title">Cafe au Lait</td>
              <td>
                <p>
                  House blended coffee infused into a smooth, steamed milk.
                </p>
                <form class="menu-price" onchange="onChangePrice('house-blend')">
                  <input type="radio" id="menu-price-radio" name="house-blend-price" value="2.00" checked />
                    <label>Single $2.00</label>
                  <input type="radio" id="menu-price-radio" name="house-blend-price" value="3.00" />
                    <label>Double $3.00</label>
                </form>
              </td>
              <td>
                <input class="qty-input" type="number" value="0" min="0" id="house-blend-qty"
                  onchange="onChangeQty('house-blend')" />
              </td>
              <td>
                <input type="number" readonly id="house-blend-subtotal-price" class="qty-input" />
                <!-- <p class="subtotal-price">
                    $<span id="house-blend-subtotal-price"></span>
                  </p> -->
              </td>
            </tr>
            <tr>
              <td class="menu-title">Iced Cappuccino</td>
              <td>
                <p>
                  Sweetened espresso with icy-cold milk and served in a
                  chilled glass.
                </p>
                <form class="menu-price" onchange="onChangePrice('ice-cappuccino')">
                  <input type="radio" id="menu-price-radio" name="ice-cappuccino-price" value="4.75" checked />
                    <label>Single $4.75</label>
                  <input type="radio" id="menu-price-radio" name="ice-cappuccino-price" value="5.75" />
                    <label>Double $5.75</label>
                </form>
              </td>
              <td>
                <input class="qty-input" type="number" value="0" min="0" id="ice-cappuccino-qty"
                  onchange="onChangeQty('ice-cappuccino')" />
              </td>
              <td>
                <input type="number" readonly id="ice-cappuccino-subtotal-price" class="qty-input" />
                <!-- <p class="subtotal-price">
                    $<span id="ice-cappuccino-subtotal-price"></span>
                  </p> -->
              </td>
            </tr>
          </table>
        </section>
        <p class="content-total-price">
          Total Price:
          <span>
            <input type="number" readonly id="total-price" class="qty-input" />
          </span>
        </p>
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