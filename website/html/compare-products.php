<?php
    include_once '../php_servers/rules.php';

    $category = $_GET['category'];

    if (!isset($category)) {
      header("Location: catalog-main.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compare Products | IT Discover Hub</title>
    <link rel="stylesheet" href="../css/compare-products.css" />
    <link rel="stylesheet"
    href=https://fonts.googleapis.com/css?family=Poppins:300,400,700 />
  </head>
  <body>
    <header>
      <p class="website-title">IT Discover Hub</p>
      <nav class="header-nav">
      <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about-us.html">About us</a></li>
          <li><a class="current-page" href="catalog-main.html">Catalog</a></li>
          <li><a href="news.html">News</a></li>
          <li><a class="contact-us-link" href="contact-us.html">Contact us</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <h1>Compare <span class="h1-category"><?php echo $category ?></span></h1>
      <!-- select element to switch page's category -->
      <select class="select-category" name="select-category">
        <option value="smartphones">Smartphones</option>
        <option value="tablets">Tablets</option>
        <option value="laptops">Laptops</option>
      </select>

      <!-- table for comparing the products -->
      <table border="1">
        <tr>
          <th></th>
          <td class="search-col">
            <p class="text-align-center">Compare with:</p>
            <div class="search-container">
              <input class="search-input col-1" type="text" autocomplete="off">
              <div class="search-suggestions-container">
                <ul class="search-suggestions col-1"></ul>
              </div>
            </div>
          </td>
          <td class="search-col">
            <p class="text-align-center">Compare with:</p>
            <div class="search-container">
              <input
                class="search-input col-2"
                type="text"
                autocomplete="off"
              />
              <div class="search-suggestions-container">
                <ul class="search-suggestions col-2"></ul>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th></th>
          <td id="img-col-1">
            <img src="" alt="" />
          </td>
          <td id="img-col-2">
            <img src="" alt="" />
          </td>
        </tr>
        <tr>
          <th>Brand</th>
          <td id="brand-col-1"></td>
          <td id="brand-col-2"></td>
        </tr>
        <tr>
          <th>Model</th>
          <td id="model-col-1"></td>
          <td id="model-col-2"></td>
        </tr>
        <tr>
          <th>OS</th>
          <td id="os-col-1"></td>
          <td id="os-col-2"></td>
        </tr>
        <?php  if ($category === "smartphones" || $category === "tablets") {  ?>
          <tr>
            <th>Screen</th>
            <td id="screen-col-1"></td>
            <td id="screen-col-2"></td>
          </tr>
        <?php } ?>
        <?php  if ($category === "laptops" || $category === "tablets") {  ?>
          <tr>
            <th>Processor</th>
            <td id="processor-col-1"></td>
            <td id="processor-col-2"></td>
          </tr>
        <?php } ?>
        <?php  if ($category === "smartphones") {  ?>
          <tr>
            <th>Chipset</th>
            <td id="chipset-col-1"></td>
            <td id="chipset-col-2"></td>
          </tr>
          <tr>
            <th>GPU</th>
            <td id="GPU-col-1"></td>
            <td id="GPU-col-2"></td>
          </tr>
        <?php } ?>
        <tr>
          <th>RAM</th>
          <td id="RAM-col-1"></td>
          <td id="RAM-col-2"></td>
        </tr>
        <tr>
          <th>Storage</th>
          <td id="storage-col-1"></td>
          <td id="storage-col-2"></td>
        </tr>
        <?php  if ($category === "tablets") {  ?>
          <tr>
            <th>Battery Life</th>
            <td id="battery-life-col-1"></td>
            <td id="battery-life-col-2"></td>
          </tr>
        <?php } ?>
        <tr>
          <th>Price</th>
          <td id="price-col-1"></td>
          <td id="price-col-2"></td>
        </tr>
      </table>
    </main>
    <footer>
      <section class="subscribe-section">
        <h2 class="width-60">Subscribe today and plug into the future!</h2>
        <p class="width-60">
          We promise not to flood your inbox – our updates are as sleek as our
          gadgets. Join the TDA community and stay ahead in the world of
          technology. Because when it comes to staying informed, ITDH has your
          back.
        </p>
        <div class="subscribe-div">
          <div class="subscribe-div-text">
            <p>Stay in the loop</p>
            <p>
              Subscribe to receive latest news and updates about ITDH.
              <span class="block">We promise not to spam you.</span>
            </p>
          </div>
          <form class="subscription-form" action="#" method="post">
            <input
              type="email"
              name="email"
              placeholder="Enter email address "
              required
            />
            <button class="submit-button" type="submit">Continue</button>
          </form>
        </div>
      </section>
      <section class="footer-section">
        <div class="footer-navs-and-information">
          <div>
            <p class="website-title">IT Discover Hub</p>
            <p>"Unlock Exclusive Content - Dive Into Our Website!"</p>
            <p>@ITDiscoverHub</p>
          </div>
          <div class="about-us-div">
            <p><strong>About us</strong></p>
            <nav>
              <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Catalog</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Contact us</a></li>
              </ul>
            </nav>
          </div>
          <div class="contact-us-div">
            <p><strong>Contact us</strong></p>
            <p>Have questions? Contact us for friendly assistance.</p>
            <p>+900 000 0000</p>
          </div>
          <div>
            <nav class="soc-meds-nav">
              <a href=""
                ><img
                  class="soc-med-icon"
                  src="images/fb-icon.png"
                  alt="fb icon"
              /></a>
              <a href=""
                ><img
                  class="soc-med-icon"
                  src="images/ig-icon.png"
                  alt="ig icon"
              /></a>
              <a href=""
                ><img
                  class="soc-med-icon"
                  src="images/twitter-icon.png"
                  alt="twitter icon"
              /></a>
              <a href=""
                ><img
                  class="soc-med-icon"
                  src="images/linked-in-icon.png"
                  alt="linked-in icon"
              /></a>
            </nav>
          </div>
        </div>
        <div class="line-separator"></div>
        <p class="copyright text-align-center">
          Copyright® 2023. IT Discover Hub. All Rights Reserved.
        </p>
      </section>
    </footer>
    <script src="../javascript/compare-products.js"></script>
  </body>
</html>
