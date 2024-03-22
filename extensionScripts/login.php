<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
    header("Location: .");
    exit;
}

require_once "config.php";

$email_err = $password_err = "";
$emailAddress = $password = "";

try{
    $pdo = new PDO($connString, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $emailAddress = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        
        if(empty(trim($emailAddress))) {
            $email_err = "Please enter a valid email address to login.";
        }

        if(empty(trim($password))) {
            $password_err = "Please enter your password.";
        }
        
        if(empty($email_err) && empty($password_err)) {
            $sql = "SELECT id, emailAddress, password FROM users WHERE emailAddress = ?";
            $statement = $pdo -> prepare($sql);
            $statement -> execute([$emailAddress]);

            $row = $statement -> fetch();
            
            if($row){

                if($row['password']===md5($password)) {

                    $getsql = "SELECT id, firstname, usertype FROM users WHERE emailAddress = ?";
                    $dbstatement = $pdo -> prepare($getsql);
                    $dbstatement -> execute([$emailAddress]);

                    $result = $dbstatement -> fetch();
                    $_SESSION["id"] = $result['id'];
                    $_SESSION["firstname"] = $result['firstname'];
                    $_SESSION["usertype"] = $result['usertype'];
                    $_SESSION["loggedin"] = TRUE;

                    header("Location: Profile.php");
                    $pdo = null;
                    exit;
                }else {
                    $password_err = "Incorrect email or password.";
                }
            }else {
                $email_err = "User does not exist.";
            }
        }   
    }
    $pdo = null;
}catch (PDOException $e){
    die( $e->getMessage());
}    

?>