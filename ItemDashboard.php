<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard </title>
<link rel="shortcut icon" href="images/fav-icon.png"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>   
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>

    #dashboardContainer {
        display: flex;
        gap: 10px;
    }

    #category {
        border: 3px solid #4eb060;
        width: 20%;
        height: 100%;
        border-radius: 20px;
    }

    #category ul {
        align-items: center;
        margin: auto;
        width: 100%;
        padding: 30px;
    }

    #category li {
        border-bottom: 0.25px solid lightgray;
        width: 100%;
        padding: 40px 0px;
    }

    #category li a {
        display: flex;
        justify-content: space-between;
        margin: 0px 15px;
        color: #3b3b3b;
        font-weight: 500;
        letter-spacing: 0.5px;
        transition: all ease 0.3s;
    }

    #category li a i {
        padding-top: 10px;
    }


    #dashboardHeading{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    #dashboardHeading h3{
        font-size: 1.56rem;
        font-weight: 700;
        color: #202020;
        letter-spacing: 0.5px;
    }
    
    .itemBoxButtons {
        display: flex;
        gap: 10px;
    }
    
    #dashboardHeading span{
        color: #a7a7a7;
        font-weight: 400;
        text-align: center;
        padding: 10px 0px;
        border-radius: 15px;
        letter-spacing: 1px;
        width: 100px;
        height: 40px;
    }

    #dashboardHeading span:hover{
        background-color: #4eb060;
        color: #ffffff;
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

    .product-box .track-btn:hover, .details-btn:hover{ 
        background-color: #4eb060;
        color: #ffffff;
        transition: all ease 0.3s;
    }

    #items {
        flex-grow: 1;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        max-width: 1000px;
        margin: 50px auto;
        height: 500px;
    }

    #products-container{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 30px;
        align-items: center;
        margin: 40px 0px;
    }

    #pageTitle {
        text-align: center;
    }

    #searchBar{
        background-color: #ffffff;
        height: 50px;
        display: flex;
        align-items: center;
        margin-top: 25px;
        padding: 0px 20px 0px 20px;
        border-radius: 30px;
    }

    .search-box{
        align-items: center;
        margin: auto;
        border: 3px solid lightgrey;
        width: 60%;
    }
    
</style>
<?php
    session_start();
?>
</head>

<body>
    <nav class="navigation">
        <a href="index.php" class="logo">
            <span>G</span>-United
        </a>
        
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>

        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="Register.php">Register</a></li>
            <li><a href="Profile.php">Profile</a></li>
            <li><a href="Logout.php">Logout</a></li>
        </ul>

        <div class="right-nav">
            <a href="#" class="like">
                <i class="far fa-heart"></i>
                <span>0</span>
            </a>

            <a href="#" class="cart">
                <i class="fas fa-shopping-cart"></i>
                <span>0</span>
            </a>
        </div>
    </nav>

    <h1 id="pageTitle">Dashboard</h1>
    <section id="searchBar">
        <form action="" class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" class="search-input" placeholder="Search for your groceries" name="search" required>
            <input type="submit" class="search-btn" value="Search">
        </form>
    </section>

    <div id="dashboardContainer">
        <section id="category">
            <ul>
                <li><a href="#"><h3>Category</h3> <i class='fas fa-angle-down'></i></a></li>
                <li><a href="#"><h3>Brand</h3> <i class='fas fa-angle-down'></i></a></li>
                <li><a href="#"><h3>Location</h3> <i class='fas fa-angle-down'></i></a></li>
                <li><a href="#"><h3>Price</h3> <i class='fas fa-angle-down'></i></a></li>
            </ul>
        </section>

        <section id="items">
            <div id="dashBoardHeading">
                <h3>All Groceries</h3>
                <span>Filter <i class="fas fa-filter"></i></span>
            </div>
    
            <div id="products-container">
            <?php
                include "extensionScripts/getItems.php";
            ?>
            </div>
        </section>
    </div>
    
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const searchParam = urlParams.get('search');
        var searchInput = document.getElementById("searchInput");
        searchInput.value = searchParam;
    </script>
   
    
</body>
</html>