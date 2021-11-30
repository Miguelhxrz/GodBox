document.addEventListener('DOMContentLoaded', function() {

  const close_err = document.getElementById('close');

  const error_cont = document.querySelector('.error');


  close_err.addEventListener('click', () => {
    
    error_cont.style.display = 'none';

  });


})