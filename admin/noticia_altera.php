<?php
  #cabecalho
  include_once '../inc/cabecalho.php';
  #conexão
  include_once '../inc/conecta.php';

  #funçoes
  include_once '../inc/funcoes.php';
  logado();

  #servidor
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['alterar'])){
    if(isset($_FILES['imagem'])){
      if($_FILES['imagem']['error'] === 0){
        $temp =$_FILES['imagem']['tmp_name'];
        
        $name = $_FILES['imagem']['name'];
        $data = date_create('now');
        $name = date_format($data, 'YmdHis').$name;
        $dir = "../imagens/noticiasImg/".$name;
        $ok = move_uploaded_file($temp,$dir);  
        $img = "imagem ='$name',";
      }
    }

    if(!isset($ok) || $ok == false){
      $img="";
    }
    if ($_POST['data'] != ''){
      $dataSql = dataHtmlToSql($_POST['data']);
    }else{
      $agora = date_create('now');
      $dataSql = date_format($agora,'Y-m-d');
    }

    extract($_POST);
    $sql = "update noticias set titulo  = '$titulo',
                              resumo  = '$resumo',
                              texto   = '$texto',
                              data    = '$dataSql',
                              tipo    = '$tipo',
                              $img
                              destaque= '$destaque'
                          where id_noticia='$id_noticia';";  

    mysqli_query($conn,$sql);
    $vai = "noticia.php";
    header('location:'. $vai);
    exit;
  }
     #consulta do registro que sera alterado
  $sql = "select * from noticias where id_noticia='{$_GET['id_noticia']}';";
  $result = mysqli_query($conn,$sql);
  $linha = mysqli_fetch_assoc($result);
  extract ($linha);
  //convertendo a data de SQL para Portugues
  $data = dataSqlToHml($data);
  ////////////////////////////////////////////

  #consulta para monta o select tipo
  $sql = "select Valor,Rotulo from tipos";
  $result = mysqli_query($conn,$sql);
  $tipos = resultForArray($result);
  $select = montaSelect($tipos,'tipo','tipo','',$tipo);


    

  
?>


<div  class="texto center" style="margin:50px 0;"><a href="noticia.php">Voltar</a>Sair</div>


<form name="altera_user" id="altera_user" method="POST" enctype="multipart/form-data" action="">
<div>  
	<div  style="margin:auto;width:70%" class="tabela_borda">
      
        <div class="tabela_cabecalho">Alterar  Notícia</div>
      
      
        <div>&nbsp;</div>
      
      <p>
        <label for = "data" class="texto_rotulo">Data:  </label>
        <input name="data" type="text" id="data" value="<?= $data ?>"/>  
      </p>  
      <p>
        <label for = "tipo" class="texto_rotulo">Tipo de Notícia:  </label>
        <?= $select ?>
      </p>

      <p>
        <label for = "titulo" class="texto_rotulo">Título da Notícia: </label>
        <input name="titulo" type="text" id="titulo" value="<?= $titulo ?>"/>  
      </p>  

      <p>
        <label for = "resumo" class="texto_rotulo">Resumo da Notícia:  </label>
        <textarea name="resumo" cols="50" rows="3" id="resumo" ><?= $resumo ?></textarea>  
      </p>  

      <p>
        <label for = "texto" class="texto_rotulo">Texto da Notícia:  </label>
        <textarea name="texto" cols="50" rows="10" id="texto" > <?= $texto ?> </textarea> 
      </p>  
      <p>
        <label for = "imagem" class="texto_rotulo">Imagem:  </label>
        <input name="imagem" type="file" id="imagem" />  
      </p>
      <p>
        <label for = "texto" class="texto_rotulo">Destaque:  </label>
        <span class="rotulo_tabela">
                <input name="destaque" type="radio" value="sim" <?=($destaque == "sim")?("checked"):(NULL) ?>/>
        </span>Sim
        <span class="rotulo_tabela">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="destaque" type="radio" value="nao" <?=($destaque == "nao")?("checked"):(NULL) ?>/>
        </span> Não 
      </p>
      
      <p>
        <input name="id_noticia" type="hidden" id="id_noticia" value="<?= $id_noticia ?>"/>
      </p>
      <p>
        <div class="right">
        <input name="alterar" type="submit" class="botao" value="Alterar" />
        </div>
      </p>
   
</div>    
</form>

<?php
include_once '../inc/rodape.php';
?>

