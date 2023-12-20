<?php
              #Região de opção, somente entrara aqui se vier do formulario#
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inserir']) ){
    include_once('../inc/conecta.php');
    extract($_POST);
    $sql="insert into tipos VALUES (NULL, '$Valor','$Rotulo')";
    
    mysqli_query($conn, $sql);
    //header("location:tipos.php");
    $vai = 'tipo.php';
    header('location: '.$vai);
    exit;
  }

  include '../inc/cabecalho.php';
?>


<div  class="texto center" style="margin:50px 0;"><a href="user.php">Voltar</a>Sair</div>


<form name="altera_user" id="altera_user" method="POST" action="#">
<div>  
	<div  style="margin:auto;width:30%" class="tabela_borda">
      
        <div class="tabela_cabecalho center">Novo Tipo de Notícia</div>
      
      
        <div>&nbsp;</div>
      
      <p>
        <label for = "usuario" class="texto_rotulo">Value:  </label>
        <input name="Valor" type="text" id="value" />
      </p>  
      <p>
        <label for = "senha" class="texto_rotulo">Label: </label>
        <input name="Rotulo" type="text" id="label" />
      </p>
      <p>
        <div class="right">
          <input name="inserir" type="submit" class="botao" value="Inserir" />
        </div>
      </p>
   
</div>    
</form>

<?php
include '../inc/rodape.php';
?>