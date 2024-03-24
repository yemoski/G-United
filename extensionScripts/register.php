<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
    header("Location: .");
    exit;
}

require_once "config.php";

$email_err = $password_err = $firstName_err = $lastName_err = $usertype_err = $image_err = "";
$firstname = $lastname = $usertype = $emailAddress = $firstPassword = $confirmPassword = $profileLocation = "";

try{
    $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
        $usertype = isset($_POST['usertype']) ? $_POST['usertype'] : '';
        $emailAddress = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '';
        $firstPassword = isset($_POST['firstPassword']) ? $_POST['firstPassword'] : '';
        $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
        $profilePicture = isset($_FILES['image'])? $_FILES['image'] : '';

        if(isset($emailAddress) && !empty(trim($emailAddress)) && filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
            $sql = "SELECT COUNT(id) FROM users WHERE emailAddress = ?";
            $statement = $pdo -> prepare($sql);
            $statement -> bindValue(1, $emailAddress);
            $statement -> execute();

            $count = $statement -> fetchColumn();
            if ($count == 1) {
                $email_err = "This user account already exists.";
            }
        }else {
            $email_err = "Please enter a valid email address.";
        }
        
        if(!isset($firstname) || empty(trim($firstname))) {
            $firstName_err = "First name is required.";
        }

        if(!isset($lastname) || empty(trim($lastname))) {
            $lastName_err = "Last name is required.";
        }

        if(!isset($usertype) || empty($usertype)) {
            $usertype_err = "Please select a user type.";
        }

        if(!empty($profilePicture['name']) && $profilePicture['error'] == UPLOAD_ERR_OK) {
            $max_image_size = 10000000;
            $allowedTypes = array("image/jpeg", "image/png");

            if($profilePicture['size'] > $max_image_size) {
                $image_err = "Image size is too big. Max size is 10MB";
            }else if (!in_array($profilePicture['type'], $allowedTypes)) {
                $image_err = "Only image types (JPG and PNG) are allowed.";
            }else {
                $temp = $profilePicture['tmp_name'];
                $destination = "./images/userImages/".$emailAddress.$profilePicture['name'];
                $profileLocation = $destination;

                if(!move_uploaded_file($temp, $destination)) {
                    $image_err = "There was a problem saving your profile image. Please try again later.";
                }
            }
        }

        if (!isset($firstPassword) || empty(trim($firstPassword)) 
        || !isset($confirmPassword) || empty(trim($confirmPassword))) {
            $password_err = "Please enter a valid password.";
        }else {
            $first = trim($firstPassword);
            $confirm = trim($confirmPassword);
            
            if($first != $confirm) {
                $password_err = "Passwords do not match!";
            }elseif (strlen($first) < 8) {
                $password_err = "Password must be at least 8 or more characters.";
            }
        }

        if(empty($email_err) && empty($password_err) && empty($firstName_err) 
        && empty($lastName_err) && empty($usertype_err) && empty($image_err)) {
            $current_date = date("Y-m-d");
            $sql = "INSERT INTO users(firstname, lastname, emailAddress, password, usertype, profileLocation, createdDate) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $statement = $pdo -> prepare($sql);
            $statement -> execute([$firstname, $lastname, $emailAddress, md5($confirmPassword), $usertype, $profileLocation, $current_date]);

            $sql = "SELECT id FROM users WHERE emailAddress = ?";
            $statement = $pdo -> prepare($sql);
            $statement -> bindValue(1, $emailAddress);
            $statement -> execute();

            $id = $statement -> fetchColumn();
            
            $_SESSION["id"] = $id;
            $_SESSION["firstname"] = $firstname;
            $_SESSION["loggedin"] = TRUE;
            $_SESSION["usertype"] = $usertype;

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