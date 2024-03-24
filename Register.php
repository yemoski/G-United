<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register </title>
<link rel="shortcut icon" href="images/fav-icon.png"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
    #loginContainer fieldset {
        text-align: center;
        margin: auto;
        width: 600px;
        border: 3px solid;
        border-color: #40aa54;
        border-radius: 10px;
        min-height: 400px;
        margin-bottom: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #loginContainer fieldset h2{
        padding: 20px;
    }

    #loginContainer input{
        margin-bottom: 10px;
        border: none;
        border-bottom: 1px solid lightgray;
        padding: 20px 10px;
        width: 420px;
    }

    #userType input{
        width: auto;
    }

    #profileContainer input {
        width: 250px;
        border: none;
    }

    #userType input{
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 10px;
    }

    #login .logo, #login h3{
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
        margin-bottom: 20px;
        padding: 15px 32px;
        width: 200px;
        border-radius: 40px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
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
    include "extensionScripts/register.php";
?>

</head>

<body>

<?php include 'navbar.php'; ?>

    <section id="login">
        <h3>Welcome!</h3>
        <div id="loginContainer">
            <fieldset>
                <legend>
                    <div class="logo">
                        <span>G</span>-United
                    </div>
                </legend>
                <form method="post" enctype="multipart/form-data" onsubmit= "return validateForm()" novalidate >
                    <h2>Create Your Account</h2>
                    <p>
                        <input type="text" id="firstname" placeholder="First Name" value="<?php echo $firstname?>" name="firstname" required>
                           
                    </p>
                    <?php
                        if (!empty($firstName_err)) {
                            echo "<p id=\"firstNameErrorMessage\"style=\"color: red;\">$firstName_err</p>";
                        }
                    ?>
                    <p>
                        <input type="text" id="lastname" placeholder="Last Name" value="<?php echo $lastname?>" name="lastname" required>     
                    </p>
                    <?php
                        if (!empty($lastName_err)) {
                            echo "<p id=\"lastNameErrorMessage\"style=\"color: red;\">$lastName_err</p>";
                        }
                    ?>
                    <div id="userType">
                        <label><strong>Select User Type:</strong></label>
                        <input type="radio" class="userType" name="usertype" value="User" checked required> User 
                        <input type="radio" class="userType" name="usertype" value="Admin"> Admin
                    </div>
                    <?php
                        if (!empty($usertype_err)) {
                            echo "<p id=\"usertypeErrorMessage\"style=\"color: red;\">$usertype_err</p>";
                        }
                    ?>
                    <p>
                        <input type="text" id="loginParam" placeholder="Email address" value="<?php echo $emailAddress?>" name="emailAddress" required>     
                    </p>
                    <?php
                        if (!empty($email_err)) {
                            echo "<p id=\"emailErrorMessage\"style=\"color: red;\">$email_err</p>";
                        }
                    ?>
                    <p>
                        <input type="password" id="passwordEntry" placeholder="Password" name="firstPassword" required>     
                    </p>
                    <?php
                        if (!empty($password_err)) {
                            echo "<p id=\"passwordErrorMessage\"style=\"color: red;\">$password_err</p>";
                        }
                    ?>
                    <p>
                        <input type="password" id="confirmPassword" placeholder="Confirm Password" name="confirmPassword" required>     
                    </p>
                    
                    <p id="profileContainer">
                        <label><strong>Profile Image: </strong></label>
                        <input type="file" id="image" name="image" accept="image/*">
                    </p>
                    <?php
                        if (!empty($image_err)) {
                            echo "<p id=\"imageErrorMessage\"style=\"color: red;\">$image_err</p>";
                        }
                    ?>
                    <div>
                        <button type="submit">Register</button>
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
    
    <script>
        var loginParam = document.querySelector('#loginParam');
        let emailErrorMessage = document.querySelector("#emailErrorMessage");

        loginParam.addEventListener('input', function() {
            if(errorMessage){
                emailErrorMessage.remove();
            }
        });

        var firstName = document.querySelector('#firstname');
        let firstNameErrorMessage = document.querySelector("#firstNameErrorMessage");

        firstName.addEventListener('input', function() {
            if(firstNameErrorMessage){
                firstNameErrorMessage.remove();
            }
        });
        
        var lastName = document.querySelector('#lastname');
        let lastNameErrorMessage = document.querySelector("#lastNameErrorMessage");

        lastName.addEventListener('input', function() {
            if(lastNameErrorMessage){
                lastNameErrorMessage.remove();
            }
        });

        var passwordEntry = document.querySelector('#passwordEntry');
        let passwordErrorMessage = document.querySelector("#passwordErrorMessage");

        passwordEntry.addEventListener('input', function() {
            if(passwordErrorMessage){
                passwordErrorMessage.remove();
            }
        });

        var imageUpload = document.querySelector('#image');
        let imageErrorMessage = document.querySelector("#imageErrorMessage");

        imageUpload.addEventListener('change', function() {
            if(imageErrorMessage){
                imageErrorMessage.remove();
            }
        });
        
        var userTypeInputs = document.querySelectorAll('.userType');
        let userTypeErrorMessage = document.querySelector("#usertypeErrorMessage");

        userTypeInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                if (userTypeErrorMessage) {
                    userTypeErrorMessage.remove();
                }
            });
        });

        function validateForm() {
            var firstname = document.getElementById("firstname").value;
            var lastname = document.getElementById("lastname").value;
            var email = document.getElementById("loginParam").value;
            var password = document.getElementById("passwordEntry").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            var emailRegex = /(.+)@([^\.].*)\.([a-z]{2,})/;
            var passReg = /^[a-zA-Z]\w{7,16}$/;
            
            
            
            if (firstname == "") {
                alert("First name is required");
                return false;
            } 

            if (lastname == "") {
               alert( "Last name is required");
                return false;
            } 

           
            if (!emailRegex.test(email)) {
               alert("Invalid Email format");
                return false;
            } 

           
            if (password < 8) {
                alert("Password must be at least 8 characters long");
                return false;
            } 


            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            } 

            return true;

        }
    
    </script>
</body>
</html>