<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--==Title==================================-->
<title>G-United Store</title>
<!--==Stylesheet=============================-->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<!--==Fav-icon===============================-->
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--==Using-Font-Awesome=====================-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--==Import-Font-Family======================-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!--==Navigation================================-->
    <nav class="navigation">
        <!--logo-------->
        <a href="index.php" class="logo">
            <span>G</span> - United
        </a>
        <!--menu-btn---->
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------->
        <ul class="menu">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="Register.php">Register</a></li>
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="Logout.php">Logout</a></li>
        </ul>
        <!--right-nav-(cart-like)-->
        <div class="right-nav">
            <!--like----->
            <a href="#" class="like">
                <i class="far fa-heart"></i>
                <span>0</span>
            </a>
            <!--cart----->
            <a href="#" class="cart">
                <i class="fas fa-shopping-cart"></i>
                <span>0</span>
            </a>
        </div>
    </nav>
    <!--nav-end--------------------->

    <!--==Search-banner=======================================-->
    <section id="search-banner">
        <!--bg--------->
        <img alt="bg" class="bg-1" src="images/bg-1.png">
        <img alt="bg-2" class="bg-2" src="images/bg-2.png">
        <!--text------->
        <div class="search-banner-text">
            <h1>Track your grocery prices in real time</h1>
            <strong>Try for Free!</strong>
            <!--search-box------>
            <form action="ItemDashboard.php" method="get" class="search-box">
                <!--icon------>
                <i class="fas fa-search"></i>
                <!--input----->
                <input type="text" class="search-input" placeholder="Search your daily groceries" name="search" required>
                <!--btn------->
                <input type="submit" class="search-btn" value="Search">
            </form>
        </div>
    </section>
    <!--search-banner-end--------------->
    
    <!--==category=========================================-->
    <section id="category">
        <!--heading---------------->
        <div class="category-heading">
            <h2>Category</h2>
            <span>All</span>
        </div>
        <!--box-container---------->
        <div class="category-container">
            <!--box---------------->
            <a href="#" class="category-box">
                <img alt="Fish" src="images/fish.png">
                <span>Fish & Meat</span>
            </a>
            <!--box---------------->
            <a href="#" class="category-box">
                <img alt="Fish" src="images/Vegetables.png">
                <span>Vegatbles</span>
            </a>
            <!--box---------------->
            <a href="#" class="category-box">
                <img alt="Fish" src="images/medicine.png">
                <span>Medicine</span>
            </a>
            <!--box---------------->
            <a href="#" class="category-box">
                <img alt="Fish" src="images/baby.png">
                <span>Baby</span>
            </a>
            <!--box---------------->
            <a href="#" class="category-box">
                <img alt="Fish" src="images/office.png">
                <span>Office</span>
            </a>
            <!--box---------------->
            <a href="#" class="category-box">
                <img alt="Fish" src="images/beauty.png">
                <span>Beauty</span>
            </a>
            <!--box---------------->
            <a href="#" class="category-box">
                <img alt="Fish" src="images/Gardening.png">
                <span>Gardening</span>
            </a>
        </div>
        
    </section>
    <!--category-end----------------------------------->
    <!--==Products====================================-->
    <section id="popular-product">
        <!--heading----------->
        <div class="product-heading">
            <h3>Popular Product</h3>
            <span>All</span>
        </div>
        <!--box-container------>
        <div class="product-container">
            <!--box---------->
            <div class="product-box">
                <img alt="apple" src="images/apple.png">
                <strong>Apple</strong>
                <span class="quantity">1 KG</span>
                <span class="price">2$</span>
                <!--cart-btn------->
                <a href="#" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add Cart
                </a>
                <!--like-btn------->
                <a href="#" class="like-btn">
                    <i class="far fa-heart"></i>
                </a>
            </div>
            <!--box---------->
            <div class="product-box">
                <img alt="apple" src="images/chili.png">
                <strong>Chili</strong>
                <span class="quantity">1 KG</span>
                <span class="price">3$</span>
                <!--cart-btn------->
                <a href="#" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add Cart
                </a>
                <!--like-btn------->
                <a href="#" class="like-btn">
                    <i class="far fa-heart"></i>
                </a>
            </div>
            <!--box---------->
            <div class="product-box">
                <img alt="apple" src="images/onion.png">
                <strong>Onion</strong>
                <span class="quantity">1 KG</span>
                <span class="price">1$</span>
                <!--cart-btn------->
                <a href="#" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add Cart
                </a>
                <!--like-btn------->
                <a href="#" class="like-btn">
                    <i class="far fa-heart"></i>
                </a>
            </div>
            <!--box---------->
            <div class="product-box">
                <img alt="apple" src="images/patato.png">
                <strong>Patato</strong>
                <span class="quantity">1 KG</span>
                <span class="price">2.2$</span>
                <!--cart-btn------->
                <a href="#" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add Cart
                </a>
                <!--like-btn------->
                <a href="#" class="like-btn">
                    <i class="far fa-heart"></i>
                </a>
            </div>
            <!--box---------->
            <div class="product-box">
                <img alt="apple" src="images/garlic.png">
                <strong>Garlic</strong>
                <span class="quantity">1 KG</span>
                <span class="price">3$</span>
                <!--cart-btn------->
                <a href="#" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add Cart
                </a>
                <!--like-btn------->
                <a href="#" class="like-btn">
                    <i class="far fa-heart"></i>
                </a>
            </div>
            <!--box---------->
            <div class="product-box">
                <img alt="apple" src="images/tamato.png">
                <strong>Tamato</strong>
                <span class="quantity">1 KG</span>
                <span class="price">1.4$</span>
                <!--cart-btn------->
                <a href="#" class="cart-btn">
                    <i class="fas fa-shopping-bag"></i> Add Cart
                </a>
                <!--like-btn------->
                <a href="#" class="like-btn">
                    <i class="far fa-heart"></i>
                </a>
            </div>
        </div>
    </section>
    <!--popular-product-end--------------------->
    
    <!--==Clients===============================================-->
    <section id="clients">
        <!--heading---------------->
        <div class="client-heading">
            <h3>What Our Client's Say</h3>
        </div>
        <!--box-container---------->
        <div class="client-box-container">
            <!--box------------->
            <div class="client-box">
                <!--==profile===-->
                <div class="client-profile">
                    <!--img--->
                    <img alt="client" src="images/client-1.jpg">
                    <!--text-->
                    <div class="profile-text">
                        <strong>Osimeh</strong>
                        <span>CEO</span>
                    </div>
                </div>
                <!--==Rating======-->
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <!--==comments===-->
                <p>E goes well!!</p>
            </div>
            <!--box------------->
            <div class="client-box">
                <!--==profile===-->
                <div class="client-profile">
                    <!--img--->
                    <img alt="client" src="images/client-2.jpg">
                    <!--text-->
                    <div class="profile-text">
                        <strong>Iwobi</strong>
                        <span>Software Developer</span>
                    </div>
                </div>
                <!--==Rating======-->
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <!--==comments===-->
                <p>Amapiano!</p>
            </div>
            <!--box------------->
            <div class="client-box">
                <!--==profile===-->
                <div class="client-profile">
                    <!--img--->
                    <img alt="client" src="images/client-3.jpg">
                    <!--text-->
                    <div class="profile-text">
                        <strong>Iheanacho</strong>
                        <span>Senior Man</span>
                    </div>
                </div>
                <!--==Rating======-->
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <!--==comments===-->
                <p>Gbas Gbos!</p>
            </div>
        </div>
    </section>
    <!--client-section-end---------->
   
    <!--==Footer=============================================-->
    <footer>
        <div class="footer-container">
            <!--logo-container------>
            <div class="footer-logo">
                <a href="#"><span>G</span>-United</a>
                <!--social----->
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <!--links------------------------->
        <div class="footer-links">
            <strong>Product</strong>
            <ul>
                <li><a href="#">Clothes</a></li>
                <li><a href="#">Packages</a></li>
                <li><a href="#">Popular</a></li>
                <li><a href="#">New</a></li>
            </ul>
        </div>
        <!--links------------------------->
        <div class="footer-links">
            <strong>Category</strong>
            <ul>
                <li><a href="#">Beauty</a></li>
                <li><a href="#">Meats</a></li>
                <li><a href="#">Kids</a></li>
                <li><a href="#">Clothes</a></li>
            </ul>
        </div>
        <!--links-------------------------->
        <div class="footer-links">
            <strong>Contact</strong>
            <ul>
                <li><a href="#">Phone : +123456789</a></li>
                <li><a href="#">Email : naija@gmail.com</a></li>
            </ul>
        </div>
        </div>
    </footer>
</body>
</html>