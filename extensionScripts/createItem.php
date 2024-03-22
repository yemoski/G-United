<?php


require_once "config.php";

if (isset($_SESSION["loggedin"]) && isset($_SESSION["usertype"]) && strcasecmp("User", $_SESSION["usertype"]) == 0) {
    header("Location: Profile.php");
    exit;
}

$itemName_err = $category_err = $province_err = $town_err = $price_err = $image_err = "";
$itemName = $category = $province = $town = $price = $imageLocation = "";

try{
    $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $itemName = isset($_POST['itemName']) ? $_POST['itemName'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : '';
        $province = isset($_POST['province']) ? $_POST['province'] : '';
        $town = isset($_POST['town']) ? $_POST['town'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : '';
        $itemImage = isset($_FILES['image'])? $_FILES['image'] : '';
        
        if(empty(trim($itemName))) {
            $itemName_err = "Item name is required.";
        }

        if(empty($category)) {
            $category_err = "Please select an item category.";
        }

        if(empty($province)) {
            $province_err = "Please select a province.";
        }

        if(empty($town)) {
            $town = "Please enter a valid town name.";
        }

        if(empty($price)) {
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
                $destination = "./images/itemImages/".$itemImage['name'];
                $imageLocation = $destination;

                if(!move_uploaded_file($temp, $destination)) {
                    $image_err = "There was a problem saving your profile image. Please try again later.";
                }
            }
        }

        if(empty($itemName_err) && empty($category_err) && empty($province_err) 
        && empty($town_err) && empty($price_err) && empty($image_err)) {
            $sql = "INSERT INTO products(itemName, category, province, town, price, imageLocation) VALUES (?, ?, ?, ?, ?, ?)";
            $statement = $pdo -> prepare($sql);
            $statement -> execute([$itemName, $category, $province, $town, $price, $imageLocation]);

            header("Location: Profile.php");
            $pdo = null;
            exit;
        }   
    }

    $pdo = null;

}catch (PDOException $e){
    die( $e->getMessage());
}    

?>