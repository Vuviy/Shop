const ship = document.querySelector('.num-or-not');
const post = document.querySelector('.post');
const courier = document.querySelector('.courier');

ship.addEventListener('click', e => {
  if (e.target.classList.contains('method-courier')) {
    post.classList.add('hiden');
    courier.classList.remove('hiden');
    e.target.classList.add('active');
    ship.querySelector('.method-post').classList.remove('active');
    e.target.querySelector('input').checked = true;
  }
  if (e.target.classList.contains('method-post')) {
    post.classList.remove('hiden');
    courier.classList.add('hiden');
    e.target.classList.add('active');
    ship.querySelector('.method-courier').classList.remove('active');
    e.target.querySelector('input').checked = true;

  };
})

// pay
//=========


const pay = document.querySelector('.pay-inner');

pay.addEventListener('click', e => {
  if (e.target.classList.contains('cart')) {
    e.target.classList.add('active');
    pay.querySelector('.in-post').classList.remove('active');
    e.target.querySelector('input').checked = true;

  }
  if (e.target.classList.contains('in-post')) {
    e.target.classList.add('active');
    pay.querySelector('.cart').classList.remove('active');
    e.target.querySelector('input').checked = true;

  };
})

// tottal price
//=============

let prices = document.querySelectorAll('.price-item');
let quantity = document.querySelectorAll('.quantity-item');
let totalPriceValue = document.querySelector('.total-price');
let totalPriceInput = document.querySelector('.summInput');
let totalPrice = 0;

for (let i = 0; i < prices.length; i++) {
  prices[i].textContent *= quantity[i].textContent;
}

for (let i = 0; i < prices.length; i++) {
  totalPrice += +prices[i].textContent;
}

totalPriceValue.textContent = totalPrice;
totalPriceInput.value =  totalPrice;
