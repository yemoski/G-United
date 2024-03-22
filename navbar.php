 <!--==Navigation================================-->
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
       