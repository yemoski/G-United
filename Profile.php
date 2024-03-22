<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--==Title==================================-->
<title>G-United Store</title>

<!--==Stylesheet=============================-->
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<style>
    /* CSS styles */
    body {
        background-color: white; 
    }

    .dropdown {
        position: relative;
    
    }

    #profileImage {
        width: 150px;
        border-radius: 50%;
        height: 150px;
    }
    
    .dropbtn{
        position: relative;
        padding: 10px;
        display: flex;
        margin: auto;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        border: 1px solid rgba(0, 0, 0, 0.03);
        right: 0;
    }

    .dropdown-content {
        display: none;
        position: relative;
        background-color: white;
        max-width: 1000px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
        margin: auto;
        padding: 20px;
        border: 1px solid #40aa54;
        border-radius: 30px;
        margin-top: 10px;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    #Profiledetails {
        border-radius: 30px;
        display: flex;
        gap: 10px;
        align-items: center;
        gap: 40px;
        width: fit-content;
        padding: 20px;
        border: 3px solid green;
        margin: auto;
    }

    .profileInfo {
        display: flex;
        flex-direction: column;
        position: relative;
        margin-left: 10px;
        width: fit-content;
    }

</style>

<!--==Fav-icon===============================-->
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--==Using-Font-Awesome=====================-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--==Import-Font-Family======================-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<?php
    include "extensionScripts/profile.php";
?>
</head>
<body>
    <!--==Navigation================================-->
    <nav class="navigation">
        <!--logo-------->
        <a href="index.php" class="logo">
            <span>G</span>- United
        </a>
        <!--menu-btn---->
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------->
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="Register.php">Register</a></li>
            <li><a href="Profile.php" class="active">Profile</a></li>
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
    <section id="Profiledetails">
        <!--bg--------->
        <!--text------->
        <div class="profileInfo search-banner-text">
            <h1 class="profiledetails">
                Hello <?php echo getUserName()?>,
            </h1>
            <h3>
                Member since 2020
            </h3>
        </div>
        <img id=profileImage alt="profile Image" src="<?php echo getProfileImage()?>">
      
    </section>
    <!--search-banner-end--------------->
    
    <!--==category=========================================-->
    <section id="category">
        <!--heading---------------->
        <div class="category-heading">
            <h2>Account Details</h2>
        </div>
        <!--box-container---------->
        <div class="category-container">
          
            <!--box---------------->
            <ul style="margin: auto;">
                <li>
                    <a href="#" class="profile-box">
                        <span>Your Tracked Items</span>
                    </a>           
                </li>  
                <?php
                    if(isset($_SESSION["loggedin"]) && isset($_SESSION["usertype"]) && strcasecmp("Admin", $_SESSION["usertype"]) == 0) {
                        echo "
                        <li>
                            <a href=\"createItem.php\" class=\"profile-box\">
                                <span>Create an Item</span>
                            </a>
                        </li>";
                    }
                ?>
                <li>
                    <a href="#" class="profile-box">
                        <span>Account settings</span>
                    </a>
                    <!--box---------------->

                </li>
                <li>
                    <a href="#" class="profile-box">
                        <span>Your Messages</span>
                    </a>
                    <!--box---------------->
                </li>
                <li>  
                    <a href="#" class="profile-box">
                        <span>Invite Friends</span>
                    </a>
                </li> 
            </ul>  
        </div>
        
    </section>
    <!--category-end----------------------------------->


    <div class="dropdown">
        <button class="dropbtn">Want to know About Us ?</button>
        <div class="dropdown-content">
            <p>Welcome to G-United, your trusted partner in navigating the world of grocery shopping. At G-United, we understand the challenges consumers face when it comes to finding the best deals on everyday essentials. That's why we've dedicated ourselves to revolutionizing the way people track and compare grocery prices.</p>
            <p>With our innovative platform, shoppers can effortlessly monitor prices across various stores, ensuring they never miss out on savings. Whether you're a budget-conscious family or a savvy shopper looking to optimize your grocery spending, G-United empowers you to make informed decisions that stretch your dollars further.</p>
            <p>Our team is committed to providing accurate, up-to-date information and intuitive tools that simplify the shopping experience. By harnessing the power of data analytics and technology, we aim to democratize access to pricing information, leveling the playing field for all consumers.</p>
            <p>Join the G-United community today and embark on a journey towards smarter shopping. Together, let's unlock a world of savings and convenience, one grocery trip at a time.</p>
        </div>
    </div>
   
    
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