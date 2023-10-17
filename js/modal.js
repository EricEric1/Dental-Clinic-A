document.querySelectorAll('.zapis').forEach(item => {
    item.addEventListener('click', event => {
        document.querySelector('.modal').style.display = 'flex';
    })
})

const modal = document.querySelector('.modal');
const zapisButton = document.querySelector('.zapis');
const zapisLink = document.querySelector('.zapis__a');
const closeButton = document.querySelector('.close-btn');

zapisButton.addEventListener('click', () => {
  modal.style.display = 'flex';
});

console.log(zapisLink)

if(zapisLink){
  zapisLink.addEventListener('click', (event) => {
    event.preventDefault();
    modal.style.display = 'flex';
  });
}

closeButton.addEventListener('click', () => {
  modal.style.display = 'none';
});

modal.addEventListener('click', (event) => {
  if (event.target === modal) {
    modal.style.display = 'none';
  }
});

window.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') {
    modal.style.display = 'none';
  }
});

$(document).ready(function() {
  var phoneMaskSettings = {
    mask: '+7 (999) 999-99-99',
    placeholder: '+7 (___) ___-__-__'
  };
  $('#phone-input').inputmask(phoneMaskSettings);

  $('#phone-input').on('input', function() {
    if ($(this).inputmask('isComplete')) {
      console.log($(this).val())
    }
  });
});