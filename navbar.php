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
