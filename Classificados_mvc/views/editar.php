
<div class="container">
	<h1 style="margin-top:20px;">Meus Anúncios - Editar Anúncio</h1>

	<form method="POST" enctype="multipart/form-data" style="margin-top:20px;">
		
       <div class="form-group">
       	  <label for="categoria">Categoria</label>
       	  <select name="categoria" id="categoria" class="form-control">
          <?php  foreach($cats as $cat): ?>
        <option value="<?php echo $cat['id']; ?>"<?php echo ($info['id_categoria']==$cat['id'])?'selected="selected"':'';?>><?php echo $cat['nome']; ?></option>
       	  	      <?php endforeach; ?>
       	  </select>
       </div>
       <div class="form-group">
       	  <label for="titulo">Titulo</label>
       	  <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo$info['titulo']; ?>">
       </div>
       <div class="form-group">
       	  <label for="valor">Valor</label>
       	  <input type="text" name="valor" id="valor" class="form-control" value="<?php echo$info['valor']; ?>">
       </div>
       <div class="form-group">
       	  <label for="decricao">Descrição</label>
       	  <textarea class="form-control" name="descricao" id="descricao"><?php echo$info['descricao']; ?></textarea>
       </div>
       <div class="form-group">
       	  <label for="estado">Estado de Conservação</label>
       	   <select name="estado" id="estado" class="form-control">
       	  	      <option value="0" <?php echo ($info['estado']=='0')?'selected="selected"':'';?>>Novo</option>
       	  	      <option value="1" <?php echo ($info['estado']=='1')?'selected="selected"':'';?>>Semi-novo</option>
       	  	      <option value="2" <?php echo ($info['estado']=='2')?'selected="selected"':'';?>>Usado</option>
       	  </select>
       </div>

       <div class="form-group"> 

         <label for="add_foto">Fotos do anúncio:</label>
         <input type="file" name="fotos[]" multiple />
         <br>
            <div style="padding:10px;">Fotos Produto</div> 
         <div class="card" style="width:auto;"> 
           <div class="card-body">
              <?php foreach ($info['fotos'] as $foto): ?>
                <div class="foto_item">
                  <img src="<?php echo BASE_URL; ?>assetes/img/anuncios/<?php echo $foto['url']; ?>" border="0" class="img-thumbnail"><br>
                   <a href="<?php echo BASE_URL; ?>anuncios/excluirFoto/<?php echo $foto['id']; ?>" class="btn btn-danger btn-sm">excluir</a>
                </div>
              
              <?php endforeach; ?>
           </div>
         </div>
  
       </div>
         <input type="submit" value="Salvar" class="btn btn-default" style="margin-top:20px;">
	</form>
</div>