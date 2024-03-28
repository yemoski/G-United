<?php

require_once "config.php";

session_start();

if (isset($_SESSION["loggedin"]) && isset($_SESSION["usertype"]) && strcasecmp("User", $_SESSION["usertype"]) == 0) {
    header("Location: Profile.php");
    exit;
}else if (!isset($_SESSION["loggedin"])) {
    header("Location: Login.php");
    exit;
}

$itemName_err = $category_err = $itemType_err = $item_err = $province_err = $town_err = $store_err = $price_err = $image_err = "";
$itemName = $category = $itemType = $item = $province = $town = $store = $price = $imageLocation = "";

function getCategories() {
    global $connString;
    try {
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT DISTINCT category FROM grocerycategories";
        $statement = $pdo -> prepare($sql);
        $statement -> execute();
        
        echo "<option value=''>Select Category</option>";
        while ($row = $statement -> fetch()) {
            echo "<option value='".$row['category']."'>".$row['category']."</option>";
        }

    } catch (PDOException $e) {
        die( $e->getMessage());

    } finally {
        $pdo = null;
    }
} 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    try{
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $itemName = isset($_POST['itemName']) ? $_POST['itemName'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : '';
        $itemType = isset($_POST['type']) ? $_POST['type'] : '';
        $item = isset($_POST['item']) ? $_POST['item'] : '';
        $province = isset($_POST['province']) ? $_POST['province'] : '';
        $town = isset($_POST['town']) ? $_POST['town'] : '';
        $store = isset($_POST['store']) ? $_POST['store'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : '';
        $itemImage = isset($_FILES['image'])? $_FILES['image'] : '';
        
        if(empty(trim($itemName))) {
            $itemName_err = "Item name is required.";
        }

        if(empty($category)) {
            $category_err = "Please select an item category.";
        }

        if(empty($itemType)) {
            $itemType_err = "Please select an item type.";
        }

        if(empty($item)) {
            $item_err = "Please select an item.";
        }

        if(empty($province)) {
            $province_err = "Please select a province.";
        }

        if(empty($town)) {
            $town_err = "Please enter a valid town name.";
        }

        if(empty(trim($store))) {
            $store_err = "Please enter a store name.";
        }

        if(empty(trim($price))) {
            $price_err = "Please set an item price.";
        }

        if(!empty($itemImage['name']) && $itemImage['error'] == UPLOAD_ERR_OK) {
            $max_image_size = 10000000;
            $allowedTypes = array("image/jpeg", "image/png");

            if($itemImage['size'] > $max_image_size) {
                $image_err = "Image size is too big. Max size is 10MB";
            }else if (!in_array($itemImage['type'], $allowedTypes)) {
                $image_err = "Only image types (JPG and PNG) are allowed.";
            }else {
                $temp = $itemImage['tmp_name'];
                $destination = "./images/itemImages/".rand(1, 1000000).rand(1, 1000000).rand(1, 1000000)
                .$itemImage['name'].rand(1, 1000000).rand(1, 1000000).rand(1, 1000000);
                $imageLocation = $destination;

                if(!move_uploaded_file($temp, $destination)) {
                    $image_err = "There was a problem saving your profile image. Please try again later.";
                }
            }
        }

        if(isset($_SESSION["id"]) && empty($itemName_err) && empty($category_err) && empty($itemType_err) && empty($item_err) &&
        empty($province_err) && empty($town_err) && empty($store_err) && empty($price_err) && empty($image_err)) {
            $sql = "SELECT id from grocerycategories WHERE category = ? AND subcategory = ? AND item = ?";
            $statement = $pdo -> prepare($sql);
            $statement -> execute([$category, $itemType, $item]);
            $categoryid = $statement -> fetchColumn();

            $sql = "SELECT id from grocerystores WHERE storeName = ?";
            $statement = $pdo -> prepare($sql);
            $statement -> execute([$store]);
            $storeid = $statement -> fetchColumn();

            $sql = "INSERT INTO products(itemName, province, town, categoryid, storeid, price, imageLocation, createdBy) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $statement = $pdo -> prepare($sql);
            $statement -> execute([$itemName, $province, $town, $categoryid, $storeid, $price, $imageLocation, $_SESSION["id"]]);

            header("Location: Profile.php?status=success!");
            $pdo = null;
            exit;
        }

        $pdo = null;
    
    }catch (PDOException $e){
        die( $e->getMessage());
    }
}    

?>