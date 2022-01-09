document.addEventListener('DOMContentLoaded', function() {

  const activate_modal = document.getElementById('confirm_btn');

  const modal = document.querySelector('.modal');

  const modal_accept = document.getElementById('accept_btn');

  const modal_continue = document.getElementById('continue_btn');


  activate_modal.addEventListener('click', () => {
    
    if(window.history.replaceState) { //evitar reenvio de formulario
      window.history.replaceState(null, null, window.location.href)
      }
      
    modal.classList.add('modal--show');

  });











})