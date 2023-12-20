<?php
#incluindo o cabecalho HTML
  include_once "../inc/cabecalho.php";

#incluindo as funcoes
  include_once '../inc/funcoes.php';
  logado();

#incluindo conexão
  include_once "../inc/conecta.php";

#servidor
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inserir'])) {

  //vericar se subiu arquivo de upload
  if(isset($_FILES['imagem'])){
    if($_FILES['imagem']['error'] === 0){
      $temp =$_FILES['imagem']['tmp_name'];
      
      $name = $_FILES['imagem']['name'];
      $data = date_create('now');
      $name = date_format($data, 'YmdHis').$name;
      $dir = "../imagens/noticiasImg/".$name;
      $ok = move_uploaded_file($temp,$dir);  
    }
  }

  if(!isset($ok) || $ok == false){
    $name="";
  }
  //formatar a date para enviar al BD

  if ($_POST['data'] != ''){
    $dataSql = dataHtmlToSql($_POST['data']);
  }else{
    $agora = date_create('now');
    $dataSql = date_format($agora,'Y-m-d');
  }
  //envia a consulta
  extract($_POST);
  $sql = "insert into noticias VALUES (NULL,'$dataSql','$tipo','$titulo','$resumo','$texto','$name', '$destaque','s');";
  mysqli_query($conn,$sql);
  //volta para pagina noticias
  $vai = "noticia.php";
  header('location:'.$vai);
}
#cliente

#consulta para monta o select tipo
  $sql = "select Valor,Rotulo from tipos";
  $result = mysqli_query($conn,$sql);
  $tipos = resultForArray($result);
  $select = montaSelect($tipos,'tipo','tipo');
?>

<div  class="texto center" style="margin:50px 0;"><a href="noticia.php">Voltar</a>Sair</div>


<form name="insereNoticia" enctype="multipart/form-data" id="insereNoticia" method="POST" action="<?= $_SERVER['PHP_SELF']?>">
<div>  
	<div  style="margin:auto;width:70%" class="tabela_borda">
      
        <div class="tabela_cabecalho">inserir Notícia</div>
      
      
        <div>&nbsp;</div>
      
      <p>
        <label for = "data" class="texto_rotulo">Data:  </label>
        <input name="data" type="date" id="data" />  
      </p>  
      <p>
        <label for = "tipo" class="texto_rotulo">Tipo de Notícia:  </label>
        <?= $select ?>
      </p>

      <p>
        <label for = "titulo" class="texto_rotulo">Título da Notícia: </label>
        <input name="titulo" type="text" id="titulo" />  
      </p>  

      <p>
        <label for = "resumo" class="texto_rotulo">Resumo da Notícia:  </label>
        <textarea name="resumo" cols="50" rows="3" id="resumo"></textarea>  
      </p>  

      <p>
        <label for = "texto" class="texto_rotulo">Texto da Notícia:  </label>
        <textarea name="texto" cols="50" rows="10" id="texto">  </textarea> 
      </p>  
      <p>
        <label for = "imagem" class="texto_rotulo">Imagem:  </label>
        <input name="imagem" type="file" id="imagem" />  
      </p>
      <p>
        <label for = "texto" class="texto_rotulo">Destaque:  </label>
        <span class="rotulo_tabela">
                <input name="destaque" type="radio" value="sim" />
        </span>Sim
        <span class="rotulo_tabela">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="destaque" type="radio" value="nao" checked/>
        </span> Não 
      </p>
      <p>
        <div class="right">
        <input name="inserir" type="submit" class="botao" value="inserir" />
        </div>
      </p>
   
</div>    
</form>

<?php
  include_once "../inc/rodape.php";
?>