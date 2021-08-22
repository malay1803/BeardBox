var carts = Array.prototype.slice.call(document.querySelectorAll('.add-cart'));
var carts1 = Array.prototype.slice.call(document.querySelectorAll('.add-cart-1'));

//carts.push(carts1);


//var carts = carts2.concat(carts1);

//var cart = cart.push(carts);

console.log(carts);


let products = [
    {
        name: "Beard Serum",
        tag : "beardserum",
        price: 399,
        inCart: 0
    },
    {
        name: "Beard Growth Oil",
        tag : "beardgrowthoil",
        price: 750,
        inCart: 0
    },
    {
        name: "Beard Shine Oil",
        tag : "beardshine",
        price: 449,
        inCart: 0
    },
    {
        name: "Beard Fragnance Oil",
        tag : "beardfrag",
        price: 250,
        inCart: 0
    },
    {
        name: "Beard Brush",
        tag : "beardbrush",
        price: 299,
        inCart: 0
    },
    {
        name: "Beard Softener",
        tag : "beardsoftener",
        price: 450,
        inCart: 0
    },
    {
        name: "Beard Wax",
        tag : "beardwax",
        price: 450,
        inCart: 0
    },
    {
        name: "Beard Color",
        tag : "beardcolor",
        price: 450,
        inCart: 0
    },
    {
        name: "Beard Wash",
        tag : "beardwash",
        price: 250,
        inCart: 0
    },
    {
        name: "Trimmer",
        tag : "trimmer",
        price: 2499,
        inCart: 0
    },
    {
        name: "Hair Color",
        tag : "haircolor",
        price: 299,
        inCart: 0
    },
    {
        name: "Hair Comb",
        tag : "haircomb",
        price: 299,
        inCart: 0
    },
    {
        name: "Hair Growth Gel",
        tag : "hairgel",
        price: 550,
        inCart: 0
    },
    {
        name: "Hair Serum",
        tag : "hairserum",
        price: 199,
        inCart: 0
    },
    {
        name: "Hair Shampoo",
        tag : "hairshampoo",
        price: 350,
        inCart: 0
    },
    {
        name: "Hair Spray",
        tag : "hairspray",
        price: 450,
        inCart: 0
    },
    {
        name: "Hair Thickening Spray",
        tag : "hairthickeningspray",
        price: 350,
        inCart: 0
    },
    {
        name: "Hair Wax",
        tag : "hairwax",
        price: 275,
        inCart: 0
    },
    {
        name: "Onion Oil",
        tag : "onionoil",
        price: 239,
        inCart: 0
    }
];

for (let i=0; i<carts.length; i++){
        carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);    
    
    })
} 
for (let i=0; i<carts1.length; i++){
    carts1[i].addEventListener('click', () => {
        cartNumbers(products[i+10]);
        totalCost(products[i+10]);
    })
}
function onLoadCardNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');
    
    if(productNumbers){
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

function cartNumbers(products){
    
    let productNumbers =localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    
    if(productNumbers){
        localStorage.setItem('cartNumbers',productNumbers +  1); 
        document.querySelector('.cart span').textContent = productNumbers + 1;
    }
    else{
        localStorage.setItem('cartNumbers',1); 
        document.querySelector('.cart span').textContent = 1;
    }
    
    setItems(products);
}

function setItems(products) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    
    if(cartItems!=null){
        if(cartItems[products.tag]==undefined){
            cartItems={
                ...cartItems,
                [products.tag]: products
            }
        }
        cartItems[products.tag].inCart += 1;
    }
    else{   
        products.inCart = 1;
        cartItems = {
        [products.tag]: products
        }
    }
    
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}


function totalCost(products){
    //console.log("The products price is : ", products.price);
    
    let cartCost = localStorage.getItem('totalCost');
    
    if(cartCost!=null){
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost",cartCost + products.price);
    }
    else{
        localStorage.setItem("totalCost", products.price);
    }
}


function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".pro");
    let cartCost = localStorage.getItem('totalCost');
    console.log(cartItems);
    if(cartItems && productContainer){
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
                <div class="product">
                    <ion-icon name="close-circle-sharp"></ion-icon>
                    <img src="./images/cart/${item.tag}.jpg" width="75" height="75">
                    <span>${item.name}</span>
                </div>
                <div class="price">
                    ₹${item.price}.00
                </div>
                <div class="quantity">
                    <ion-icon name="arrow-back-circle"></ion-icon>
                    <span>${item.inCart}</span>
                    <ion-icon name="arrow-forward-circle"></ion-icon>
                </div>
                <div class="total">
                    ₹${item.inCart * item.price}.00
                </div>
            `;
        });
        
        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">
                    Basket Total
                </h4>
                <h4 class="basketTotal">
                    ₹${cartCost}.00
                </h4>
        `;
    }
}

onLoadCardNumbers();
displayCart();