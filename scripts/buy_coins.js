document.addEventListener('DOMContentLoaded', function() {

  const activate_modal = document.getElementById('confirm_btn');

  const modal = document.querySelector('.modal');

  const modal_accept = document.getElementById('accept_btn');

  const modal_continue = document.getElementById('continue_btn'); // 

  const found_user = document.getElementById('confirm_user');


  if(found_user.textContent == "0"){

    activate_modal.disabled = true;

    found_user.classList.remove('hidden');

    found_user.textContent = "No puedes comprar monedas, si no tienes una tarjeta registrada.";

    found_user.classList.add('error');


  }else{
  
    activate_modal.addEventListener('click', () => {
    
      modal.classList.add('modal--show');

    });


    modal_accept.addEventListener('click', () => {
    
      if(window.history.replaceState) { //evitar reenvio de formulario
      window.history.replaceState(null, null, window.location.href)
      }

    })

    modal_continue.addEventListener('click', () => {
    
      if(window.history.replaceState) { //evitar reenvio de formulario
      window.history.replaceState(null, null, window.location.href)
      }

    })

  }










})