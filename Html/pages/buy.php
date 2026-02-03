<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../Css/navbar.css">
    <link rel="stylesheet" href="../../Css/footer.css">
    <link rel="stylesheet" href="../../Css/buy.css">  
</head>
<body>
    <?php include '../navbar.php'; ?>

   

    <section class= "grid-section">
        <div class="grid-item-1">
            <a href="cloths.php">
                <img src="../../assets/images/clothes.png" alt="Cloths">
                <h2>Cloths</h2>
            </a>
        </div>
        <div class="grid-item-2">
            <a href="toy.php">
                <img src="../../assets/images/teddy-bear.png" alt="Toys">
                <h2>Toys</h2>
            </a>
        </div>
        </div>

    </section>

    <section class="offers">
        <div class="section-top">
            <div>
                <p class="section-small">Limited-time</p>
                <h2>Hot Offers for Kids</h2>
                <p class="section-sub">Save on outfits, toys, and bundles picked for busy parents.</p>
            </div>
            <a class="section-btn" href="shop-offers.php">Shop Offers</a>
        </div>

        <div class="offers-list">
            <article class="offer-card">
                <span class="offer-badge">-30%</span>
                <img src="../../assets/images/protective-clothing.png" alt="Kids wear offer">
                <h3>Playday Outfit Set</h3>
                <p>Soft cotton essentials for everyday adventures.</p>
                <div class="offer-meta">
                    <span class="price">Rs. 2,490</span>
                    <span class="price-old">Rs. 3,550</span>
                </div>
                <a href="/G11/Html/pages/add-to-cart.php"><button class="offer-btn">Grab Deal</button></a>
            </article>

            <article class="offer-card">
                <span class="offer-badge">Bundle</span>
                <img src="../../assets/images/shopping-bag.png" alt="Bundle offer">
                <h3>Outfit + Toy Bundle</h3>
                <p>Mix and match for extra savings this week.</p>
                <div class="offer-meta">
                    <span class="price">Save Rs. 800</span>
                    <span class="stock">Limited stock</span>
                </div>
                <a href="/G11/Html/pages/add-to-cart.php"><button class="offer-btn">Shop Bundle</button></a>
            </article>

            <article class="offer-card">
                <span class="offer-badge">Free Shipping</span>
                <img src="../../assets/images/suv-car.png" alt="Delivery offer">
                <h3>Weekend Free Delivery</h3>
                <p>Orders over Rs. 4,000 ship free island-wide.</p>
                <div class="offer-meta">
                    <span class="price">48h only</span>
                    <span class="stock">Ends Sunday</span>
                </div>
                <button class="offer-btn">See Details</button>
            </article>
        </div>
    </section>

    <section class="arrivals">
        <div class="section-top">
            <div>
                <p class="section-small">Just dropped</p>
                <h2>New Arrivals</h2>
                <p class="section-sub">Fresh styles and playful toys your kids will love.</p>
            </div>
            <a class="section-btn" href="new-arrivals.php">View All</a>
        </div>

        <div class="arrivals-list">
            <article class="arrival-card">
                <div class="arrival-media">
                    <img src="../../assets/images/1.webp" alt="New arrival outfit">
                    <span class="arrival-badge">New</span>
                </div>
                <h3>Rainbow Hoodie Set</h3>
                <p>Cozy layers for cool evenings.</p>
                <div class="arrival-meta">
                    <span class="price">Rs. 3,200</span>
                    <a href="/G11/Html/pages/add-to-cart.php"><button class="arrival-btn">Add to cart</button></a>
                </div>
            </article>

            <article class="arrival-card">
                <div class="arrival-media">
                    <img src="../../assets/images/2.webp" alt="New arrival toy">
                    <span class="arrival-badge">New</span>
                </div>
                <h3>Soft Buddy Plush</h3>
                <p>Gentle, washable plush for toddlers.</p>
                <div class="arrival-meta">
                    <span class="price">Rs. 1,850</span>
                    <a href="/G11/Html/pages/add-to-cart.php"><button class="arrival-btn">Add to cart</button></a>
                </div>
            </article>

            <article class="arrival-card">
                <div class="arrival-media">
                    <img src="../../assets/images/3.jpeg" alt="New arrival dress">
                    <span class="arrival-badge">New</span>
                </div>
                <h3>Sunny Day Dress</h3>
                <p>Lightweight and breezy for playtime.</p>
                <div class="arrival-meta">
                    <span class="price">Rs. 2,900</span>
                    <a href="/G11/Html/pages/add-to-cart.php"><button class="arrival-btn">Add to cart</button></a>
                </div>
            </article>
        </div>

    </section>




   
    <?php include '../footer.php'; ?>

    <script src="../../js/messages.js"></script>

</body>
</html>
