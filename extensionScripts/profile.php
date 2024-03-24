<?php

session_start();

require_once "config.php";

if (!isset($_SESSION["loggedin"])) {
    header("Location: Login.php");
    exit;
}

function getUserName() {
    $firstName = $_SESSION['firstname'];
    return $firstName;
}

function getProfileDetails() {
    $profileImage = "";
    $createdDate = "";

    try {
        global $connString;
        $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_SESSION["loggedin"]) && isset($_SESSION["id"])){
            $sql = "SELECT profileLocation, createdDate FROM users WHERE id = ?";
            $statement = $pdo -> prepare($sql);
            $statement -> execute([$_SESSION["id"]]);

            $row = $statement -> fetch();
            if($row){
                $profileImage = $row['profileLocation'];
                $createdDate = date('F Y', strtotime($row['createdDate']));
            }
        }

    } catch (PDOException $e) {
        die( $e->getMessage());

    } finally {
        $pdo = null;
    }

    return array($profileImage, $createdDate);
}


?>
