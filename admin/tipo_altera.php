<?php
  include_once '../inc/funcoes.php';
  logado();
  include '../inc/conecta.php';
  #região que fara a atualição
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['alterar'])){
    extract($_POST);
    $sql="update tipos set valor='$Valor', rotulo='$Rotulo' where idTipo='$idTipo';";
    
    mysqli_query($conn,$sql);
    $vai = 'tipo.php';
    header('location:'.$vai);
    exit;
  }

  #região que fara o select do registro que sera alterado
  if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_tipo'])){
    $sql = "select * from tipos where idTipo = '{$_GET['id_tipo']}'";
    $result = mysqli_query($conn,$sql);
    $linha = mysqli_fetch_assoc($result);
  }

  include '../inc/cabecalho.php';


?>

<div  class="texto center" style="margin:50px 0;"><a href="user.php">Voltar</a>Sair</div>


<form name="altera_user" id="altera_user" method="POST" action="">
<div>  
	<div  style="margin:auto;width:30%" class="tabela_borda">
      
        <div class="tabela_cabecalho">Alterar Tipo de Notícia</div>
      
      
        <div>&nbsp;</div>
      
      <p>
        <label for = "usuario" class="texto_rotulo">Value:  </label>
        <input name="Valor" type="text" id="value" value="<?=$linha['Valor'] ?>" />
      </p>  
      <p>
        <label for = "senha" class="texto_rotulo">Label: </label>
        <input name="Rotulo" type="text" id="label" value="<?=$linha['Rotulo'] ?>"/>
      </p>
      <p>
        <input name="idTipo" type="hidden" id="idTipo" value="<?=$linha['idTipo'] ?>"/>
      </p>
      <p>
        <div class="right">
          <input name="alterar" type="submit" class="botao" value="Alterar" />
        </div>
      </p>
   
</div>    
</form>

<?php
include '../inc/rodape.php';
?>