import React from 'react'
import "./Navbar.css";
function Navbar() {
  return (
    <div>
          <nav class="navigation">
        <a href="#" class="logo">
            G-United
        </a>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Sign In</a></li>
            <li><a href="#">Categories</a></li>
        </ul>

        <div class="right-nav">
            <a href="#" class="like">
                <i class="far fa-heart"></i>
                <span>0</span>
            </a>

            <a href="#" class="cart">
                <i class="fas fa-shopping-cart"></i>
                <span>0</span>
            </a>

        </div>
    </nav>

    </div>
  )
}

export default Navbar;