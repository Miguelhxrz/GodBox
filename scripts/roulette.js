document.addEventListener('DOMContentLoaded', function() {

  const button_spin = document.getElementById('spin');

  const items_id = document.getElementsByClassName('hidden-id');

  const items_img = document.getElementsByClassName('hidden-img')
  
  const cards_items = document.querySelectorAll('.item__card');

  const alert = document.getElementById('container__alert-item');

  const img = document.getElementById('img_obj');

  const r_select = document.getElementById('roulette__select');

  const accept = document.getElementById('accept');

  const input_id = document.getElementById('object_id-win');

  const input_rank = document.getElementById('object_rank_win');

    function getRandom(min, max) {
      return Math.random() * (max - min) + min;
    }

  let items_id_array = Array.from(items_id);

  let items_img_array = Array.from(items_img);

  console.log(items_img_array);

  for (let i = 0; i < items_id_array.length; i++) {
    console.log(`${i}:${items_id_array[i].textContent}`);
    // console.log(`${i}:${items_img_array[i].textContent}`);
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
        input_id.value = items_id_array[item].textContent

        console.log(items_id_array[item]);
      });
        
    }, 6000);

      
    });

    let item_cards__array = Array.from(cards_items);

    console.log(item_cards__array);
  
      /* |---- Colores de imagenes ----|*/
  
      const colors = {
        'Dios': '--rank__Dios',
        'SemiDios': '--rank__Semi',
        'Heroe':  '--rank__Heroe',
        'Olimpico': '--rank__Olimpico' 
      }
    
      const rank = document.getElementsByClassName('rank');
    
      let array_ranks = Array.from(rank);
      
      for (let i = 0; i < item_cards__array.length; i++) {
        item_cards__array[i].classList.add(colors[array_ranks[i].textContent]);
      } 



});