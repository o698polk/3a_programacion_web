const products = [
    {
        id: 1,
        name: "Zenith Headphones",
        price: 299.00,
        image: "🎧"
    },
    {
        id: 2,
        name: "Apex Smartwatch",
        price: 199.50,
        image: "⌚"
    },
    {
        id: 3,
        name: "Lumina VR Lens",
        price: 450.00,
        image: "🥽"
    },
    {
        id: 4,
        name: "Note X Tablet",
        price: 899.99,
        image: "📱"
    }
];

let cartCount = 0;

function init() {
    renderProducts();
    setupCart();
    setupScrollEffects();
}

function renderProducts() {
    const grid = document.getElementById('product-grid');
    
    grid.innerHTML = products.map(product => `
        <article class="product-card">
            <div class="product-image">${product.image}</div>
            <div class="product-info">
                <h3>${product.name}</h3>
                <span class="product-price">$${product.price.toFixed(2)}</span>
                <button class="add-cart-btn" onclick="addToCart(${product.id})">
                    Agregar al Carrito
                </button>
            </div>
        </article>
    `).join('');
}

function addToCart(id) {
    cartCount++;
    const countEl = document.querySelector('.cart-count');
    countEl.textContent = cartCount;
    
    // Animation effect for button
    const btn = event.target;
    const originalText = btn.textContent;
    btn.textContent = "¡Agregado!";
    btn.style.background = "#fff";
    btn.style.color = "#000";
    
    setTimeout(() => {
        btn.textContent = originalText;
        btn.style.background = "";
        btn.style.color = "";
    }, 1500);
}

function setupScrollEffects() {
    const header = document.getElementById('navbar');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.background = "rgba(10, 10, 10, 0.95)";
            header.style.boxShadow = "0 4px 30px rgba(0,0,0,0.5)";
        } else {
            header.style.background = "rgba(10, 10, 10, 0.8)";
            header.style.boxShadow = "none";
        }
    });
}

// Global scope needed for inline onclick
window.addToCart = addToCart;

document.addEventListener('DOMContentLoaded', init);
