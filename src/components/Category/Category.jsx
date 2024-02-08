import React from 'react'
import './Category.css';
import Fish from "./fish.png";
import Beauty from "./beauty.png";
import Baby from "./baby.png";
import Gardening from "./Gardening.png";
import Medicine from "./medicine.png";
import Office from "./office.png";
import Vegetable from "./Vegetables.png";
function Category() {
  return (
    <div>
    <section id="category">
   
        <div class="category-heading">
            <h2>Category</h2>
            <span>All</span>
        </div>
       
        <div class="category-container">
           
            <a href="#" class="category-box">
                <img alt="Fish" src={Fish}/>
                <span>Fish & Meat</span>
            </a>
        
            <a href="#" class="category-box">
                <img alt="Fish" src={Vegetable}/>
                <span>Vegatbles</span>
            </a>
            
            <a href="#" class="category-box">
                <img alt="Fish" src={Medicine}/>
                <span>Medicine</span>
            </a>
            
            <a href="#" class="category-box">
                <img alt="Fish" src={Baby}/>
                <span>Baby</span>
            </a>
          
            <a href="#" class="category-box">
                <img alt="Fish" src={Office}/>
                <span>Office</span>
            </a>
           
            <a href="#" class="category-box">
                <img alt="Fish" src={Beauty}/>
                <span>Beauty</span>
            </a>
            
            <a href="#" class="category-box">
                <img alt="Fish" src={Gardening}/>
                <span>Gardening</span>
            </a>
        </div>
        
    </section>
    </div>
  )
}

export default Category