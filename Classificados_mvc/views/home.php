<div class="container-fluid" style="margin-top:20px;">
    	<div class="jumbotron">
    		<h1>Nós temos hoje em oferta <?php echo $notc;  ?> produtos!!!</h1>
    		<p>é mais de 1000 pessoas cadastrados.<p>
    	</div>

        <div class="row">
        	<div class="col-sm-4">
               <h3>Pesquisa Avançada</h3>
               <form method="GET">
                  <div class="form-group">
                    <label for="categoria">Categoria:</label>
                     <select name="filtros[categoria]" class="form-control" id="categoria">
                         <option></option>
                         <?php foreach ($categorias as $cat): ?>
                          <option value="<?php echo $cat['id'];  ?>" <?php echo ($cat['id']==$filtros['categoria'])?'selected="selected"':''; ?>><?php echo $cat['nome'];  ?></option> 
                         <?php endforeach; ?>
                     </select>
                  </div>

                  <div class="form-group">
                    <label for="preco">Preço:</label>
                     <select name="filtros[preco]" class="form-control" id="preco">
                         <option></option>
                         <option value="0-50"<?php echo ($filtros['preco']=='0-50')?'selected="selected"':''; ?>>R$ 0 - 50</option>
                         <option value="51-100"<?php echo ($filtros['preco']=='51-100')?'selected="selected"':''; ?>>R$ 51 - 100</option>
                         <option value="101-350" <?php echo ($filtros['preco']=='101-350')?'selected="selected"':''; ?>>R$ 101 - 350</option>
                         <option value="351-1000"<?php echo ($filtros['preco']=='351-1000')?'selected="selected"':''; ?>>>R$ 351 - 1000</option>
                     </select>
                  </div>

                   <div class="form-group">
                    <label for="estado">Estado de Conservação:</label>
                     <select name="filtros[estado]" class="form-control" id="estado">
                         <option></option>
                         <option value="0"<?php echo ($filtros['estado']=='0')?'active':''; ?>>Novo</option>
                         <option value="1"<?php echo ($filtros['estado']=='1')?'selected="selected"':''; ?>>Semi-Novo</option>
                         <option value="2"<?php echo ($filtros['estado']=='2')?'selected="selected"':''; ?>>Usado</option>
                     </select>
                  </div>

                  <div class="form-group">
                     <input type="submit"  class="btn btn-info" value="Buscar">
                  </div>
               </form>
        	</div>
        	<div class="col-sm-8">
               <h3>Ultimos Anúcios</h3>
               <table class="table table-striped">
                 <tbody>
                     <?php foreach ($anuncios as $anuncio): ?>
                        <tr>
                            <td>
                                 <?php if(!empty($anuncio['url'])):  ?>
                                  <img src="<?php echo BASE_URL; ?>assetes/img/anuncios/<?php echo $anuncio['url'];  ?>" height="50" border="0">
                                   <?php else:  ?>
                                  <img src="<?php echo BASE_URL; ?>assetes/img/mini_imagem.png" height="50" border="0">
                                  <?php endif;  ?>   
                            </td>
                            <td>
                                 <a href="<?php echo BASE_URL; ?>/produto/abrir/<?php echo $anuncio['id']; ?>"><?php echo $anuncio['titulo']; ?></a><br>
                                 <?php echo $anuncio['categoria'];  ?>
                            </td>
                            <td>
                                R$ <?php echo number_format($anuncio['valor'],2);  ?>
                            </td>
                        </tr>
                     <?php endforeach; ?>
                 </tbody>
               </table>
               <ul class="pagination">
                   <?php $p = isset($_GET['p'])? $_GET['p']:0; 
                   for ($q=1; $q<=$total_pagias; $q++): 

                       ?>
                    <li class="page-item" class="<?php echo($p==$q)?'selected':''; ?>"><a class="page-link" href="<?php echo BASE_URL; ?>?=<?php 
                    $w = $_GET;
                    $w['p'] = $q;
                    echo http_build_query($w);
                    ?>" ><?php echo $q;  ?></a></li>
                   <?php endfor; ?>
             </ul> 
            </div>
        </div>


    </div>