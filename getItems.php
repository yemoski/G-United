<?php

require_once "extensionScripts/config.php";

$search = '';

function getAllItems() {
    global $connString;
    try{
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "SELECT * FROM products";
        $statement = $pdo -> prepare($sql);
        $statement -> execute();
    
        while ($row = $statement -> fetch()) {
            $imgsrc = (empty($row['imageLocation'])) ? "./images/default.png" : $row['imageLocation'];
            echo "
                <div class='product-box'>
                    <img src='".$imgsrc."'alt=".$row['itemName']."'>
                    <strong>".$row['itemName']."</strong>
                    <span class='quantity'>1 KG</span>
                    <span class='price'>$".$row['price']."</span>
                    <div class='itemBoxButtons'>
                    <button class='track-btn'>+ Track</button>";
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
                echo "<button class='details-btn'>View Details</button>";
            }
                echo "</div><a href='#' class='like-btn'><i class='far fa-heart'></i></a></div>";
        }
    
        $pdo = null;
    
    }catch (PDOException $e){
        die( $e->getMessage());
    }    
    
}

function getCurrentItemsLimit6() {
    global $connString;
    try{
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 6";
        $statement = $pdo -> prepare($sql);
        $statement -> execute();
    
        while ($row = $statement -> fetch()) {
            $imgsrc = (empty($row['imageLocation'])) ? "./images/default.png" : $row['imageLocation'];
            echo "
                <div class='product-box'>
                    <img src='".$imgsrc."'alt=".$row['itemName']."'>
                    <strong>".$row['itemName']."</strong>
                    <span class='quantity'>1 KG</span>
                    <span class='price'>$".$row['price']."</span>
                    <div class='itemBoxButtons'>
                    <button class='track-btn'>+ Track</button>";
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
                echo "<button class='details-btn'>View Details</button>";
            }
                echo "</div><a href='#' class='like-btn'><i class='far fa-heart'></i></a></div>";
        }
    
        $pdo = null;
    
    }catch (PDOException $e){
        die( $e->getMessage());
    }    
    
}

function getItemByKeyword($keyword) {
    global $connString;
    try{
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        
        $param = $keyword;
        $sql = "SELECT * FROM products JOIN grocerycategories on products.categoryid = grocerycategories.id 
        JOIN grocerystores ON storeid = grocerystores.id WHERE category LIKE ? or subcategory LIKE ? 
        or item LIKE ? or itemName LIKE ? or town like ? or province LIKE ? or storeName LIKE ?";
        $statement = $pdo -> prepare($sql);
        $statement -> execute(['%'.$param.'%','%'.$param.'%','%'.$param.'%','%'.$param.'%','%'.$param.'%','%'.$param.'%','%'.$param.'%',]);

        while ($row = $statement -> fetch()) {
            $imgsrc = (empty($row['imageLocation'])) ? "./images/default.png" : $row['imageLocation'];
            echo "
                <div class='product-box'>
                    <img src='".$imgsrc."'alt=".$row['itemName']."'>
                    <strong>".$row['itemName']."</strong>
                    <span class='quantity'>1 KG</span>
                    <span class='price'>$".$row['price']."</span>
                    <div class='itemBoxButtons'>
                    <button class='track-btn'>+ Track</button>";
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
                echo "<button class='details-btn'>View Details</button>";
            }
                echo "</div><a href='#' class='like-btn'><i class='far fa-heart'></i></a></div>";
        }
    
        $pdo = null;
    
    }catch (PDOException $e){
        die( $e->getMessage());
    }    
    
}

if($_SERVER["REQUEST_METHOD"] == "GET") {
    $search = isset($_GET['search']) ? $_GET['search'] : '';
}

function getItemByCategory($category) {
    global $connString;
    try{
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "SELECT * FROM products WHERE category LIKE %$category%";
        $statement = $pdo -> prepare($sql);
        $statement -> execute();
    
        while ($row = $statement -> fetch()) {
            $imgsrc = (empty($row['imageLocation'])) ? "./images/default.png" : $row['imageLocation'];
            echo "
                <div class='product-box'>
                    <img src='".$imgsrc."'alt=".$row['itemName']."'>
                    <strong>".$row['itemName']."</strong>
                    <span class='quantity'>1 KG</span>
                    <span class='price'>$".$row['price']."</span>
                    <div class='itemBoxButtons'>
                    <button class='track-btn'>+ Track</button>";
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
                echo "<button class='details-btn'>View Details</button>";
            }
                echo "</div><a href='#' class='like-btn'><i class='far fa-heart'></i></a></div>";
        }
    
        $pdo = null;
    
    }catch (PDOException $e){
        die( $e->getMessage());
    }    
    
}
?>
