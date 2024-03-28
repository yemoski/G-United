<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Entry and Price Reporting</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            min-height: 500px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }

        .container form {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .container form #price {
            width: 200px;
            padding: 3px;
            margin: 5px;
        }

        .container form button {
            margin: auto;
            width: 300px;
            margin-top: 20px;
            border-radius: 30px;
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
    include "extensionScripts/createItem.php";
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
<script>
    function validateForm() {
        var itemName = document.getElementById("itemName").value;
        var category = document.getElementById("itemCategory").value;
        var itemType = document.getElementById("itemType").value;
        var item = document.getElementById("item").value;
        var province = document.getElementById("province").value;
        var town = document.getElementById("town").value;
        var price = document.getElementById("price").value;
        var storeName = document.getElementById("store").value;

        if (itemName == "") {
            alert("Error! Please enter the item name.");
            return false;
        }
        if (category == "") {
            alert("Error! Please select a category.");
            return false;
        }
        if (itemType == "") {
            alert("Error! Please select an item type.");
            return false;
        }
        if (item == "") {
            alert("Error! Please select an item.");
            return false;
        }
        if (province == "") {
            alert("Error! Please select a province.");
            return false;
        }
        if (town == "") {
            alert("Error! Please enter a city name.");
            return false;
        }
        if (price == "") {
            alert("Error! Please enter an item price.");
            return false;
        }
        if (storeName == "") {
            alert("Error! Please enter a store name.");
            return false;
        }
        return true;
    }
</script>
    <div class="container">
        <h2>Enter your Item</h2>
        <form method="post" enctype="multipart/form-data" onsubmit="return validateForm()" novalidate>
            <label for="itemName">Item Name:</label>
            <input type="text" id="itemName" name="itemName" required>
            <?php
                if (!empty($itemName_err)) {
                    echo "<p id=\"itemNameError\"style=\"color: red;\">$itemName_err</p>";
                }
            ?>

            <label for="category">Category:</label>
            <select id="itemCategory" name="category" required>
                <?php
                    getCategories();
                ?>
            </select>
            <?php
                if (!empty($category_err)) {
                    echo "<p id=\"categoryError\"style=\"color: red;\">$category_err</p>";
                }
            ?>

            <label for="itemType">Item Type:</label>
            <select id="itemType" name="type" required>
                
            </select>
            <?php
                if (!empty($itemType_err)) {
                    echo "<p id=\"itemTypeError\"style=\"color: red;\">$itemType_err</p>";
                }
            ?>

            <label for="item">Item:</label>
            <select id="item" name="item" required>
                
            </select>
            <?php
                if (!empty($item_err)) {
                    echo "<p id=\"itemError\"style=\"color: red;\">$item_err</p>";
                }
            ?>

            <label for="province">Province:</label>
            <select id="province" name="province" required>
                <option value="">Select Province</option>
                <option value="AB">Alberta</option>
                <option value="BC">British Columbia</option>
                <option value="MB">Manitoba</option>
                <option value="NB">New Brunswick</option>
                <option value="NL">Newfoundland and Labrador</option>
                <option value="NS">Nova Scotia</option>
                <option value="ON">Ontario</option>
                <option value="PE">Prince Edward Island</option>
                <option value="QC">Quebec</option>
                <option value="SK">Saskatchewan</option>
                <option value="NT">Northwest Territories</option>
                <option value="NU">Nunavut</option>
                <option value="YT">Yukon</option>
            </select>
            <?php
                if (!empty($province_err)) {
                    echo "<p id=\"provinceError\"style=\"color: red;\">$province_err</p>";
                }
            ?>

            <label for="town">City:</label>
            <input type="text" id="town" name="town" required>
            <?php
                if (!empty($town_err)) {
                    echo "<p id=\"townError\"style=\"color: red;\">$town_err</p>";
                }
            ?>
            
            <div id="storeList">
                <label for="store">Grocery Store:</label>
                <input type="text" id="store" name="store" list="searchOptions" placeholder="Enter Store Name" required>
                <datalist id="searchOptions">
                
                </datalist>
            </div>
            <?php
                if (!empty($store_err)) {
                    echo "<p id=\"storeError\"style=\"color: red;\">$store_err</p>";
                }
            ?>

            <label for="price">Price ($):</label>
            <input id="price" type="number" min="0.00" max="2000.00" step="0.01" id="price" name="price" required>
            <?php
                if (!empty($price_err)) {
                    echo "<p id=\"priceError\"style=\"color: red;\">$price_err</p>";
                }
            ?>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*">
            <?php
                if (!empty($image_err)) {
                    echo "<p id=\"imageError\"style=\"color: red;\">$image_err</p>";
                }
            ?>

            <button type="submit">Submit</button>
        </form>
    </div>

<script>
    $(document).ready(function() {
        $('#itemCategory').change(function() {
            var selectedCategory = $(this).val(); 

            if (!selectedCategory) {
                console.error('No category selected.');
                $('#itemType').empty();
                $('#item').empty();
                return; 
            }

            $('#itemType').empty().append('<option value="">Select Item Type</option>');
            $('#item').empty();

            if (selectedCategory ) {
                $.ajax({
                    url: "scripts/phpJSAjax.php", 
                    type: 'GET',
                    data: { category: selectedCategory },
                    success: function(response) {
                        if (response) {
                            $('#itemType').append(response);
                        } else {
                            $('#itemType').append('<option value="">No subcategories available</option>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching subcategories:', error);
                    }
                });
            }
        });

        $('#itemType').change(function() {
            var itemCategory = $('#itemCategory').val(); 
            var itemType = $(this).val(); 

            if (!itemCategory || !itemType) {
                console.error('No category selected.');
                $('#item').empty();
                return; 
            }

            $('#item').empty().append('<option value="">Select Item</option>');

            if (itemType && itemCategory) {
                $.ajax({
                    url: "scripts/phpJSAjax.php", 
                    type: 'GET',
                    data: { category: itemCategory, itemType: itemType },
                    success: function(response) {
                        if (response) {
                            $('#item').append(response);
                        } else {
                            $('#item').append('<option value="">No items available</option>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching items:', error);
                    }
                });
            }
        });

        $('#store').on("input", function() {
            var storeName = $('#store').val().trim(); 
        
            $('#searchOptions').empty();

            if (storeName != "") {
                $.ajax({
                    url: "scripts/phpJSAjax.php", 
                    type: 'GET',
                    data: { storeName: storeName },
                    success: function(response) {
                        if (response) {
                            $('#searchOptions').append(response);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching autocomplete options:', error);
                    }
                });
            }
        });
    });
</script>
</body>
</html>
