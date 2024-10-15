<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro Dairy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <script src="js/script.js"></script>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.jpg" alt="Hamro Dairy Logo" style="height: 40px;">
                Hamro Dairy
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="special-offers.html">Special Offers</a>
                    </li>
                </ul>
                <!-- Search bar -->
                <div>

                </div>
                <form class="d-flex" id="searchForm">
                    <input class="form-control me-2" type="search" id="searchInput" placeholder="Search products..."
                        aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                <a href="login.html" class="btn btn-outline-light ms-3">Login</a>
                <a href="register.html" class="btn btn-outline-light ms-3">Register</a>
                <a href="cart.html" class="btn btn-light ms-3">
                    <i class="fas fa-shopping-cart"></i> Cart
                </a>
            </div>
        </div>
    </nav>

    <!-- Carousel with Sliding Images -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/image1.jpg" class="d-block w-100" alt="Dairy Image 1">
            </div>
            <div class="carousel-item">
                <img src="images/image2.jpg" class="d-block w-100" alt="Dairy Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/image3.jpg" class="d-block w-100" alt="Dairy Image 3">
            </div>
        </div>
    </div>

    <!-- Fixed Text Over Carousel -->
    <div class="carousel-caption d-none d-md-block">
        <h1 class="display-4 text-center text-white">Hamro Dairy</h1>
    </div>


    <div class="offer-container">
        <div class="offer-content">
            <img src="/images/butter.png" alt="">
            <h2>Special Offer!</h2>
            <p>Get <strong>20% OFF</strong> on your first order!</p>
            <a href="/special-offers.html" class="btn">Shop Now</a>
        </div>

        <div class="offer-content">
            <img src="/images/cheese.jpg" alt="">
            <h2>Special Offer!</h2>
            <p>Get <strong>20% OFF</strong> on your first order!</p>
            <a href="/special-offers.html" class="btn">Shop Now</a>
        </div>

        <div class="offer-content">
            <img src="/images/icecream.jpg" alt="">
            <h2>Special Offer!</h2>
            <p>Get <strong>20% OFF</strong> on your first order!</p>
            <a href="/special-offers.html" class="btn">Shop Now</a>
        </div>

        <div class="offer-content">
            <img src="/images/yogurt.jpg" alt="">
            <h2>Special Offer!</h2>
            <p>Get <strong>20% OFF</strong> on your first order!</p>
            <a href="/special-offers.html" class="btn">Shop Now</a>
        </div>


    </div>





    <div class="aboutus"></div>
    <!-- About Us Section -->
    <section class="about-us py-12 bg-light">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="about-text mb-4 mb-md-0">
                <h2>About Us</h2>
                <p>Welcome to Hamro Dairy, where we offer the finest dairy products sourced from organic farms.
                    Our commitment to quality ensures that you receive the freshest and most nutritious dairy items
                    every day.</p>
            </div>
            <div class="about-image">
                <img src="images/about-us.jpg" class="img-fluid rounded" alt="About Us">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="foot">
        <p>&copy; 2024 Hamro Dairy. All rights reserved.</p>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>