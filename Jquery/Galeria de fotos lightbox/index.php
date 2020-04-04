<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jquery</title>
	<style type="text/css">
		.bgbox {
			position:fixed;
			left:0;
			top:0;
			width:100%;
			height:100%;
			background-color:rgb(0, 0, 0, 0.7);
			display:none;
			}
		.box {
			display:none;
			position:fixed;
			left:50%;
			top:50%;
			width:1200px;
			height:600px;
			background-color:#fff;
			margin-left:-620px;
			margin-top:-320px;
			padding:20px;
		}
	</style>
</head>
<body>

  <a href="javascript:;" class="galeria"><img src="img/forca.jpeg" border="0" width="500"></a> 

   <a href="javascript:;" class="galeria"><img src="img/marca_dagua.png" border="0" width="500"></a>

  <div class="bgbox"></div>
  <div class="box">
  	  <img src="" border="0" width="100%"><br>
  	  <button>Fechar</button>
  </div>

    <script type="text/javascript" src="../jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>