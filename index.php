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

<style>
    .itemBoxButtons {
        display: flex;
        gap: 10px;
    }
    
    .itemBoxButtons button{
        border: none;
        width: 50%;
        height: 40px;
        background-color: #ecf7ee;
        color: #4eb060;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        border-radius: 40px;
        transition: all ease 0.3s;
    }

    .itemBoxButtons button:hover {
        background-color: #4eb060;
        color: white;
        cursor: pointer;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<?php
    include "getItems.php";
?>
</head>
<body>

    <?php include 'navbar.php'; ?>
   

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
            <a href="ItemDashboard.php?search=Seafood" class="category-box">
                <img alt="Fish" src="images/fish.png">
                <span>Seafood</span>
            </a>
            <!--box---------------->
            <a href="ItemDashboard.php?search=Produce" class="category-box">
                <img alt="Produce" src="images/Vegetables.png">
                <span>Produce</span>
            </a>
            <!--box---------------->
            <a href="ItemDashboard.php?search=Healthcare" class="category-box">
                <img alt="Healthcare" src="images/medicine.png">
                <span>Healthcare</span>
            </a>
            <!--box---------------->
            <a href="ItemDashboard.php?search=Baby+Care" class="category-box">
                <img alt="Baby" src="images/baby.png">
                <span>Baby</span>
            </a>
            <!--box---------------->
            <a href="ItemDashboard.php?search=Household+and+Cleaning+Supplies" class="category-box">
                <img alt="Office" src="images/office.png">
                <span>Household</span>
            </a>
            <!--box---------------->
            <a href="ItemDashboard.php?search=Personal+Care" class="category-box">
                <img alt="Beauty" src="images/beauty.png">
                <span>Personal Care</span>
            </a>
            <!--box---------------->
            <a href="ItemDashboard.php?search=Produce" class="category-box">
                <img alt="Gardening" src="images/Gardening.png">
                <span>Gardening</span>
            </a>
        </div>
        
    </section>
    <!--category-end----------------------------------->
    <!--==Products====================================-->
    <section id="popular-product">
        <!--heading----------->
        <div class="product-heading">
            <h3>Current Products</h3>
            <span><a href="ItemDashboard.php" style="color:green;">All</a></span>
        </div>
        <!--box-container------>
        <div class="product-container">
            <?php
                //getCurrentItemsLimit6();
            ?>
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


<script>
    function updateProductContainer() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    document.querySelector('.product-container').innerHTML = xhr.responseText;
                } else {
                    console.error('Error: ' + xhr.status);
                }
            }
        };
        xhr.open('GET', 'update_items.php', true); 
        xhr.send();
    }

    updateProductContainer();
    setInterval(updateProductContainer, 120000);
</script>
</body>
</html>