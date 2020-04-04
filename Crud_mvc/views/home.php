<a style="margin:20px;" href="<?php echo BASE_URL ?>contatos/add" class="btn btn-primary" >Adicionar Usuario</a>
<table class="table">
   <tr>     
     <th>id</th>
     <th>Nome</th>
     <th>E-Mail</th>
     <th><?php echo utf8_encode('Ações'); ?></th>
   </tr>
   <?php foreach ($lista as $item): ?>
     <tr>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['nome']; ?></td>
        <td><?php echo $item['email']; ?></td>
        <td>
           <a class="btn btn-primary" href="<?php echo BASE_URL ?>contatos/edit/<?php echo $item['id']; ?>">Editar</a>
           <a class="btn btn-danger" href="<?php echo BASE_URL ?>contatos/del/<?php echo $item['id']; ?>">Excluir</a>
        </td>
     </tr>
   <?php endforeach; ?>

</table>