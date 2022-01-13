// каталог
const catP = document.querySelector('#catalog-p');
const cat = document.querySelector('.cat');

catP.addEventListener('click', () => {
  cat.classList.toggle('show');
})

//=======
// каталог
const logS = document.querySelector('.log-small');
const log = document.querySelector('.small-inner');

logS.addEventListener('click', () => {
  log.classList.toggle('show');
})

//=======