<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WelLYF</title>

  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="main.css">
  <script src="store.js" async></script>
</head>

<body>
  
  <!-- Main body -->

  <header>
    <a id="nav-top"></a>

    <div id="nav-belt">
      <div class="nav-left">
        <div id="nav-logo">
          <a href="page one.html" class="nav-logo-link"></a>
        </div>
      </div>
      
      <div class="nav-fill">
        <div id="nav-search">
          <form action="search.php" method="POST">
            <div class="nav-left">
              <span class="nav-search-label">All</span>
              <i class="fa fa-caret-down" aria-hidden="true"></i>
              <select id="nav-search-select">
              <option selected="selected" value="books">Books</option>
                <option value="Apparels">Apparels</option>
                <option value="Jewellery">Jewellery</option>
                <option value="Gifts">Gifts & Novelties</option>
              </select>
            </div>
            <div class="nav-right">
              <i class="fa fa-search" aria-hidden="true"></i>
              <input type="submit" name="search-button">
            </div>
            <div class="nav-fill">
              <input type="text" autocomplete="off" name="search">
            </div>
          </form>
        </div>
      </div>
    </div>

    <nav id="nav-main">
      <div class="nav-left">
        <div class="nav-shop">
          <a class="nav-a" href="product.php">
            Categories
          </a>
        </div>
      </div>
      <div class="nav-right">
        

      <button class="nav-a cart" id="myBtn">
          <img src="img/cart.png" width="28 px" height="28 px">
          Cart
        </button>
      </div>
      <div class="nav-fill">
        <ul>
          <li><a href="#">Support</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <section class="search-result-container">
        <div class="products">
        <h1><center>Book Section</center></h1>
        <div class="product-container">
                <div class="product-items">
                    <?php
                        include "dbcon.php";
                        
                        $sql = "SELECT * FROM products  WHERE p_categories = 'Book'";
                        $result = mysqli_query($con, $sql);
                        $queryResult = mysqli_num_rows($result);
                        while($row = mysqli_fetch_assoc($result)){
                                $image = $row['p_image'];
                                $imageData = base64_encode(file_get_contents($image));
                                    
                                echo"<div class = 'product'>
                                            <div class='product-box'>
                                                <div class = 'product-content'>
                                                    <div class = 'product-img'>
                                                        <img class='shop-item-image' src = 'data:image/jpg;base64,".$imageData."' height='200px' width='200px' alt = 'product image'>
                                                    </div>
                                                </div>
                        
                                                <div class = 'product-info'>
                                                    <a href = '#' class = 'product-name shop-item-title'>".$row['p_name']."</a>
                                                    <h5>By <span>".$row['p_seller']."</span></h5>
                                                    <p class = 'product-price shop-item-price'>₹".$row['p_price']."</p>
                                                </div>
                                                <div class = 'off-info'>
                                                    <h2 class = 'sm-title'>".$row['p_state']."</h2>
                                                </div>
                                                <div class = 'product-btns'>
                                                    <button type = 'button' class = 'btn-cart shop-item-button'> add to cart
                                                        <span><i class = 'fas fa-plus'></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>";
                            }
                        
                    ?>
                </div>
            </div>
        </div>
        <h1><center>Jewellery Section</center></h1>
        <div class="product-container">
                <div class="product-items">
                    <?php
                        include "dbcon.php";
                        
                        $sql = "SELECT * FROM products  WHERE p_categories = 'Jewellery'";
                        $result = mysqli_query($con, $sql);
                        $queryResult = mysqli_num_rows($result);
                        while($row = mysqli_fetch_assoc($result)){
                                $image = $row['p_image'];
                                $imageData = base64_encode(file_get_contents($image));
                                    
                                echo"<div class = 'product'>
                                            <div class='product-box'>
                                                <div class = 'product-content'>
                                                    <div class = 'product-img'>
                                                        <img class='shop-item-image' src = 'data:image/jpg;base64,".$imageData."' height='200px' width='200px' alt = 'product image'>
                                                    </div>
                                                </div>
                        
                                                <div class = 'product-info'>
                                                    <a href = '#' class = 'product-name shop-item-title'>".$row['p_name']."</a>
                                                    <h5>By <span>".$row['p_seller']."</span></h5>
                                                    <p class = 'product-price shop-item-price'>₹".$row['p_price']."</p>
                                                </div>
                                                <div class = 'off-info'>
                                                    <h2 class = 'sm-title'>".$row['p_state']."</h2>
                                                </div>
                                                <div class = 'product-btns'>
                                                    <button type = 'button' class = 'btn-cart shop-item-button'> add to cart
                                                        <span><i class = 'fas fa-plus'></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>";
                            }
                        
                    ?>
                </div>
            </div>
        </div>
        <h1><center>Apparel Section</center></h1>
        <div class="product-container">
                <div class="product-items">
                    <?php
                        include "dbcon.php";
                        
                        $sql = "SELECT * FROM products  WHERE p_categories = 'Apparel'";
                        $result = mysqli_query($con, $sql);
                        $queryResult = mysqli_num_rows($result);
                        while($row = mysqli_fetch_assoc($result)){
                                $image = $row['p_image'];
                                $imageData = base64_encode(file_get_contents($image));
                                    
                                echo"<div class = 'product'>
                                            <div class='product-box'>
                                                <div class = 'product-content'>
                                                    <div class = 'product-img'>
                                                        <img class='shop-item-image' src = 'data:image/jpg;base64,".$imageData."' height='200px' width='200px' alt = 'product image'>
                                                    </div>
                                                </div>
                        
                                                <div class = 'product-info'>
                                                    <a href = '#' class = 'product-name shop-item-title'>".$row['p_name']."</a>
                                                    <h5>By <span>".$row['p_seller']."</span></h5>
                                                    <p class = 'product-price shop-item-price'>₹".$row['p_price']."</p>
                                                </div>
                                                <div class = 'off-info'>
                                                    <h2 class = 'sm-title'>".$row['p_state']."</h2>
                                                </div>
                                                <div class = 'product-btns'>
                                                    <button type = 'button' class = 'btn-cart shop-item-button'> add to cart
                                                        <span><i class = 'fas fa-plus'></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>";
                            }
                        
                    ?>
                </div>
            </div>
        </div>
        <h1><center>Shoes Section</center></h1>
        <div class="product-container">
                <div class="product-items">
                    <?php
                        include "dbcon.php";
                        
                        $sql = "SELECT * FROM products  WHERE p_categories = 'Shoes'";
                        $result = mysqli_query($con, $sql);
                        $queryResult = mysqli_num_rows($result);
                        while($row = mysqli_fetch_assoc($result)){
                                $image = $row['p_image'];
                                $imageData = base64_encode(file_get_contents($image));
                                    
                                echo"<div class = 'product'>
                                            <div class='product-box'>
                                                <div class = 'product-content'>
                                                    <div class = 'product-img'>
                                                        <img class='shop-item-image' src = 'data:image/jpg;base64,".$imageData."' height='200px' width='200px' alt = 'product image'>
                                                    </div>
                                                </div>
                        
                                                <div class = 'product-info'>
                                                    <a href = '#' class = 'product-name shop-item-title'>".$row['p_name']."</a>
                                                    <h5>By <span>".$row['p_seller']."</span></h5>
                                                    <p class = 'product-price shop-item-price'>₹".$row['p_price']."</p>
                                                </div>
                                                <div class = 'off-info'>
                                                    <h2 class = 'sm-title'>".$row['p_state']."</h2>
                                                </div>
                                                <div class = 'product-btns'>
                                                    <button type = 'button' class = 'btn-cart shop-item-button'> add to cart
                                                        <span><i class = 'fas fa-plus'></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>";
                            }
                        
                    ?>
                </div>
            </div>
        </div>
    </section>
    <div id="myModal" class="modal" style="overflow:scroll;">
    <div class="modal-content" >
      <span class="close">&times;</span>
      <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" onClick="window.location='checkout.html';"  type="button">PURCHASE</button>
    </div>
  </div>
    
  

  
  <footer>
    <div class="top text-center">
      <a href="#nav-top">Back to top</a>
    </div>

    <div class="middle">
      <div class="center">
        <ul>
          <li><h3>Get to Know Us</h3></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">About Amazon</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Amazon Devices</a></li>
        </ul>
        <ul>
          <li><h3>Make Money with Us</h3></li>
          <li><a href="#">Sell on Amazon</a></li>
          <li><a href="#">Sell Your Services on Amazon</a></li>
          <li><a href="#">Sell on Amazon Business</a></li>
          <li><a href="#">Sell Your Apps on Amazon</a></li>
          <li><a href="#">Become an Affiliate</a></li>
          <li><a href="#">Advertise Your Products</a></li>
          <li><a href="#">Self-Publish with Us</a></li>
          <li><a href="#">Become an Amazon Vendor</a></li>
          <li><a href="#">Sell Your Subscription on Amazon</a></li>
          <li><a href="#">› See all</a></li>
        </ul>
        <ul>
          <li><h3>Amazon Payment Products</h3></li>
          <li><a href="#">Amazon Rewards Visa Signature Cards</a></li>
          <li><a href="#">Amazon.com Store Card</a></li>
          <li><a href="#">Amazon.com Corporate Credit Line</a></li>
          <li><a href="#">Shop with Points</a></li>
          <li><a href="#">Credit Card Marketplace</a></li>
          <li><a href="#">Reload Your Balance</a></li>
          <li><a href="#">Amazon Currency Converter</a></li>
        </ul>
        <ul>
          <li><h3>Let Us Help You</h3></li>
          <li><a href="#">Your Account</a></li>
          <li><a href="#">Your Orders</a></li>
          <li><a href="#">Shipping Rates &amp; Policies</a></li>
          <li><a href="#">Amazon Prime</a></li>
          <li><a href="#">Returns &amp; Replacements</a></li>
          <li><a href="#">Manage Your Content and Devices</a></li>
          <li><a href="#">Amazon Assistant</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>

      <ul class="copy text-center">
        <li><a href="#" class="logo"></a></li>
        <li><a href="#" class="select"><i class="fa fa-globe" aria-hidden="true"></i> English</a></li>
        <li><a href="#" class="select"><i class="flag-icon-us"></i>United States</a></li>
      </ul>
    </div>

    <div class="bottom">
      <div class="center">
        <ul>
          <li><a href="#">Amazon Music<br/><span>Stream millions<br> of songs</span></a></li>
          <li><a href="#">AmazonFresh<br/><span>Groceries &amp; More<br> Right To Your Door</span></a></li>
          <li><a href="#">Amazon Web Services<br/><span>Scalable Cloud<br> Computing Services</span></a></li>
          <li><a href="#">East Dane<br/><span>Designer Men's<br> Fashion</span></a></li>
          <li><a href="#">Prime Now<br/><span>FREE 2-Hour Delivery<br> on Everyday Items</span></a></li>
        </ul>

        <ul>
          <li><a href="#">Amazon Drive<br/><span>Cloud storage<br> from Amazon</span></a></li>
          <li><a href="#">AmazonGlobal<br/><span>Ship Orders<br> Internationally</span></a></li>
          <li><a href="#">Audible<br/><span>Download<br> Audio Books</span></a></li>
          <li><a href="#">Fabric<br/><span>Sewing, Quilting<br> &amp; Knitting</span></a></li>
          <li><a href="#">Prime Photos<br/><span>Unlimited Photo Storage<br> Free With Prime</span></a></li>
          <li><a href="#">Woot!<br/><span>Deals and <br> Shenanigans</span></a></li>
        </ul>

        <ul>
          <li><a href="#">6pm<br/><span>Score deals<br> on fashion brands</span></a></li>
          <li><a href="#">Home Services<br/><span>Handpicked Pros<br> Happiness Guarantee</span></a></li>
          <li><a href="#">Book Depository<br/><span>Books With Free<br> Delivery Worldwide</span></a></li>
          <li><a href="#">Goodreads<br/><span>Book reviews<br> &amp; recommendations</span></a></li>
          <li><a href="#">Shopbop<br/><span>Designer<br> Fashion Brands</span></a></li>
          <li><a href="#">Zappos<br/><span>Shoes &amp;<br> Clothing</span></a></li>
        </ul>

        <ul>
          <li><a href="#">AbeBooks<br/><span>Books, art<br> &amp; collectibles</span></a></li>
          <li><a href="#">Amazon Inspire<br/><span>Free Digital Educational<br>  Resources</span></a></li>
          <li><a href="#">Box Office Mojo<br/><span>Find Movie<br> Box Office Data</span></a></li>
          <li><a href="#">IMDb<br/><span>Movies, TV<br> &amp; Celebrities</span></a></li>
          <li><a href="#">TenMarks.com<br/><span>Math Activities<br> for Kids &amp; Schools</span></a></li>
          <li><a href="#">Souq.com<br/><span>Shop Online in<br> the Middle East</span></a></li>
        </ul>

        <ul>
          <li><a href="#">ACX <br/><span>Audiobook Publishing<br> Made Easy</span></a></li>
          <li><a href="#">Amazon Rapids<br/><span>Fun stories for<br>  kids on the go</span></a></li>
          <li><a href="#">ComiXology<br/><span>Thousands of<br> Digital Comics</span></a></li>
          <li><a href="#">IMDbPro<br/><span>Get Info Entertainment<br> Professionals Need</span></a></li>
          <li><a href="#">Warehouse Deals<br/><span>Open-Box<br> Discounts</span></a></li>
          <li><a href="#">Subscribe with Amazon<br/><span>Discover &amp; try<br> subscription services</span></a></li>
        </ul>

        <ul>
          <li><a href="#">Alexa<br/><span>Actionable Analytics<br> for the Web</span></a></li>
          <li><a href="#">Amazon Restaurants<br/><span>Food delivery from<br> local restaurants</span></a></li>
          <li><a href="#">CreateSpace<br/><span>Indie Print Publishing<br> Made Easy</span></a></li>
          <li><a href="#">Junglee.com<br/><span>Shop Online<br> in India</span></a></li>
          <li><a href="#">Whispercast<br/><span>Discover &amp; Distribute<br> Digital Content</span></a></li>
        </ul>

        <ul>
          <li><a href="#">Amazon Business<br/><span>Everything For<br> Your Business</span></a></li>
          <li><a href="#">Amazon Video Direct<br/><span>Video Distribution<br> Made Easy</span></a></li>
          <li><a href="#">DPReview<br/><span>Digital<br> Photography</span></a></li>
          <li><a href="#">Kindle Direct Publishing<br/><span>Indie Digital Publishing<br> Made Easy</span></a></li>
          <li><a href="#">Withoutabox<br/><span>Submit to<br> Film Festivals</span></a></li>
        </ul>

        <ul class="copy text-center">
          <li><a href="#">Conditions of Use</a></li>
          <li><a href="#">Privacy Notice</a></li>
          <li><a href="#">Interest-Based Ads</a></li>
          <li>&copy; 1996-2017, Amazon.com, Inc. or its affiliates</li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="cart.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
</body>

</html>
