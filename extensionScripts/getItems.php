<?php

require_once "config.php";

try{
    $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM products";
    $statement = $pdo -> prepare($sql);
    $statement -> execute();

    while ($row = $statement -> fetch()) {
        echo "
            <div class='product-box'>
                <img src='".$row['imageLocation']."'alt=".$row['itemName']."'>
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

?>
