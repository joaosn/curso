$(function() {
	
	/*$('#form').on('submit',function(e){
        e.preventDefault();

        var form = $('#form')[0];
        var data = new FormData(form);

        $.ajax({
            type:'POST',          esse metodo usando um formulario!!!
            url:'recebedor.php',
            data:data,
            contentType:false,
            processData:false,
            success:function(msg){
            	alert(msg);
            }
        });
	});*/
    $('button').on('click',function(){
    	var data = new FormData();

    	var arq = $('#foto')[0].files;

        if(arq.length > 0) {

            data.append('nome', $('#nome').val());

            data.append('foto', arq[0]);
                  $.ajax({
                    type:'POST',          //esse metodo sem um formulario!!!
                    url:'recebedor.php',
                    data:data,
                    contentType:false,
                    processData:false,
                    success:function(msg){
                        alert(msg);
                    }
                });  
        }
        
        

    });

});