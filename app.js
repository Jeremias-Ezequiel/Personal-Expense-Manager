const price = document.getElementById('price');
const quantity = document.getElementById('quantity');
const total = document.getElementById('total');

function updateTotal(){
    const totalPrice = parseInt(price.value) * parseInt(quantity.value); 
    total.textContent = totalPrice; 
}


price.addEventListener('input',updateTotal);
quantity.addEventListener('input',updateTotal);

