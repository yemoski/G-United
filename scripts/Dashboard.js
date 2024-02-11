const products = [
    { name: 'Apple', image: 'images/apple.png', quantity: '1 KG', price: '$4.00' },
    { name: 'Chili', image: 'images/chili.png', quantity: '1 KG', price: '$3.79' },
    { name: 'Potato', image: 'images/patato.png', quantity: '1 KG', price: '$1.99' },
    { name: 'Tomato', image: 'images/tamato.png', quantity: '1 KG', price: '$3.50' },
    { name: 'Onion', image: 'images/Onion.png', quantity: '1 KG', price: '6.70$' },
    { name: 'Apple', image: 'images/apple.png', quantity: '1 KG', price: '$4.00' },
    { name: 'Chili', image: 'images/chili.png', quantity: '1 KG', price: '$3.79' },
    { name: 'Potato', image: 'images/patato.png', quantity: '1 KG', price: '$1.99' },
    { name: 'Tomato', image: 'images/tamato.png', quantity: '1 KG', price: '$3.50' },
    { name: 'Onion', image: 'images/Onion.png', quantity: '1 KG', price: '6.70$' },
    { name: 'Apple', image: 'images/apple.png', quantity: '1 KG', price: '$4.00' },
    { name: 'Chili', image: 'images/chili.png', quantity: '1 KG', price: '$3.79' },
    { name: 'Potato', image: 'images/patato.png', quantity: '1 KG', price: '$1.99' },
    { name: 'Tomato', image: 'images/tamato.png', quantity: '1 KG', price: '$3.50' },
    { name: 'Onion', image: 'images/Onion.png', quantity: '1 KG', price: '6.70$' },
    { name: 'Apple', image: 'images/apple.png', quantity: '1 KG', price: '$4.00' },
    { name: 'Chili', image: 'images/chili.png', quantity: '1 KG', price: '$3.79' },
    { name: 'Potato', image: 'images/patato.png', quantity: '1 KG', price: '$1.99' },
    { name: 'Tomato', image: 'images/tamato.png', quantity: '1 KG', price: '$3.50' },
    { name: 'Onion', image: 'images/Onion.png', quantity: '1 KG', price: '6.70$' },
];

const productsContainer = document.getElementById('products-container');

products.forEach(product => {
    const productBox = document.createElement('div');
    productBox.classList.add('product-box');

    const image = document.createElement('img');
    image.src = product.image;
    image.alt = product.name;

    const name = document.createElement('strong');
    name.textContent = product.name;

    const quantity = document.createElement('span');
    quantity.classList.add('quantity');
    quantity.textContent = product.quantity;

    const price = document.createElement('span');
    price.classList.add('price');
    price.textContent = product.price;

    const itemButtons = document.createElement('div');
    itemButtons.classList.add('itemBoxButtons');

    const trackBtn = document.createElement('button');
    trackBtn.href = '#';
    trackBtn.classList.add('track-btn');
    trackBtn.innerHTML = '+ Track';

    const detailsBtn = document.createElement('button');
    detailsBtn.href = '#';
    detailsBtn.classList.add('details-btn');
    detailsBtn.innerHTML = 'View Details';

    itemButtons.appendChild(trackBtn);
    itemButtons.appendChild(detailsBtn);

    const likeBtn = document.createElement('a');
    likeBtn.href = '#';
    likeBtn.classList.add('like-btn');
    likeBtn.innerHTML = '<i class="far fa-heart"></i>';

    productBox.appendChild(image);
    productBox.appendChild(name);
    productBox.appendChild(quantity);
    productBox.appendChild(price);
    productBox.appendChild(itemButtons);
    productBox.appendChild(likeBtn);

    productsContainer.appendChild(productBox);
});