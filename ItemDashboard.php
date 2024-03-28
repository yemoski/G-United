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
        width: 25%;
        height: 100%;
        overflow-y: auto;
        height: 500px;
    }

    #category ul {
        align-items: center;
        margin: auto;
        width: 100%;
        padding: 20px;
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

    .itemBoxButtons button:hover {
        background-color: #4eb060;
        color: white;
        cursor: pointer;
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

    .collapsible {
        display: none;
        padding-left: 20px;
        background-color: #f1f1f1;
        margin: 10px;
        padding: 10px;

        p {
            margin: 10px;
        }
    }
    
</style>
<?php
    session_start();
    include "getItems.php";
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <h1 id="pageTitle">Dashboard</h1>
    <section id="searchBar">
        <form method="get" class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" class="search-input" placeholder="Search for your groceries" name="search">
            <input type="submit" class="search-btn" value="Search">
        </form>
    </section>

    <div id="dashboardContainer">
        <section id="category">
            <ul>
                <li>
                    <a href="#"><h3>Category</h3> <i class='fas fa-angle-down'></i></a>
                    <div class="collapsible" id=categoryCollapse>
                        
                    </div>
                </li>
                <li><a href="#"><h3>Brand</h3> <i class='fas fa-angle-down'></i></a>
                    <div class="collapsible" id=brandCollapse>
                    
                    </div>
                </li>
                <li><a href="#"><h3>Location</h3> <i class='fas fa-angle-down'></i></a>
                    <div class="collapsible" id=locationCollapse>
                    
                    </div>
                </li>
                <li><a href="#"><h3>Store</h3> <i class='fas fa-angle-down'></i></a>
                    <div class="collapsible" id=storeCollapse>
                    
                    </div>
                </li>
                <li><a href="#"><h3>Price</h3> <i class='fas fa-angle-down'></i></a>
                    <div class="collapsible" id=priceCollapse>
                    
                    </div>
                </li>
            </ul>
        </section>

        <section id="items">
            <div id="dashBoardHeading">
                <h3>All Groceries</h3>
                <span>Sort By <i class="fas fa-filter"></i></span>
            </div>
    
            <div id="products-container" <?php 
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
                echo 'class=loggedin';}
                else {
                echo 'class=';
                }?>>
                <?php
                    if(!empty($search)){
                        getItemByKeyword($search);
                    }else {
                        getAllItems();
                    }
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

    <script>
        $(document).ready(function() {
            $('#category li a').click(function() {
                var icon = $(this).find('i');
                var content = $(this).next('.collapsible');
                var searchInput = $('#searchInput').val().trim();
                var id = content.attr('id');

                if (icon.hasClass('fa-angle-down')) {
                    if (content.html().trim() === '' && searchInput != "") {
                        $.ajax({
                            url: "scripts/phpJSAjax.php", 
                            type: 'GET',
                            data: {search: searchInput},
                            success: function(response) {
                                let uniqueOptions = [];
                                $.each(JSON.parse(response), function(key, value) {
                                    var option = "";
                                    var radio = "";
                                    if(id == 'categoryCollapse'){
                                        option = value.category;
                                        radio = "<input type='checkbox' name='category' value='"+option+"'>"+option;
                                    }else if(id == 'brandCollapse'){
                                        option = value.itemName
                                        var radio = "<input type='checkbox' name='itemName' value='"+option+"'>"+option;
                                    }
                                    else if(id == 'locationCollapse'){
                                        option = value.town+', '+value.province;
                                        var radio = "<input type='checkbox' name='location' value='"+option+"'>"+option;
                                    }
                                    else if(id == 'storeCollapse'){
                                        option = value.storeName;
                                        var radio = "<input type='checkbox' name='storeName' value='"+option+"'>"+option;
                                    }

                                    if (!uniqueOptions.includes(option)) {
                                        uniqueOptions.push(option); 
                                        content.append('<p>' + radio + '</p>');
                                    }
                                });
                                content.slideDown();
                            }
                        });
                    }else {
                        content.slideDown();
                    }
                    icon.removeClass('fa-angle-down').addClass('fa-angle-up');
                } else {
                    icon.removeClass('fa-angle-up').addClass('fa-angle-down');
                    content.slideUp();
                }
            });

            $('#category .collapsible').on('change', 'input[type="checkbox"]', function() {        
                var selectedValuesMap = {};
                $('input[type="checkbox"]:checked').each(function() {
                    var columnName = $(this).attr('name');
                    if(columnName == "location") {
                        var newColumn = "town";
                        var [townValue] = $(this).val().split(",");
                        if (!selectedValuesMap[newColumn]) {
                            selectedValuesMap[newColumn] = [];
                        }
                        selectedValuesMap[newColumn].push(townValue);
                    }
                    else {
                        if (!selectedValuesMap[columnName]) {
                            selectedValuesMap[columnName] = [];
                        }
                        selectedValuesMap[columnName].push($(this).val());
                    }
                    
                });
                
                $.ajax({
                        url: "scripts/phpJSAjax.php", 
                        type: 'POST',
                        data: {action: "filter", filterValuesMap: selectedValuesMap},
                        success: function(response) {
                            $('#products-container').empty();
                            $.each(JSON.parse(response), function(key, value) {
                                var imgsrc = value.imageLocation!=""? value.imageLocation:"./images/default.png";
                                var productBox = "<div class='product-box'>";
                                productBox += "<img src='" + imgsrc + "' alt='" + value.itemName + "'>";
                                productBox += "<strong>" + value.itemName + "</strong>";
                                productBox += "<span class='quantity'>1 KG</span>";
                                productBox += "<span class='price'>$" + value.price + "</span>";
                                productBox += "<div class='itemBoxButtons'>";
                                productBox += "<button class='track-btn'>+ Track</button>";

                                if ($("#products-container").attr("class")=="loggedin") {
                                    productBox += "<button class='details-btn'>View Details</button>";
                                }
                                productBox += "</div><a href='#' class='like-btn'><i class='far fa-heart'></i></a></div>";

                                $('#products-container').append(productBox);
                            });
                        }
                });
            });
        });
    </script>
</body>
</html>