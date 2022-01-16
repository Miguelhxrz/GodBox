document.addEventListener('DOMContentLoaded', function() {

  const sell_btn = document.getElementById('sell_btn');

  const send_btn = document.querySelectorAll('.send_btn');

  const array_send_btn = Array.from(send_btn);

  const close_modal = document.getElementById('good_btn');

  const modal = document.querySelector('.modal');
  
  const form = document.getElementById('selects_items');

  const modal_form = document.getElementById('modal_form');

  const id_object = document.querySelectorAll('.id_object');

  let id_objects = Array.from(id_object);

  const recived_id = document.getElementById('recived_id');

  array_send_btn.forEach(btn => {
    btn.addEventListener('click', () => {

      id_object.value;

      console.log(id_object.value);
  
      modal.classList.add('modal--show');

    })
  })


  sell_btn.addEventListener('click', () => {
    window.location.reload();
  });


  close_modal.addEventListener('click', () => {

    modal.classList.remove('modal--show');

    modal_form.submit();

    console.log(recived_id.value);

  });










})