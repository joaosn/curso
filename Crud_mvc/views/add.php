<h3>Adicionar</h3>

<?php if($error == 'exist'):  ?>
   <div class="btn-danger" style="margin:50px; border-radius:10px;">E-mail ja esta sendo Usado!!</div>
<?php endif; ?>

<form method="POST" class="form-group" action="<?php echo BASE_URL;  ?>contatos/add_save">
    <label for="nome">Nome:</label>
	<input type="text" name="nome">
	<label for="email">E-mail:</label>
	<input type="email" name="email">

 <input type="submit" name="Adicionar">
</form>