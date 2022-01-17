document.addEventListener('DOMContentLoaded', function() {

  const colors = {
    'Dios': '--rank__Dios',
    'SemiDios': '--rank__Semi',
    'Heroe':  '--rank__Heroe',
    'Olimpico': '--rank__Olimpico' 
  }

  const box = document.getElementsByClassName('box__card');

  const rank = document.getElementsByClassName('rank');

  let array_ranks = Array.from(rank);

  let array_cards = Array.from(box);

  for (let i = 0; i < array_cards.length; i++) {
    array_cards[i].classList.add(colors[array_ranks[i].value]);
  }

















})