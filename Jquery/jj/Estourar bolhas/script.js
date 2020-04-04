function addBola() {

	var x = Math.floor(Math.random() * 800);
    var y = Math.floor(Math.random() * 500);
    var cor = Math.floor(Math.random() * 999);
   //bola = bola.setAttribute("style","background-color:#"+cor+";");

    var bola = $('<div class="bola"></div>');
   // bola.attr(cor);
    bola.css('left', x+'px');
    bola.css('top', y+'px');
    bola.css('background-color','#'+cor+';');
    bola.bind('click', function(){
         $(this).fadeOut('fast');

         placar++;
         updatePlacar();
    });

    $(document.body).append(bola);
}

function updatePlacar() {
	$('#placar').html(placar);
}

var placar = 0;

$(function(){

	$('#comecar').bind('click', function(){
       setInterval(addBola, 1000);
	});

});