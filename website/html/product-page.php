<?php 
    include_once '../php_servers/rules.php';

    session_start();

    $category = $_GET['category'];
    $model = $_GET['model'];

    if (!isset($category) || !isset($model)) {
      header("Location: catalog-main.php");
    }

    $product = null;
    
    if ($category == "smartphones") {
      $product = getSmartphoneByModel($model);
    }
    else if ($category == "laptops") {
      $product = getLaptopByModel($model);
    }
    else if ($category == "tablets") {
      $product = getTabletByModel($model);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if (isset($product)) echo $product->model ?> | IT Discover Hub</title>
    <link rel="stylesheet" href="../css/product-page.css" />
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
      <?php if (isset($product)) { ?>
        <div class="product-container">
          <h1><?php echo $product->model ?></h1>
          <img class="product-img" src="images/catalog-images/smartphone1.jpg" alt="">
          <table border="1">
            <tr>
              <th>Brand</th>
              <td><?php echo $product->brand ?></td>
            </tr>
            <tr>
              <th>Model</th>
              <td><?php echo $product->model ?></td>
            </tr>
            <tr>
              <th>OS</th>
              <td><?php echo $product->os ?></td>
            </tr>
            <?php  if ($category === "smartphones" || $category === "tablets") {  ?>
              <tr>
                <th>Screen</th>
                <td><?php echo $product->screen ?></td>
              </tr>
            <?php } ?>
            <?php  if ($category === "laptops" || $category === "tablets") {  ?>
              <tr>
                <th>Processor</th>
                <td><?php echo $product->processor ?></td>
              </tr>
            <?php } ?>
            <?php  if ($category === "smartphones") {  ?>
              <tr>
                <th>Chipset</th>
                <td><?php echo $product->chipset ?></td>
              </tr>
              <tr>
                <th>GPU</th>
                <td><?php echo $product->gpu ?></td>
              </tr>
            <?php } ?>
            <tr>
              <th>ram</th>
              <td><?php echo $product->ram ?></td>
            </tr>
            <tr>
              <th>Storage</th>
              <td><?php echo $product->storage ?></td>
            </tr>
            <?php  if ($category === "tablets") {  ?>
              <tr>
                <th>Battery Life</th>
                <td><?php echo $product->batteryLife ?></td>
              </tr>
            <?php } ?>
            <tr>
              <th>Price</th>
              <td>$<?php echo $product->price ?></td>
            </tr>
          </table>
        </div>
        <!-- if user is logged in and this catalog item is in his/her wishlist, the button is "Remove wishlist" -->
        <?php if (isset($_SESSION['isLoggedIn']) && isInUserWishlists($_SESSION['email'], $category, $product->model) === true) { ?>
          <button class="remove-wishlist-btn" data-model="<?php echo $product->model; ?>">Remove wishlist</button>
          <!-- else if user is NOT logged in or this catalog item is NOT in his/her wishlist, the button is "Add to wishlist" -->
        <?php } else { ?>
          <button class="wishlist-btn" data-model="<?php echo $product->model; ?>">Add to wishlist</button>
        <?php } ?>
      <?php } ?>
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
    <script>
      // variables that other js linked needs, such as wishlist.js
      const isLoggedIn = <?php echo isset($_SESSION['isLoggedIn']) ? 'true' : 'false' ;?>;
      const email = <?php echo isset($_SESSION['email']) ? "'" . $_SESSION['email'] . "'" : 'null' ;?>;
      const urlParams = new URLSearchParams(window.location.search);
      const category = urlParams.get("category");
    </script>
    <script src="../javascript/wishlist.js"></script>
</body>
</html>