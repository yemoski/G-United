import React from 'react';
import "./SearchBanner.css";

function SearchBanner() {
  return (
    <div>
        <section id="search-banner">
            <img alt="bg" className="bg-1" src="./bg-1.png"/>
            <img alt="bg-2" className="bg-2" src="./bg-2.png"/>
            <div className="search-banner-text">
                <h1>Order Your daily Groceries</h1>
                <strong>#Free Delivery</strong>
                <form action="" className="search-box">
                    <i className="fas fa-search"></i>
                    <input type="text" className="search-input" placeholder="Search your daily groceries" name="search" required/>
                    <input type="submit" className="search-btn" value="Search" />
                </form>
            </div>
    </section>
    </div>
  )
}

export default SearchBanner;