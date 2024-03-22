<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login </title>
<link rel="shortcut icon" href="images/fav-icon.png"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>   
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
    #loginContainer fieldset {
        text-align: center;
        margin: auto;
        width: 30%;
        border: 3px solid;
        border-color: #40aa54;
        border-radius: 10px;
        min-height: 400px;
    }

    #loginContainer fieldset h3{
        padding: 20px;
    }

    #loginContainer input{
        margin-bottom: 10px;
        border: none;
        border-bottom: 1px solid lightgray;
        padding: 20px 10px;
        width: 80%;

    }

    #login .logo, #login h3{
        align-items: center;
        text-align: center;
        margin: auto;
    }

    #login .logo {
        font-size: 2rem;
    }

    button {
        background-color: #40aa54;
        border: none;
        color: white;
        margin-top: 20px;
        padding: 15px 32px;
        width: 50%;
        text-align: center;
        border-radius: 40px;
        display: inline-block;
    }
    
    footer {
        margin-top: 110px;
        width: 100%;
        height: 8%;
        color: white;
        background-color: black;
        padding: 0px;
    }

    footer p {
        padding: 0.3em 0.5em 0.3em 0.5em;
    }


</style>
<?php
    include "extensionScripts/login.php";
?>
</head>

<body>

    <?php include 'navbar.php'; ?>



    <section id="login">
        <h3>Welcome Back!</h3>
        <div id="loginContainer">
            <fieldset>
                <legend>
                    <div class="logo">
                        <span>G</span>-United
                    </div>
                </legend>
                <form method="post">
                    <h3>Login</h3>
                    <p>
                        <input type="text" id="loginParam" placeholder="Email address" name="emailAddress" required>     
                    </p>
                    <?php
                        if (!empty($email_err)) {
                            echo "<p id=\"emailErrorMessage\"style=\"color: red;\">$email_err</p>";
                        }
                    ?>
                    <p>
                        <input type="password" id="password" placeholder="Password" name="password" required>     
                    </p>
                    <?php
                        if (!empty($password_err)) {
                            echo "<p id=\"emailErrorMessage\"style=\"color: red;\">$password_err</p>";
                        }
                    ?>
                    <div>
                        <button type="submit">Sign In</button>
                    </div>
                </form>
            </fieldset> 
        </div>
    </section>

    <footer>
        <p>
            <small><i>&copy; G-United. All Rights Reserved</i></small>
        </p>
    </footer>
</body>

</html>