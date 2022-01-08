document.addEventListener('DOMContentLoaded', function() {

  const activate_modal = document.getElementById('confirm_btn');

  const modal = document.querySelector('.modal');

  const modal_accept = document.getElementById('accept_btn');

  const modal_continue = document.getElementById('continue_btn');


  activate_modal.addEventListener('click', () => {
    
    modal.classList.add('modal--show');

  });











})