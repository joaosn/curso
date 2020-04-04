<?php
if (!empty($msg)) {
    echo $msg;
}  ?>
<div class="container">
     <h1 style="margin-top:10px;"><?php echo utf8_encode('Meus anucios'); ?></h1>

     <a href="<?php echo BASE_URL;?>anuncios/add" class="btn btn-default"
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
        foreach ($anuncios as $anuncio): 
        ?>
         <tr>
         	<td>
                <?php if(!empty($anuncio['url'])):  ?>
                   <img src="<?php echo BASE_URL; ?>assetes/img/anuncios/<?php echo $anuncio['url'];  ?>" height="50" border="0">
                <?php else:  ?>
                   <img src="<?php echo BASE_URL; ?>assetes/img/mini_imagem.png" height="50" border="0">
                <?php endif;  ?>   
            </td>
         	<td><?php echo $anuncio['titulo'];  ?> </td>
         	<td>R$ <?php echo number_format($anuncio['valor'],2);  ?></td>
         	<td>
                <a href="<?php echo BASE_URL; ?>anuncios/editar/<?php echo $anuncio['id']; ?>" class="btn btn-primary ">Editar</a>
                <a href="<?php echo BASE_URL; ?>anuncios/excluir/<?php echo $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>  

            </td>
         </tr>
        <?php endforeach; ?>
     </table> 
</div>