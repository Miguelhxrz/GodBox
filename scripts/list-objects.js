document.addEventListener('DOMContentLoaded', function() {

  const add_box = document.getElementById('item__card-check');

  const object_name = document.getElementById('object_name');

  add_box.addEventListener('click', () => {

    console.log(object_name.value);


  });

  const finish_btn = document.getElementById('finish_btn');

  finish_btn.addEventListener('click', () => {
    if(window.history.replaceState) { //evitar reenvio de formulario
      window.history.replaceState(null, null, window.location.href)
      }
  })


  const close_err = document.getElementById('close');

  const error_cont = document.querySelector('.error');

  close_err.addEventListener('click', () => {
    
    error_cont.style.display = 'none';

  });





})