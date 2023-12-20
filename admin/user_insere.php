<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inserir'])){
    include '../inc/conecta.php';
    extract($_POST);
    $sql = "insert into usuarios (usuario,senha,user_tipo) values ('$usuario','$senha','$user_tipo');";
    mysqli_query($conn,$sql);

    $vai = 'user.php';
    header('location:'.$vai);
    exit;
  }
  ################################################################################
  include_once '../inc/cabecalho.php';
?>

<div  class="texto center" style="margin:50px 0;"><a href="user.php">Voltar</a>Sair</div>


<form name="altera_user" id="altera_user" method="POST" action="">
<div>  
	<div  style="margin:auto;width:30%" class="tabela_borda">
      
        <div class="tabela_cabecalho">Novo Usuário</div>
      
      
        <div>&nbsp;</div>
      
      <p>
        <label for = "usuario" class="texto_rotulo">Usuário: </label>
        <input name="usuario" type="text" id="usuario" />
      </p>  
      <p>
        <label for = "senha" class="texto_rotulo">Senha: </label>
        <input name="senha" type="text" id="senha" />
      </p>
      <p>
        <label for="user_tipo" class="texto_rotulo">Tipo:</label>
        <select name="user_tipo" id="user_tipo">
          <option value="sup">Supervisor</option>
          <option value="com">Comum</option>
        </select>       
      </p>

      <p>
        <div class="right">
          <input name="inserir" type="submit" class="botao" value="Inserir" />
        </div>
      </p>
   
</div>    
</form>

<?php
  include_once '../inc/rodape.php';
?>