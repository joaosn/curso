<?php  
session_start();
require 'config.php';
require 'classes/usuarios.class.php';
require 'classes/documentos.class.php';

if(!isset($_SESSION['logado'])) {
	header("Location: login.php");
	exit;
}

 $usuarios = new Usuarios($pdo);
 $usuarios->setUsuario($_SESSION['logado']);

 $documentos = new Documentos($pdo);
 $lista = $documentos->getDocumentos();
 ?>
 <h1>sistema</h1>

 <?php if($usuarios->temPermissao('ADD')): ?>
 <a href="">Adicionar Documento</a><br>
 <?php endif; ?>

 

 <table border="3" width="100%"> 
    <tr>
    	<th>Nome do arquivo</th>
    	<th>Ações</th>
    </tr>
    <?php foreach ($lista as $item): ?>
    <tr>
    	<td><?php echo $item['titulo'];  ?></td>
    	<td>
    		<?php if($usuarios->temPermissao('EDIT')): ?>
    		<a href="">Editar</a>
    	    <?php endif; ?>
    	    <?php if($usuarios->temPermissao('DEl')): ?>
    		<a href="">Excluir</a>
    	    <?php endif;  ?>
        </td>
    </tr>
    <?php endforeach; ?>
 </table>
 <?php if($usuarios->temPermissao('SECRET')): ?>
 <a href="secreto.php">secret</a><br>
 <?php endif;  ?>
