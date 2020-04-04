<form method="POST">
	Escolha o modulo:<br>
	<select name="modulos" id="modulos" onchange="pegarAulas(this)">
		<?php foreach ($modulos as $modulo): ?>
	   <option></option>
       <option value="<?php echo $modulo['id'];  ?>"><?php echo $modulo['titulo'];  ?></option>
		<?php endforeach;  ?>	
	</select><br><br>

	Escolha a aula:<br>
	<select name="aulas" id="aulas">
		<?php foreach ($aulas as $aula): ?>

		<?php endforeach;  ?>
	</select><br><br>

	<input type="submit" value="Enviar">
</form>