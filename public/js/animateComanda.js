
  /*$(function(){
    var width =900;
    var animationSpeed = 1500;
    var pause =5000;
    var currentSlide= 1;
    var $slider= $('#slider1');
    var $slideContainer= $slider.find('.slides1');
    var $slides= $slideContainer.find('.slide1');
    var interval;
    
    function startSlider(){
   interval = setInterval(function(){
     $slideContainer.animate({'marginLeft':'-='+width},animationSpeed, function(){
       currentSlide++;
       if(currentSlide === $slides.length) {
         currentSlide = 1;
         $slideContainer.css('marginLeft', 0);
     }
     });
     },pause);
    }
    function stopSlider(){
      clearInterval(interval);
    }
    $slideContainer.on('mouseover', stopSlider).on('mouseleave', startSlider);
    startSlider();
  });*/


//----COMANDA-----------------//

$(function(){
  
 
   setInterval(function(){
    $('#slide').animate({'rotateX': '45deg'},3000);
  

});