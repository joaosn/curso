<?php require 'pages/header.php';?>
<?php 
if(empty($_SESSION['clogin'])) {
	?>
   <script type="text/javascript">window.location.href="login.php";</script>
	<?php
	exit;
}
?>
<div class="container">
     <h1 style="margin-top:10px;">Meus anucios</h1>

     <a href="add-anuncio.php" class="btn btn-default"
      style="padding:10px; ">Adicionar Anuncio</a>

     <table class="table table-striped">
     	<thead>
     		 <tr>
     		 	<th>Foto</th>
     		 	<th>Titulo</th>
     		 	<th>Valor</th>
     		 	<th>Açãoes</th>
     		 </tr>
     	</thead>
     	<?php 
        require 'classes/anuncios.class.php';
        $a = new Anuncios();
        $anuncios = $a->getMeusAnuncios();

        foreach ($anuncios as $anuncio): 
        ?>
         <tr>
         	<td>
                <?php if(!empty($anuncio['url'])):  ?>
                   <img src="assetes/img/anuncios/<?php echo $anuncio['url'];  ?>" height="50" border="0">
                <?php else:  ?>
                   <img src="assetes/img/mini_imagem.png" height="50" border="0">
                <?php endif;  ?>   
            </td>
         	<td><?php echo $anuncio['titulo'];  ?> </td>
         	<td>R$ <?php echo number_format($anuncio['valor'],2);  ?></td>
         	<td>
                <a href="editar-anuncio.php?id=<?php echo $anuncio['id']; ?>" class="btn btn-primary ">Editar</a>
                <a href="excluir-anuncio.php?id=<?php echo $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>  

            </td>
         </tr>
        <?php endforeach; ?>
     </table> 
</div>
<?php require 'pages/footer.php';?>
