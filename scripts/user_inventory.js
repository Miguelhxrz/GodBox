document.addEventListener('DOMContentLoaded', function() {

  const objects_container = document.getElementsByClassName('objects__container');

  let item_container__array = Array.from(objects_container);

    console.log(item_container__array);
  
      /* |---- Colores de imagenes ----|*/
  
      const colors = {
        'Dios': '--rank__Dios',
        'SemiDios': '--rank__Semi',
        'Heroe':  '--rank__Heroe',
        'Olimpico': '--rank__Olimpico' 
      }
    
      const rank = document.getElementsByClassName('rank');
    
      let array_ranks = Array.from(rank);

      console.log(array_ranks[0].value);
      
      for (let i = 0; i < item_container__array.length; i++) {
        item_container__array[i].classList.add(colors[array_ranks[i].value]);
      } 


  if(window.history.replaceState) {
    window.history.replaceState(null,null,window.location.href);
  }










})