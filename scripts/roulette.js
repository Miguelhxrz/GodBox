document.addEventListener('DOMContentLoaded', function() {

  const button_spin = document.getElementById('spin');

  const items_id = document.getElementsByClassName('hidden-id');

  const items_img = document.getElementsByClassName('hidden-img')
  
  const cards_items = document.querySelectorAll('.item__card');

  const alert = document.getElementById('container__alert-item');

  const img = document.getElementById('img_obj');

  const r_select = document.getElementById('roulette__select');

  const accept = document.getElementById('accept');

  function getRandom(min, max) {
    return Math.random() * (max - min) + min;
  }

  let items_id_array = Array.from(items_id);

  let items_img_array = Array.from(items_img);

  for (let i = 0; i < items_id_array.length; i++) {
    console.log(`${i}:${items_id_array[i].textContent}`);
    console.log(`${i}:${items_img_array[i].textContent}`);
  }

  const moveIt = {
    0: '814',
    1: '581',
    2: '353',
    3: '123',
    4: '-110',
    5: '-350',
    6: '-555',
    7: '-802',
  }

  let rdn = getRandom(0,8);
  
  let item = parseInt(rdn);

  console.log(`rdn: ${rdn}`);

  console.log(`item: ${item}`);

  let stop = moveIt[item]
  
  console.log(`stop: ${stop}`);

  console.log(`moveIt: ${moveIt[item]}`);
  
  let i = 0;

  button_spin.addEventListener('click', ()  => {

    cards_items.forEach (item =>  {
      item.style.animation = 'scrolling 1.4s infinite linear';
    })

    setTimeout(() => {
      cards_items.forEach (item =>  {
        item.style.animation = '';
      })
    
    }, 4000); 

        
      cards_items.forEach (cards =>  {
          
        cards.style.left = `${stop}px`;


      })

    
        
    setTimeout(() => {

      alert.style.display = 'flex';

      console.log(item);

      img.src = `${items_img_array[item].textContent}`;

      r_select.style.display = 'none';
        
      button_spin.disabled = true;

      cards_items.forEach (item =>  {
          item.style.animation = '';
      })

      accept.addEventListener('click', () => {
        
      });
        
    }, 6000);

      
    });

});