$(document).ready(function() {
    $('nav').removeClass('black');

  
  
$(window).on('scroll', function(){
    
    if($(window).scrollTop()){
    
    $('nav').addClass('black');
    }else{
        $('nav').removeClass('black');
    }
    })


});



   