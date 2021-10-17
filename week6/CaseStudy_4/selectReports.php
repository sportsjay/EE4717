<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JavaJam Coffee House</title>
  <link rel="stylesheet" href="selectReports.css" />
</head>

<body>
  <div class="body">
    <header class="content-header">
      <img src="assets/javalogo.gif" alt="JavaJam Coffee" class="header-image" />
    </header>
    <div class="content-body">
      <nav>
        <a href="#">Daily Sales Report</a>
      </nav>
      <section class="content-wrapper">
        <div class="content-body-header">
          <h1>Click to generate daily sales report:</h1>
        </div>

        <a href="./totalSales.php"><input type="checkbox" name="product_sales" value="true"><label>Total dollar sales by
            products</label>
        </a>
        <a href="./salesQuantity.php"><input type="checkbox" name="category_sales" value="true"><label>Sales quantities
            by product
            categories</label></a>


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