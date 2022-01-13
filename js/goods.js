let quantity = document.querySelector('.quantity-input');
const btnUp = document.querySelector('.btn-up');
const btnDown = document.querySelector('.btn-down');
let quantityCount = 0;

btnUp.addEventListener('click', (e) => {
  quantity.value++;
  btnDown.disabled = false;
})

btnDown.addEventListener('click', () => {
  if (quantity.value == 1) {
    btnDown.disabled = true;
  } else {
    btnDown.disabled = false;
    quantity.value--;
  }
})

//==========
//==========


const goodAdd = document.querySelector('.good-add');
let count = document.querySelector('.count');
let title = document.querySelector('.good-title');

let now = +count.textContent;

// title.addEventListener('click', () => {
//   setTimeout(ggg, 5000);
//   console.log('нажав');

//   // count.textContent = now + 1;
// })


// goodAdd.addEventListener('click', (e) => {
//   // e.preventDefault();
//   console.log('нажав');
//   count.textContent = now + 1;
//   setTimeout(ggg, 2000);

// })

// function ggg() {
//   console.log('пройшло 2 секунд');
// }