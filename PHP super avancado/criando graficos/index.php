<?php 
$caregamentos = array(10,7,9,23,43);
$custos = array(5,7,10,4,25);
?>

<!DOCTYPE html>
<html>
<head>
	<title>criando Graficos</title>
</head>
<body>

	<div style="width:1000px; ">
		
		<canvas id="grafico"></canvas>
	</div>


<script type="text/javascript" src="Chart.min.js"></script>
<script type="text/javascript">
	window.onload = function(){
		var contexto = document.getElementById('grafico').getContext("2d");
	 	var grafico = new Chart(contexto,{
	        type:'line',
	        data: {
	        	labels: ['Janeiro','Fevereiro','Março','Abril','Maio'],
	        	datasets: [{
	        		label:'Caregamentos',
	        		backgroundColor:'#FF0000',
	        		borderColor:'#FF0000',
	        		data:[<?php echo implode(',', $caregamentos); ?>],
	        		fill:false
	        	}, {
                    label:'Custos',
                    backgroundColor:'#FFFF00',
                    borderColor:'#FFFF00',
                    data:[<?php echo implode(',', $custos); ?>],
                    fill:false
	        	}]
	        }
		});

    }
</script>
</body>
</html>