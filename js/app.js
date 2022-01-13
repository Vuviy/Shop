const sliderBody = document.querySelector('.slider-body');
const treck = document.querySelector('.treck');
const items = document.querySelectorAll('.item');
const item = document.querySelector('.item');

const btnPrev = document.querySelector('.prev');
const btnNext = document.querySelector('.next');

let offset = 0;

items.forEach(el => {
  el.style.width = sliderBody.clientWidth + 'px';
});

treck.style.width = sliderBody.clientWidth * items.length + 'px';

block();

btnPrev.addEventListener('click', (e) => {
  offset += sliderBody.clientWidth;
  block();
  treck.style.marginLeft = offset + 'px'
})

btnNext.addEventListener('click', (e) => {
  offset -= sliderBody.clientWidth;
  block();
  treck.style.marginLeft = offset + 'px';
})


function block() {
  if (offset == 0) {
    btnPrev.disabled = true;
    btnPrev.style.opacity = .5;
  } else {
    btnPrev.disabled = false;
    btnPrev.style.opacity = 1;
  }
  if (-offset == treck.clientWidth - sliderBody.clientWidth) {
    btnNext.disabled = true;
    btnNext.style.opacity = .5;
  } else {
    btnNext.disabled = false;
    btnNext.style.opacity = 1;
  }
}


