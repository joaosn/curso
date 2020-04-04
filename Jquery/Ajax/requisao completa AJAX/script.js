$(function(){
	
  $('#form').bind('submit', function(e){
      e.preventDefault();

      var txt = $(this).serialize();
      console.log(txt);

      $.ajax({
         type:'POST',
         url:'ajax.php',
         data:txt,
         success:function(re) {
            $('.div').html("resultado: "+re);
         },
         erro:function(){
            alert("buguera total....");
         }
      });
  });

});