$(function(){
  
  $('a.galeria').bind('click', function(){
     var img = $(this).find('img').attr('src');
       $('.box img').attr('src', img);
       $('.bgbox, .box').fadeIn('fast');
  });

  $('.bgbox, .box button').bind('click', function(){ 
    $('.bgbox, .box').fadeOut('fast');
  });

});