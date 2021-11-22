document.addEventListener('DOMContentLoaded', function() {

  const button_spin = document.getElementById('spin');
  
  const cards_items = document.querySelectorAll('.item__card');

  let rdn = getRandom(1, 9);
  
  itemsito = parseInt(rdn);

  let px = 220;

  let stop = px * itemsito;

  let i = 0;
  
  function getRandom(min, max) {
    return Math.random() * (max - min) + min;
  }

  button_spin.addEventListener('click', () => {

      cards_items.forEach (item =>  {
        item.style.animation = 'scrolling 2s infinite linear';
      })

      setTimeout(() => {
        cards_items.forEach (item =>  {
          item.style.animation = '';
        })

        while (px < stop) {

          console.log('item->' + itemsito);
    
          console.log('stop->' + stop);
      
          cards_items.forEach( item => {
            item.style.left = `${stop}px`;

            console.log(item.style.left);
          });

          px++;
        }
        
        console.log("Listo");
      }, 1000);

      setTimeout(() => {
        location.reload();
      }, 20000)
    
      

    // takfriend();


    
    
    
      



    


    

    


  });








})