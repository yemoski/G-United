
 <!--==Navigation================================-->

 <style>

.breadcrumb {
    font-size: 14px;
    margin-bottom: 10px;
}

.breadcrumb a {
    text-decoration: none;
    color: #333; /* Link color */
}

.breadcrumb a:hover {
    text-decoration: underline; /* Underline on hover */
}

.breadcrumb span {
    color: black; /* Separator and current page color */
}


    </style>
 <nav class="navigation">
        <!--logo-------->
        <a href="index.php" class="logo">
            <span>G</span> - United
        </a>
        <!--menu-btn---->
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <div class ="breadcrumb">
            <?php
                     
                     $breadcrumbs = array();
        

        if (isset($_SESSION["loggedin"])) {
            $breadcrumbs = array(
                array("Home", "index.php"),
                array("Profile", "Profile.php"),
                array("Logout", "Logout.php"),
                array(getCurrentPageName(), $_SERVER['PHP_SELF'])
            );
        } else {
            // Output default breadcrumbs for logged-out user
            $breadcrumbs = array(
                array("Home", "index.php"),
                array("Login", "Login.php"),
                array("Register", "Register.php"),
                array(getCurrentPageName(), $_SERVER['PHP_SELF'])
            );
        }

       
        $total_breadcrumbs = count($breadcrumbs);
        foreach ($breadcrumbs as $key => $breadcrumb) {
            if ($breadcrumb[0] == "Current Page") {
                echo '<span>' . $breadcrumb[0] . '</span>';
            } else {
                echo '<a href="' . $breadcrumb[1] . '">' . $breadcrumb[0] . '</a>';
            }
            if ($key < $total_breadcrumbs - 1) {
                echo '<span> / </span>'; 
            }
        }

        function getCurrentPageName()
        {
            return basename($_SERVER['PHP_SELF'], ".php");
        }
        ?>
    </div>
                
          
        <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            if ( isset($_SESSION["loggedin"])){
                echo '<!--menu-------->
                        <ul class="menu">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="Profile.php">Profile</a></li>
                            <li><a href="Logout.php">Logout</a></li>
                        </ul>';
            }
            else{
                echo '<!--menu-------->
                        <ul class="menu">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="Login.php">Login</a></li>
                            <li><a href="Register.php">Register</a></li>
                        </ul>';

                }?>
                
         <!--right-nav-(cart-like)-->
         <div class="right-nav">
                        <!--like----->
                        <a href="#" class="like">
                            <i class="far fa-heart"></i>
                            <span>0</span>
                        </a>
                        <!--cart----->
                        <a href="#" class="cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span>0</span>
                        </a>
                    </div>
                </nav>
            </div>


       
<?php
    // Check if session is not already started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Function to check if the current page matches the specified link
    function isCurrentPage($page) {
        return basename($_SERVER['PHP_SELF']) == $page;
    }
?>

<!-- ==Navigation================================ -->
<nav class="navigation">
    <!-- logo -->
    <a href="index.php" class="logo">
        <span>G</span> - United
    </a>
    <!-- menu-btn -->
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
    </label>

    <!-- menu -->
    <ul class="menu">
        <li><a href="index.php" class="<?php echo isCurrentPage('index.php') ? 'active' : ''; ?>">Home</a></li>
        <?php if (isset($_SESSION["loggedin"])): ?>
            <li><a href="Profile.php" class="<?php echo isCurrentPage('Profile.php') ? 'active' : ''; ?>">Profile</a></li>
            <li><a href="Logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="Login.php" class="<?php echo isCurrentPage('Login.php') ? 'active' : ''; ?>">Login</a></li>
            <li><a href="Register.php" class="<?php echo isCurrentPage('Register.php') ? 'active' : ''; ?>">Register</a></li>
        <?php endif; ?>
    </ul>

    <!-- right-nav (cart-like) -->
    <div class="right-nav">
        <!-- like -->
        <a href="#" class="like">
            <i class="far fa-heart"></i>
            <span>0</span>
        </a>
        <!-- cart -->
        <a href="#" class="cart">
            <i class="fas fa-shopping-cart"></i>
            <span>0</span>
        </a>
    </div>
</nav>

