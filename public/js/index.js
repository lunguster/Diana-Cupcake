$(function(){
  var s1 = $('#slide1');
  var s2 = $('#slide2');
  var s3 = $('#slide3');
  var s4 = $('#slide4');
  var s5 = $('#slide5');
  var s6 = $('#slide6');
  var slideNum = [s1, s2, s3, s4, s5, s6];/* INtroducem toate imaginile intr-o multime*/
  var currentSlide = 1;
  function startSlider(){
interval=setInterval(function(){
   
  var $result = slideNum[currentSlide];
  $result.prop('checked', true);
 currentSlide++; /**/
  if(currentSlide===slideNum.length){
  currentSlide=0;
  }
},6000);
  };
  function stopSlider(){
  clearInterval(interval);
  }
  $('.slider').on('mouseover', stopSlider).on('mouseleave', startSlider);
    startSlider();
});

