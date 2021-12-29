document.addEventListener('DOMContentLoaded', function() {

  const control_slide1 = document.getElementById('control__slide1');
  const slide1 = document.getElementById('slide1');
  
  const control_slide2 = document.getElementById('control__slide2');
  const slide2 = document.getElementById('slide2');

  const control_slide3 = document.getElementById('control__slide3');
  const slide3 = document.getElementById('slide3');

  control_slide1.addEventListener('click', () => {

    slide1.style.opacity = 1;
    slide2.style.opacity = 0;
    slide3.style.opacity = 0;

  });

  control_slide2.addEventListener('click', () => {
    
    slide1.style.opacity = 0;
    slide2.style.opacity = 1;
    slide3.style.opacity = 0;

  });

  control_slide3.addEventListener('click', () => {
    
    slide1.style.opacity = 0;
    slide2.style.opacity = 0;
    slide3.style.opacity = 1;

  })













})