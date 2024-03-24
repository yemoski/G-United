
<style>
    .breadcrumb {
        font-size: 14px;
        margin-bottom: 10px;
    }

    .breadcrumb a {
        text-decoration: none;
        color: #333; 
    }

    .breadcrumb a:hover {
        color: #4eb060;
        text-decoration: underline; 
    }

    .breadcrumb span {
        color: black;
    }
</style>

<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    function isCurrentPage($page) {
        return basename($_SERVER['PHP_SELF']) == $page;
    }
?>

<nav class="navigation">
    <!-- logo -->
    <div>
        <a href="index.php" class="logo">
            <span>G</span> - United 
        </a>
        <div class ="breadcrumb">
            <?php       
                $breadcrumbs = array();
                
                if (isset($_SESSION["loggedin"])) {
                    if(isset($_SESSION["previous_page"])){
                        $breadcrumbs[] = array(basename($_SESSION["previous_page"], ".php") == "index"? "Home"
                        : basename($_SESSION["previous_page"], ".php"), $_SESSION["previous_page"]);
                    }
                    $breadcrumbs[] = array(getCurrentPageName() == "index"? "Home":getCurrentPageName(), $_SERVER['PHP_SELF']);
                } else {
                    $breadcrumbs = array();
                }

                $_SESSION['previous_page'] = $_SERVER['PHP_SELF'];
            
                $total_breadcrumbs = count($breadcrumbs);
                foreach ($breadcrumbs as $key => $breadcrumb) {
                    if ($breadcrumb[0] == "Current Page") {
                        echo '<span>' . $breadcrumb[0] . '</span>';
                    } else {
                        echo '<a href="' . $breadcrumb[1] . '">' . $breadcrumb[0] . '</a>';
                    }
                    if ($key < $total_breadcrumbs - 1) {
                        echo '<span> > </span>'; 
                    }
                }

                function getCurrentPageName()
                {
                    return basename($_SERVER['PHP_SELF'], ".php");
                }
            ?>
        </div> 
    </div>
    
    <!-- menu-btn -->
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
    </label>

    <!-- menu -->
    <ul class="menu">
        <li><a href="index.php" class="<?php echo isCurrentPage('index.php') ? 'active' : ''; ?>">Home</a></li>
        <?php if (isset($_SESSION["loggedin"])): ?>
            <li><a href="ItemDashboard.php" class="<?php echo isCurrentPage('ItemDashboard.php') ? 'active' : ''; ?>">Dashboard</a></li>
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

