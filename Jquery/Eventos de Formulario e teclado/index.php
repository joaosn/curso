<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jquery</title>
	<style type="text/css">
		.focado {
			background-color:blue;
		}
	</style>
</head>
<body>
	<input type="text" name="nome" id="nome"> <br><br>

	<form method="POST" id="form">
		
		 Nome:<br>
		 
		 E-mail:<br>
		 <input type="email" name="email" id="email"><br><br>

		 idade:<br>
		 <select name="idade" id="idade">
		 	<option>10 anos</option>
		 	<option>20 anos</option>
		 	<option>30 anos</option>
		 </select><br><br>

		 <input type="submit" value="Enviar">

	</form>
  

     
    <script type="text/javascript" src="../jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>