 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Responsive Navbar with Hero Section</title>
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="assets/css/mdb.min.css">
 </head>

 <body>
     <?php include "components/header.php" ?>
     <section class="hero-section">
         <div class="hero-content">
             <h1>Welcome to Our Store</h1>
             <p>Discover the latest trends in fashion</p>
             <a href="#" class="hero-button">Shop Now</a>
         </div>
     </section>

     <div class="w-75 mt-5 mx-auto">
         <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel" data-mdb-carousel-init>
             <div class="carousel-inner">
                 <div class="carousel-item active" data-mdb-interval="10000">
                     <img src="https://t4.ftcdn.net/jpg/04/84/87/61/360_F_484876187_u6HIlCgA2iZdfkoOamuQa43OJH2zaDVR.jpg" class="d-block w-100" alt="Wild Landscape" />
                 </div>
                 <div class="carousel-item" data-mdb-interval="2000">
                     <img src="https://img.freepik.com/free-photo/fashionable-pale-brunette-long-green-dress-black-jacket-sunglasses-standing-street-during-daytime-against-wall-light-city-building_197531-24468.jpg" class="d-block w-100" alt="Camera" />
                 </div>
                 <div class="carousel-item">
                     <img src="https://www.thefashionisto.com/wp-content/uploads/2024/02/Spring-Outfits-Men.jpg" class="d-block w-100" alt="Exotic Fruits" />
                 </div>
             </div>
             <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>
     </div>

     <section class="promotional-cards">

         <div class="card">
             <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2018/12/women-fashion-free-img.jpg" alt="20% Off On Tank Tops">
             <div class="card-content">
                 <h3>20% Off On Tank Tops</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac dictum.</p>
                 <a href="#" class="card-button">Shop Now</a>
             </div>
         </div>
         <div class="card">
             <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2018/12/men-fashion-free-img.jpg" alt="Latest Eyewear For You">
             <div class="card-content">
                 <h3>Latest Eyewear For You</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac dictum.</p>
                 <a href="#" class="card-button">Shop Now</a>
             </div>
         </div>
         <div class="card">
             <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2018/12/footwear-free-img.jpg" alt="Let's Lorem Suit Up!">
             <div class="card-content">
                 <h3>Let's Lorem Suit Up!</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac dictum.</p>
                 <a href="#" class="card-button">Check Out</a>
             </div>
         </div>
     </section>
     <section class="featured-products">
         <h2>Featured Products</h2>
         <div class="products-container">
             <!-- Product 1 -->
             <div class="product-card">
                 <div class="product-image">
                     <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2017/12/product-m-jeans1-300x300.jpg" alt="DNK Yellow Shoes">
                     <span class="sale-badge">Sale!</span>
                 </div>
                 <div class="product-info">
                     <h3>DNK Yellow Shoes</h3>
                     <p>Men</p>
                     <p class="price"><span class="old-price">$150.00</span> $120.00</p>
                     <div class="rating">
                         <!-- Star ratings can be added here -->
                     </div>
                 </div>
             </div>
             <div class="product-card">
                 <div class="product-image">
                     <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2017/12/product-m-jeans1-300x300.jpg" alt="DNK Yellow Shoes">
                     <span class="sale-badge">Sale!</span>
                 </div>
                 <div class="product-info">
                     <h3>DNK Yellow Shoes</h3>
                     <p>Men</p>
                     <p class="price"><span class="old-price">$150.00</span> $120.00</p>
                     <div class="rating">
                         <!-- Star ratings can be added here -->
                     </div>
                 </div>
             </div>
             <div class="product-card">
                 <div class="product-image">
                     <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2017/12/product-m-jeans1-300x300.jpg" alt="DNK Yellow Shoes">
                     <span class="sale-badge">Sale!</span>
                 </div>
                 <div class="product-info">
                     <h3>DNK Yellow Shoes</h3>
                     <p>Men</p>
                     <p class="price"><span class="old-price">$150.00</span> $120.00</p>
                     <div class="rating">
                         <!-- Star ratings can be added here -->
                     </div>
                 </div>
             </div>
             <div class="product-card">
                 <div class="product-image">
                     <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2017/12/product-m-jeans1-300x300.jpg" alt="DNK Yellow Shoes">
                     <span class="sale-badge">Sale!</span>
                 </div>
                 <div class="product-info">
                     <h3>DNK Yellow Shoes</h3>
                     <p>Men</p>
                     <p class="price"><span class="old-price">$150.00</span> $120.00</p>
                     <div class="rating">
                         <!-- Star ratings can be added here -->
                     </div>
                 </div>
             </div>
             <div class="product-card">
                 <div class="product-image">
                     <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2017/12/product-m-jeans1-300x300.jpg" alt="DNK Yellow Shoes">
                     <span class="sale-badge">Sale!</span>
                 </div>
                 <div class="product-info">
                     <h3>DNK Yellow Shoes</h3>
                     <p>Men</p>
                     <p class="price"><span class="old-price">$150.00</span> $120.00</p>
                     <div class="rating">
                         <!-- Star ratings can be added here -->
                     </div>
                 </div>
             </div>

             <!-- Additional product cards go here -->
         </div>
     </section>

     <section class="top-selling-products">
         <h2 class="mb-5">Top Selling mens Products</h2>
         <div class="products-container">
             <!-- Product 1 -->
             <div class="product-card">
                 <div class="product-image">
                     <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2017/12/product-m-jeans1-300x300.jpg" alt="DNK Yellow Shoes">
                     <span class="sale-badge">Sale!</span>
                 </div>
                 <div class="product-info">
                     <h3>DNK Yellow Shoes</h3>
                     <p>Men</p>
                     <p class="price"><span class="old-price">$150.00</span> $120.00</p>
                     <div class="rating">
                         <!-- Star ratings can be added here -->
                     </div>
                 </div>
             </div>

             <div class="product-card">
                 <div class="product-image">
                     <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2017/12/product-m-jeans1-300x300.jpg" alt="DNK Yellow Shoes">
                     <span class="sale-badge">Sale!</span>
                 </div>
                 <div class="product-info">
                     <h3>DNK Yellow Shoes</h3>
                     <p>Men</p>
                     <p class="price"><span class="old-price">$150.00</span> $120.00</p>
                     <div class="rating">
                         <!-- Star ratings can be added here -->
                     </div>
                 </div>
             </div>
             <div class="product-card">
                 <div class="product-image">
                     <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2017/12/product-m-jeans1-300x300.jpg" alt="DNK Yellow Shoes">
                     <span class="sale-badge">Sale!</span>
                 </div>
                 <div class="product-info">
                     <h3>DNK Yellow Shoes</h3>
                     <p>Men</p>
                     <p class="price"><span class="old-price">$150.00</span> $120.00</p>
                     <div class="rating">
                         <!-- Star ratings can be added here -->
                     </div>
                 </div>
             </div>
             <div class="product-card">
                 <div class="product-image">
                     <img src="https://websitedemos.net/brandstore-02/wp-content/uploads/sites/150/2017/12/product-m-jeans1-300x300.jpg" alt="DNK Yellow Shoes">
                     <span class="sale-badge">Sale!</span>
                 </div>
                 <div class="product-info">
                     <h3>DNK Yellow Shoes</h3>
                     <p>Men</p>
                     <p class="price"><span class="old-price">$150.00</span> $120.00</p>
                     <div class="rating">
                         <!-- Star ratings can be added here -->
                     </div>
                 </div>
             </div>

             <!-- Additional product cards go here -->
         </div>
     </section>
     <?php include "components/footer.php" ?>
     <script type="text/javascript" src="assets/js/mdb.umd.min.js"></script>
     <script type="text/javascript" src="js/script.js"></script>
 </body>

 </html>