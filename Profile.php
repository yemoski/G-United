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

    #doubleColumn {
        display: flex;
    }

    .dropdown {
        position: relative;
        margin-bottom: 20px;
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
        margin: auto;
    }

    .profileInfo {
        display: flex;
        flex-direction: column;
        position: relative;
        margin-left: 10px;
        width: fit-content;
    }

    #actions {
        width: 30%;
        align-items: center;
        display: flex;
        flex-direction: column;
        gap: 20px;
        padding: 20px 0px;
        border-right: 1px solid lightgray;
    }

    .category-heading {
        margin: auto; 
    }

    #category-box {
        border: 3px solid #4eb060;
        width: 80%;
        height: 100%;
        border-radius: 20px;
    }

    #category-box ul {
        align-items: center;
        margin: auto;
        width: 100%;
        padding: 30px;
    }

    #category-box li {
        border-bottom: 0.25px solid lightgray;
        width: 100%;
        padding: 40px 0px;
        text-align: center;
        &:hover {
            background-color: whitesmoke;
        }
    }

    #category-box li a {
        display: flex;
        justify-content: center;
        margin: 0px 15px;
        color: #3b3b3b;
        font-weight: bold;
        letter-spacing: 0.5px;
        transition: all ease 0.3s;

        &:hover {
            color: #4eb060;
        }
    }

    #profileContent {
        border-top: 1px solid lightgray;
        border-bottom: 1px solid lightgray;
        display: flex;
        margin-bottom: 20px;
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
    <?php include 'navbar.php'; ?>
    <div id="profileContent">
        <section id="actions">
            <div id="category-box">
            <ul>
                <li>
                    <a href="#">
                        <span>Your Tracked Items</span>
                    </a>           
                </li>  
                <?php
                    if(isset($_SESSION["loggedin"]) && isset($_SESSION["usertype"]) && strcasecmp("Admin", $_SESSION["usertype"]) == 0) {
                        echo "
                        <li>
                            <a href=\"createItem.php\">
                                <span>Create an Item</span>
                            </a>
                        </li>";
                    }
                ?>
                <li>
                    <a href="#">
                        <span>Account settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Your Comments</span>
                    </a>
                </li>
                <li>  
                    <a href="#">
                        <span>Invite Friends</span>
                    </a>
                </li> 
            </ul>  
            </div>
        </section>

        <section id="Profiledetails">
                <div class="profileInfo search-banner-text">
                    <h1 class="profiledetails">
                        Hello <?php echo getUserName()?>,
                    </h1>
                    <h3>

                        Member since <?php echo getProfileDetails()[1]?>

                    </h3>
                </div>
                <img id=profileImage alt="profile Image" src="<?php echo getProfileDetails()[0]?>">
        </section>
    </div>
    
    <div class="dropdown">
        <button class="dropbtn">Want to know About Us ?</button>
        <div class="dropdown-content">
            <p>Welcome to G-United, your trusted partner in navigating the world of grocery shopping. At G-United, we understand the challenges consumers face when it comes to finding the best deals on everyday essentials. That's why we've dedicated ourselves to revolutionizing the way people track and compare grocery prices.</p>
            <p>With our innovative platform, shoppers can effortlessly monitor prices across various stores, ensuring they never miss out on savings. Whether you're a budget-conscious family or a savvy shopper looking to optimize your grocery spending, G-United empowers you to make informed decisions that stretch your dollars further.</p>
            <p>Our team is committed to providing accurate, up-to-date information and intuitive tools that simplify the shopping experience. By harnessing the power of data analytics and technology, we aim to democratize access to pricing information, leveling the playing field for all consumers.</p>
            <p>Join the G-United community today and embark on a journey towards smarter shopping. Together, let's unlock a world of savings and convenience, one grocery trip at a time.</p>
        </div>
    </div>
 
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