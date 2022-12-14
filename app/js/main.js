
const modalBtn = document.querySelectorAll('[data-modal]');

const modal = document.querySelectorAll('.modal');
const body = document.querySelector('body');

modalBtn.forEach(item => {
  item.addEventListener('click', event => {

    let $this = event.currentTarget;
    let modalId = $this.getAttribute('data-modal');

    let modal = document.getElementById(modalId);
    let modalWrapper = modal.querySelector('.popup__wrapper');

    modalWrapper.addEventListener('click', event => {
      event.stopPropagation();
    });

    modal.classList.add('popup-show');
    body.classList.add('no-scroll');

    setTimeout(function () {
      modalWrapper.style.transform = 'none';
    }, 1);
  });
});

modal.forEach(item => {
  item.addEventListener('click', event => {
    let currentModal = event.currentTarget

    closeModal(currentModal)
  });
});

function closeModal(currentModal) {
  let modalWrapper = currentModal.querySelector('.popup__wrapper');

  modalWrapper.removeAttribute('style');
  body.classList.remove('no-scroll');


  setTimeout(function () {
    currentModal.classList.remove('popup-show');
  }, 300);
}

let popupClose = document.querySelector('.popup__close');
let popup = document.querySelector('#popup-modal');

popupClose.addEventListener('click', function () {
  popup.classList.remove('popup-show');
  body.classList.remove('no-scroll');
});

