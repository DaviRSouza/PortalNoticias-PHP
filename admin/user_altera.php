<?php
  include '../inc/conecta.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['alterar'])){
    extract($_POST);
    $sql="update usuarios set usuario='$usuario', 
                              senha='$senha',
                              user_tipo='$user_tipo'
                          where id_usuario='$id_usuario';";

    /**
      metodo sem usar o extract, usando array
      $sql="update usuarios set usuario='{$_POST['usuario]}',
                                senha='{$_POST['senha']}',
                                tipo='{$_POST['tipo']}'
                            where id_usuario='{$_POST['id_usuario']}';";
    */

    mysqli_query($conn,$sql);
    $vai = 'user.php';
    header('location:'.$vai);
    exit;

  }

    #região que fara o select do registro que sera alterado
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_usuario'])){
      $sql = "select * from usuarios where id_usuario = '{$_GET['id_usuario']}';";
      $result = mysqli_query($conn,$sql);
      $linha = mysqli_fetch_assoc($result);
      extract($linha);
    }
  include_once '../inc/cabecalho.php';
?>


<div  class="texto center" style="margin:50px 0;"><a href="user.php">Voltar</a>Sair</div>


<form name="altera_user" id="altera_user" method="POST" action="">
<div>  
	<div  style="margin:auto;width:30%" class="tabela_borda">
      
        <div class="tabela_cabecalho">Alterar Usuário</div>
      
      
        <div>&nbsp;</div>
      
      <p>
        <label for = "usuario" class="texto_rotulo">Usuário: </label>
        <input name="usuario" type="text" id="usuario" value="<?= $usuario ?>" />
      </p>  
      <p>
        <label for = "senha" class="texto_rotulo">Senha: </label>
        <input name="senha" type="text" id="senha" value="<?= $senha ?>" />
      </p>
      <p>
        <label for="user_tipo" class="texto_rotulo">Tipo:</label>
        <select name="user_tipo" id="user_tipo"/>
          //jeito 1 - mais complexo
          <option value="sup" <?php if($user_tipo == 'sup') echo "selected"; ?>>Supervisor</option>
          //jeito 2 - mais usual
          <option value="com" <?= ($user_tipo == 'com')?('selected'):(NULL)?>>Comum</option>
        </select>       
      </p>
      <p>
        <input name="id_usuario" type="hidden" id="id_usuario" value="<?= $id_usuario ?>" />
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