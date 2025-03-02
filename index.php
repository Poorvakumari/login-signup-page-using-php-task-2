<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>

    <section id="header">
        <div class="logo">
            <img src="images/logo.jpg" alt="Car World Logo">
            <h2>Car World</h2>
        </div>
    <nav class="nav-bar">
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li>
                <a href="#">Cars</a>
                <ul class="dropdown">
                    <li>
                        <a href="new_cars.html">New Cars</a>
                        <ul class="submenu">
                            <li><a href="car1.html">Skoda Kylaq</a></li>
                            <li><a href="car2.html">Toyota Fortuner</a></li>
                            <li><a href="new_cars.html">View More</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="Electric_cars.html">Electric Cars</a>
                        <ul class="submenu">
                            <li><a href="carev1.html">Mahindra XEV 9e</a></li>
                            <li><a href="carev4.html">Hyundai Creta Electric</a></li>
                            <li><a href="Electric_cars.html">View More</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="popular_brands.html">Popular Brands</a>
                        <ul class="submenu">
                            <li><a href="carp1.html">Mahindra Thar</a></li>
                            <li><a href="carp5.html">Audi RS Q8 2025</a></li>
                            <li><a href="popular_brands.html">View More</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>

            <?php if (isset($_SESSION["username"])): ?>
                <li class="user-menu">
                    <a href="#">
                        <span class="material-icons">account_circle</span>
                        <?php echo $_SESSION["username"]; ?>
                    </a>
                    <ul class="dropdown">
                        <li>
                            <a href="logout.php">
                                <span class="material-icons">logout</span> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="signup.php" class="btn">Sign Up</a></li>
            <?php endif; ?>

        </ul>
    </nav>
</section>

    <section class="hero">
        <div>
            <h1>Welcome To Car World</h1>
            <p>Discover the best cars for your journey.<br><br> Explore our collection and find the perfect ride.</p>
            <a href="new_cars.html" class="btn">Explore Now</a>
        </div>
    </section>


    <section id="features" class="section-p1">
        <h1>All cars</h1>
        <p>We have all type of cars </p>
        <div class="pro-container">
            <div class="pro">
                <div  onclick="window.location.href='car1.html';">
                <img src="images/car1.jpeg" alt="car-1">
                <div class="des">
                    <div class="details">
                        <span>Skoda Kylaq</span>
                        <h4>Rs.7.89 - 14.40 Lakh</h4>
                    </div>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="#" class="btn">View More</a>
                </div>
            </div>
</div>

 <div class="pro">
    <div  onclick="window.location.href='car2.html';">
    <img src="images/car2.jpg" alt="car-2">
    <div class="des">
        <div class="details">
            <span>Kia Syros</span>
            <h4>Rs.9 - 17.80 Lakh</h4>
        </div>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <a href="#" class="btn">View More</a>
    </div>
</div>
</div>

<div class="pro">
    <div  onclick="window.location.href='carp4.html';">
    <img src="images/carsp-4.jpeg" alt="car-4">
    <div class="des">
        <div class="details">
            <span>Rolls-Royce Ghost Series II</span>
            <h4>Rs8.95 - 10.52 Cr</h4>
        </div>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <a href="#" class="btn">View More</a>
    </div>
</div>
</div>


<div class="pro">
    <div  onclick="window.location.href='car4.html';">
    <img src="images/car4.jpeg" alt="car-4">
    <div class="des">
        <div class="details">
            <span>Renault KWID</span>
            <h4>Rs.4.70 - 6.45 Lakh</h4>
        </div>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <a href="#" class="btn">View More</a>
    </div>
</div>
</div>


<div class="pro">
    <div  onclick="window.location.href='carev6.html';">
    <img src="images/carev-6.jpeg" alt="car-6">
    <div class="des">
        <div class="details">
            <span>Audi Q6 e-tron</span>
            <h4>Rs.1 Cr</h4>
        </div>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <a href="#" class="btn">View More</a>
    </div>
</div>
</div>


<div class="pro">
    <div  onclick="window.location.href='carp6.html';">
    <img src="images/carsp-6.jpeg" alt="car-6">
    <div class="des">
        <div class="details">
            <span>MG Majestor</span>
            <h4>Rs46 Lakh</h4>
        </div>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <a href="#" class="btn">View More</a>
    </div>
</div>
</div>

</div>
    </section>

    <footer id="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <div class="logo">
                <img src="images/logo.jpg" alt="Car World Logo">
                <h2>Car World</h2>
                <p>Your trusted destination for finding the perfect car.</p>
            </div>
            </div>

            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="listing.html">Cars</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <div class="footer-social">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Car World. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
