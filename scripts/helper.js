document.addEventListener('DOMContentLoaded', function() {

  const close_err = document.getElementById('close');

  const error_cont = document.querySelector('.error');

  close_err.addEventListener('click', () => {
    
    error_cont.style.display = 'none';

  });

  /* |---- Aqui va lo del index ----|*/

  const text_circle = document.getElementById('sponsor__title');

  const text_circleArray = text_circle.textContent.split("");

  text_circle.textContent = "";

  text_circleArray.forEach(letter => () => {
    letter = letter.innerHTML = `<span style="transform: rotate(8.57deg)">${letter}<span>`;
  })







})