//Открытие модального контейнера с блокировкой скролла
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

zapisLink.addEventListener('click', (event) => {
  event.preventDefault();
  modal.style.display = 'flex';
});

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

const telInput = document.querySelector('input[type="tel"]');
const bookingButton = document.querySelector('.booking-btn');

telInput.addEventListener('input', () => {
  const telValue = telInput.value.replace(/\D/g, '');
  const telLength = telValue.length;

  if (telLength === 11 && telValue.startsWith('7')) {
    bookingButton.disabled = false;
  } else {
    bookingButton.disabled = true;
  }

  let formattedTelValue = '';

  if (telLength > 0) {
    formattedTelValue = `+7 (${telValue.substring(0, 3)}`;
  }

  if (telLength > 3) {
    formattedTelValue += `) ${telValue.substring(3, 6)}`;
  }

  if (telLength > 6) {
    formattedTelValue += `-${telValue.substring(6, 8)}-${telValue.substring(8, 10)}`;
  }

  telInput.value = formattedTelValue;
});