$(document).ready(function(){

    $('.display ul').hide();
    $('section article').hide();
   $('.head img').click(function (e) { 
       $('section article').slideDown(500);
      
   });

   $('.head img').dblclick(function(){
  
       $('section article').slideUp(300);
     
   })

 

$('.head img').hover(function(){
    $('.head img').attr('src', 'arrow.png')
$('.head img').mouseleave(function () {
    $('.head img').attr('src', 'arrowclick.png') 
    
});})

$('.switch input').click(function(){
 $('body').toggleClass('dark');
})

});
