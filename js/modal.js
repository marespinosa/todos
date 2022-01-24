var btn = document.getElementById('modal_opener');
var modal = document.querySelector('.modal');

function attachModalListeners(modalBox) {
  modalBox.querySelector('.close_modal').addEventListener('click', toggleModz);
  modalBox.querySelector('.overlay').addEventListener('click', toggleModz);
}

function detachModalListeners(modalBox) {
  modalBox.querySelector('.close_modal').removeEventListener('click', toggleModz);
  modalBox.querySelector('.overlay').removeEventListener('click', toggleModz);
}

function toggleModz() {
  var currentState = modal.style.display;

  // If modal is visible, hide it. Else, display it.
  if (currentState === 'none') {
    modal.style.display = 'block';
    attachModalListeners(modal);
  } else {
    modal.style.display = 'none';
    detachModalListeners(modal);  
  }
}

btn.addEventListener('click', toggleModz);