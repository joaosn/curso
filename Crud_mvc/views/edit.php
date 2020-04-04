<h3>Editar</h3>

<form method="POST" class="form-group">
    <label for="nome">Nome:</label>
	<input type="text" name="nome" value="<?php echo $info['nome']; ?>">
	<label for="email">E-mail:</label>
	<?php echo $info['email']; ?>

 <input type="submit" name="Salvar">
</form>