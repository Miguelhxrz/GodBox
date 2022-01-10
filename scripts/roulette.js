document.addEventListener('DOMContentLoaded', function() {

  const button_spin = document.getElementById('spin');
  
  const cards_items = document.querySelectorAll('.item__card');

  const alert = document.getElementById('container__alert-item');

  const text = document.getElementById('Y-item-text');

  const r_select = document.getElementById('roulette__select');

  const accept = document.getElementById('accept');

  function getRandom(min, max) {
    return Math.random() * (max - min) + min;
  }

  const moveIt = {
    1: '-809px',
    2: '-580px',
    3: '-346px',
    4: '-115px',
    5: '110px',
    6: '336px',
    7: '570px',
    8: '800px'
  }

  let rdn = getRandom(1, 8);
  
  let item = parseInt(rdn);

  let stop = item * 110;
  
  let px = moveIt[item]
  
  let i = 0;

  button_spin.addEventListener('click', ()  => {

    cards_items.forEach (item =>  {
      item.style.animation = 'scrolling 1s infinite linear';
    })

    setTimeout(() => {
      cards_items.forEach (item =>  {
        item.style.animation = '';
      })
    
    }, 5000); 

      
    while (i < stop) {

      // console.log(px);
        
      cards_items.forEach (card =>  {
          
        card.style.right = px;

      })

      i = i + 115;

    }
        
    setTimeout(() => {

      alert.style.display = 'flex';

      text.innerText = `${item}`;

      r_select.style.display = 'none';
        
      button_spin.disabled = true;

      cards_items.forEach (item =>  {
          item.style.animation = '';
      })

      accept.addEventListener('click', () => {
        window.location = '../index.php';
      });
        
    }, 6000);

      
    });

});