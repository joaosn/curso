<?php require 'pages/header.php';?>
<?php require 'classes/categoria.class.php'; ?>
<?php require 'classes/anuncios.class.php'; ?>
<?php 
if(empty($_SESSION['clogin'])) {
	?>
   <script type="text/javascript">window.location.href="login.php";</script>
	<?php
	exit;
}

$a = new Anuncios();
if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
	$titulo = addslashes($_POST['titulo']);
	$categoria = addslashes($_POST['categoria']);
	$valor = addslashes($_POST['valor']);
	$descricao = addslashes($_POST['descricao']);
	$estado = addslashes($_POST['estado']);

	$a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);
	?>
    <div class="alet alert-success">
    	Produto Adicionado com Sucesso!!
    </div>
	<?php

}
?>

<div class="container">
	<h1 style="margin-top:20px;">Meus Anúncios - Adicionar Anúncio</h1>

	<form method="POST" enctype="multipart/form-data" style="margin-top:20px;">
		
       <div class="form-grup">
       	  <label for="categoria">Categoria</label>
       	  <select name="categoria" id="categoria" class="form-control">
       	  	     <?php
       	  	      $c = new Categorias();
                  $cats = $c->getLista();
                  foreach($cats as $cat): ?>
        <option value="<?php echo $cat['id']; ?>"><?php echo $cat['nome']; ?></option>
       	  	      <?php endforeach; ?>
       	  </select>
       </div>
       <div class="form-grup">
       	  <label for="titulo">Titulo</label>
       	  <input type="text" name="titulo" id="titulo" class="form-control">
       </div>
       <div class="form-grup">
       	  <label for="valor">Valor</label>
       	  <input type="text" name="valor" id="valor" class="form-control">
       </div>
       <div class="form-grup">
       	  <label for="decricao">Descrição</label>
       	  <textarea class="form-control" name="descricao" id="descricao"></textarea>
       </div>
       <div class="form-grup">
       	  <label for="estado">Estado de Conservação</label>
       	   <select name="estado" id="estado" class="form-control">
       	  	      <option value="0">Novo</option>
       	  	      <option value="1">Semi-novo</option>
       	  	      <option value="2">Usado</option>
       	  </select>
       </div>
         <input type="submit" value="Adicionar" class="btn btn-default" style="margin-top:20px;">
	</form>
</div>

<?php require 'pages/footer.php';?>
