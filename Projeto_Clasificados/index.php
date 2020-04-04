<?php require 'pages/header.php';?>
<?php
require 'classes/anuncios.class.php';
require 'classes/categoria.class.php';
require 'classes/usuarios.class.php';
$a = new Anuncios();
$c = new Categorias();
$y = new Usuarios();


$filtros = array(
   'categoria' => '',
   'preco' => '',
   'estado' =>''
);
 if(isset($_GET['filtros'])) {
  $filtros = ($_GET['filtros']);
 }

$notc = $a->getTotalAnuncios($filtros);
$p = 1;
if(isset($_GET['p']) && !empty($_GET['p'])) {
    $p = addslashes($_GET['p']);
}
$por_pagina = 2;
$total_pagias = ceil($notc/$por_pagina);

$anuncios = $a->getUltimosAnuncios($p,$por_pagina,$filtros);
$categoria = $c->getLista();
?>
    <div class="container-fluid" style="margin-top:20px;">
    	<div class="jumbotron">
    		<h1><?php echo utf8_encode('Nós'); ?> temos hoje em oferta <?php echo $notc;  ?> produtos!!!</h1>
    		<p><?php echo utf8_encode('é'); ?> mais de 300  pessoas cadastrados.<p>
    	</div>

        <div class="row">
        	<div class="col-sm-4">
               <h3>Pesquisa <?php echo utf8_encode('Avançada'); ?></h3>
               <form method="GET">
                  <div class="form-group">
                    <label for="categoria">Categoria:</label>
                     <select name="filtros[categoria]" class="form-control" id="categoria">
                         <option></option>
                         <?php foreach ($categoria as $cat): ?>
                          <option value="<?php echo $cat['id'];  ?>" <?php echo ($cat['id']==$filtros['categoria'])?'selected="selected"':''; ?>><?php echo $cat['nome'];  ?></option> 
                         <?php endforeach; ?>
                     </select>
                  </div>

                  <div class="form-group">
                    <label for="preco"><?php echo utf8_encode('Preço:'); ?></label>
                     <select name="filtros[preco]" class="form-control" id="preco">
                         <option></option>
                         <option value="0-50"<?php echo ($filtros['preco']=='0-50')?'selected="selected"':''; ?>>R$ 0 - 50</option>
                         <option value="51-100"<?php echo ($filtros['preco']=='51-100')?'selected="selected"':''; ?>>R$ 51 - 100</option>
                         <option value="101-350" <?php echo ($filtros['preco']=='101-350')?'selected="selected"':''; ?>>R$ 101 - 350</option>
                         <option value="351-1000"<?php echo ($filtros['preco']=='351-1000')?'selected="selected"':''; ?>>>R$ 351 - 1000</option>
                     </select>
                  </div>

                   <div class="form-group">
                    <label for="estado">Estado de <?php echo utf8_encode('Conservação:'); ?></label>
                     <select name="filtros[estado]" class="form-control" id="estado">
                         <option></option>
                         <option value="0"<?php echo ($filtros['estado']=='0')?'selected="selected"':''; ?>>Novo</option>
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
               <h3>Ultimos <?php echo utf8_encode('Anúcios'); ?></h3>
               <table class="table table-striped">
                 <tbody>
                     <?php foreach ($anuncios as $anuncio): ?>
                        <tr>
                            <td>
                                 <?php if(!empty($anuncio['url'])):  ?>
                                  <img src="assetes/img/anuncios/<?php echo $anuncio['url'];  ?>" height="50" border="0">
                                   <?php else:  ?>
                                  <img src="assetes/img/mini_imagem.png" height="50" border="0">
                                  <?php endif;  ?>   
                            </td>
                            <td>
                                 <a href="produto.php?id=<?php echo $anuncio['id']; ?>"><?php echo $anuncio['titulo']; ?></a><br>
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
                   <?php for ($q=1; $q<=$total_pagias; $q++): ?>
                    <li class="page-item" class="<?php echo($p==$q)?'selected':''; ?>"><a class="page-link" href="index.php?=<?php 
                    $w = $_GET;
                    $w['p'] = $q;
                    echo http_build_query($w);
                    ?>" ><?php echo $q;  ?></a></li>
                   <?php endfor; ?>
             </ul> 
            </div>
        </div>


    </div>

<?php require 'pages/footer.php';  ?>