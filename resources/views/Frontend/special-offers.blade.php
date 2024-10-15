<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamro Dairy - Special Offers</title>
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

    <!-- Special Offers Section -->
    <section class="offers py-5">
        <div class="container">
            <div class="row">
                <!-- Offer Card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/butter.png" class="card-img-top" alt="Butter">
                        <div class="card-body">
                            <h5 class="card-title">Butter - 10% Off</h5>
                            <p class="card-text">Was $5.00, now $4.50</p>
                            <a href="/cart.html" class="btn btn-dark">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/cheese.jpg" class="card-img-top" alt="Butter">
                        <div class="card-body">
                            <h5 class="card-title">cheese - 10% Off</h5>
                            <p class="card-text">Was $5.00, now $4.50</p>
                            <a href="/cart.html" class="btn btn-dark">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/cream.jpg" class="card-img-top" alt="Butter">
                        <div class="card-body">
                            <h5 class="card-title">cream - 10% Off</h5>
                            <p class="card-text">Was $5.00, now $4.50</p>
                            <a href="/cart.html" class="btn btn-dark">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/icecream.jpg" class="card-img-top" alt="Butter">
                        <div class="card-body">
                            <h5 class="card-title">icecream - 10% Off</h5>
                            <p class="card-text">Was $5.00, now $4.50</p>
                            <a href="/cart.html" class="btn btn-dark">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/milk.avif" class="card-img-top" alt="Butter">
                        <div class="card-body">
                            <h5 class="card-title">milk - 10% Off</h5>
                            <p class="card-text">Was $5.00, now $4.50</p>
                            <a href="/cart.html" class="btn btn-dark">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/butter.png" class="card-img-top" alt="Butter">
                        <div class="card-body">
                            <h5 class="card-title">Butter - 10% Off</h5>
                            <p class="card-text">Was $5.00, now $4.50</p>
                            <a href="/cart.html" class="btn btn-dark">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <!-- Repeat for more offers -->
            </div>
        </div>
    </section>

    <!-- Footer (Same as index.html) -->
    <footer class="foot">
        <p>&copy; 2024 Hamro Dairy. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>