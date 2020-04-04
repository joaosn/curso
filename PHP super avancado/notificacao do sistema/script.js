function verificaNot() {
	
	$.ajax({
       url:'verificar.php',
       type:'POST',
       dataType:'json',
       success:function(json) {
       	  if(json.qt > 0) {
       	  	$('.notifica').addClass('tem_notif');
       	  	$('.notifica').html(json.qt);
       	  } else { 	  	
       	  	$('.notifica').removeClass('tem_notif');
       	  	$('.notifica').html('0');
       	  }
         }
	});

}

$(function(){
     setInterval(verificaNot, 2000);
     verificaNot();

   $('.notifica').on('click', function(){

   });
   $('.add').on('click',function(){
      $.ajax({
          url:'add.php'
      });
   });

});      