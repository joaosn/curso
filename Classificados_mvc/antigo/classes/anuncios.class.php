<?php  
/**
 * para gerenciar todos os anuncios dos usuarios
 */
class Anuncios {

  public function getTotalAnuncios($filtros) {
    global $pdo;

    $filtrostring = array('1=1');
    if(!empty($filtros['categoria'])) {
      $filtrostring[] = 'anuncios.id_categoria = :id_categoria';
    }
    if(!empty($filtros['preco'])) {
      $filtrostring[] = 'anuncios.valor BETWEEN :preco1 AND :preco2';
    }
    if(!empty($filtros['estado'])) {
      $filtrostring[] = 'anuncios.estado = :estado';
    }

    $sql = $pdo->prepare("SELECT COUNT(*) AS c FROM anuncios WHERE ".implode(' AND ',$filtrostring));

     if(!empty($filtros['categoria'])) {
      $sql->bindValue(':id_categoria', $filtros['categoria']);
    }
    if(!empty($filtros['preco'])) {
      $preco = explode('-', $filtros['preco']);
      $sql->bindValue(':preco1', $preco[0]);
      $sql->bindValue(':preco2', $preco[1]);
    }
    if(!empty($filtros['estado'])) {
      $sql->bindValue(':estado', $filtros['estado']);
    }

    

    $sql->execute();
    $row = $sql->fetch();

    return $row['c'];
  }

  
  public function getUltimosAnuncios($page, $pag,$filtros) {
    global $pdo;

    $offset = ($page - 1) * $pag;

    $array = array();

    $filtrostring = array('1=1');
    if(!empty($filtros['categoria'])) {
      $filtrostring[] = 'anuncios.id_categoria = :id_categoria';
    }
    if(!empty($filtros['preco'])) {
      $filtrostring[] = 'anuncios.valor BETWEEN :preco1 AND :preco2';
    }
    if(!empty($filtros['estado'])) {
      $filtrostring[] = 'anuncios.estado = :estado';
    }

    $sql = $pdo->prepare("SELECT*,(select anuncios_img.url from anuncios_img where anuncios_img.id_anuncio = anuncios.id limit 1) as url,(select categoria.nome from categoria where categoria.id = anuncios.id_categoria) as categoria FROM anuncios WHERE ".implode(' AND ',$filtrostring)." ORDER BY id DESC LIMIT $offset,$pag");

    if(!empty($filtros['categoria'])) {
      $sql->bindValue(':id_categoria', $filtros['categoria']);
    }
    if(!empty($filtros['preco'])) {
      $preco = explode('-', $filtros['preco']);
      $sql->bindValue(':preco1', $preco[0]);
      $sql->bindValue(':preco2', $preco[1]);
    }
    if(!empty($filtros['estado'])) {
      $sql->bindValue(':estado', $filtros['estado']);
    }

    $sql->execute();

    if($sql->rowCount() > 0) {
      $array = $sql->fetchAll();
    }

    return $array;
  }
	public function getMeusAnuncios() {
		global $pdo;

		$array = array();
		$sql = $pdo->prepare("SELECT
		     *,
			(select anuncios_img.url from anuncios_img where anuncios_img
			.id_anuncio = anuncios.id limit 1) as url 
			FROM anuncios WHERE id_usuario = :id");

		$sql->bindValue(":id", $_SESSION['clogin']);
		$sql->execute();
		
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

  public function getAnuncio($id) {
  	$array = array();
  	global $pdo;

  	$sql = $pdo->prepare("SELECT *,(select categoria.nome from categoria where categoria.id = anuncios.id_categoria) as categoria,(select usuarios.telefone from usuarios where usuarios.id = anuncios.id_usuario) as telefone
     FROM anuncios WHERE id = :id");
  	$sql->bindValue(":id",$id);
  	$sql->execute();

  	if($sql->rowCount() > 0) {
  		$array = $sql->fetch();

      $sql = $pdo->prepare("SELECT id,url FROM anuncios_img WHERE id_anuncio = :id_anuncio");
      $sql->bindValue('id_anuncio',$id);
      $sql->execute();

      if($sql->rowCount() > 0) {
        $array['fotos'] = $sql->fetchAll();
      }
  	}

  	return $array;
  }

  public function addAnuncio($titulo, $categoria, $valor, $descricao, $estado) {
   global $pdo;

    $sql = $pdo->prepare("INSERT INTO anuncios SET titulo = :titulo,
        id_categoria = :id_categoria, id_usuario = :id_usuario,
        descricao = :descricao, valor = :valor,
    	estado = :estado");
    $sql->bindValue(":titulo",$titulo);
    $sql->bindValue(":id_categoria",$categoria);
    $sql->bindValue(":id_usuario",$_SESSION['clogin']);
    $sql->bindValue(":descricao",$descricao);
    $sql->bindValue(":valor",$valor);
    $sql->bindValue(":titulo",$titulo);
    $sql->bindValue(":estado",$estado);
    $sql->execute();
    
  }

  public function editAnuncio($titulo, $categoria, $valor, $descricao, $estado ,$fotos, $id) {
   global $pdo;

    $sql = $pdo->prepare("UPDATE anuncios SET titulo = :titulo,
        id_categoria = :id_categoria, id_usuario = :id_usuario,
        descricao = :descricao, valor = :valor,
    	estado = :estado WHERE id = :id");
    $sql->bindValue(":titulo",$titulo);
    $sql->bindValue(":id_categoria",$categoria);
    $sql->bindValue(":id_usuario",$_SESSION['clogin']);
    $sql->bindValue(":descricao",$descricao);
    $sql->bindValue(":valor",$valor);
    $sql->bindValue(":titulo",$titulo);
    $sql->bindValue(":estado",$estado);
    $sql->bindValue(":id",$id);
    $sql->execute();

    if(count($fotos) > 0) {
      for ($q=0; $q <count($fotos['tmp_name']) ; $q++) { 
        $tipo = $fotos['type'][$q];
        if(in_array($tipo, array('image/jpeg','image/png'))) {
             $tmpname = md5(time().rand(0,9999)).'.jpg';
            move_uploaded_file($fotos['tmp_name'][$q], 'assetes/img/anuncios/'.$tmpname);

          list($larguraOri,$alturaOri) = getimagesize('assetes/img/anuncios/'.$tmpname);
          $ratio = $larguraOri/$alturaOri;

          $largura = 500;
          $altura = 500;

          if($largura/$altura > $ratio) {
             $largura = $altura*$ratio;
          } else {
             $altura = $largura/$ratio;
          }

          $img = imagecreatetruecolor($largura, $altura);
          if($tipo == 'image/jpeg') {
            $origin = imagecreatefromjpeg('assetes/img/anuncios/'.$tmpname);
          }elseif($tipo == 'image/png') {
             $origin = imagecreatefrompng('assetes/img/anuncios/'.$tmpname);
          }

          imagecopyresampled($img, $origin, 0, 0, 0, 0, $largura, $altura, $larguraOri, $alturaOri);

          imagejpeg($img,'assetes/img/anuncios/'.$tmpname, 80);

          $sql = $pdo->prepare("INSERT INTO anuncios_img SET id_anuncio = :id_anuncio, url = :url");
          $sql->bindValue(':id_anuncio',$id);
          $sql->bindValue(':url',$tmpname);
          $sql->execute();
        }
      }
    }
    
  }

  public function excluirAnuncio($id) {
  	  global $pdo;

  	  $sql =  $pdo->prepare("DELETE FROM anuncios_img WHERE id_anuncio = :id_anuncio");
  	  $sql->bindValue(":id_anuncio", $id);
  	  $sql->execute();

  	  $sql =  $pdo->prepare("DELETE FROM anuncios WHERE id = :id");
  	  $sql->bindValue(":id", $id);
  	  $sql->execute();
  }

  public function excluirFoto($id) {
    global $pdo;
    $id_anuncio = 0;


    $sql = $pdo->prepare("SELECT id_anuncio FROM anuncios_img WHERE id = :id");
      $sql->bindValue(":id", $id);
      $sql->execute();

      if($sql->rowCount() >0) {
         $row = $sql->fetch();
         $id_anuncio = $row['id_anuncio'];
      }


    $sql =  $pdo->prepare("DELETE FROM anuncios_img WHERE id = :id");
      $sql->bindValue(":id", $id);
      $sql->execute();

      return $id_anuncio;
  }


}
?>