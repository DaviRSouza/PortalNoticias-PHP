<?php
  include_once '../inc/funcoes.php';
  logado();
  nivel();

  #conectar ao banco de dados#
  include_once '../inc/conecta.php';
  $sql = "select * from usuarios where ativo='s';";
  $result = mysqli_query($conn,$sql);


  #Insere o cabeçalho HTML#
  include_once '../inc/cabecalho.php';
?>

<div  class="texto center" style="margin:50px 0;"> Sair <a href="admin.php" class="texto">Voltar</a></div>

<table width="70%"  style="margin:auto">

      <tr>
        <td colspan="6" class="tabela_cabecalho"><div class="center">Usuários</div></td>
      </tr>
      <tr>
        <td width="14%"><div class="texto_rotulo center">id_user</div></td>
        <td width="23%" class="borda_celula"><div  class="texto_rotulo center">Login</div></td>
        <td width="17%" class="borda_celula"><div  class="texto_rotulo center">Senha</div></td>
        <td width="17%" class="borda_celula"><div  class="texto_rotulo center">Tipo_Usuário</div></td>
        <td colspan="2" class="borda_celula"><div  class="texto center"><a href="user_insere.php">Inserir</a></div></td>
      </tr>
      <?php
        while($linha = mysqli_fetch_assoc($result)):
          extract($linha);
      ?>
      <tr>
        <td class="fundo_celula"><div  class="texto center"><?= $id_usuario ?></div></td>
        <td class="borda_celula"><div  class="texto center"><?= $usuario    ?></div></td>
        <td class="borda_celula"><div  class="texto center"><?= $senha      ?></div></td>
        <td class="borda_celula"><div  class="texto center"><?= $user_tipo  ?></div></td>
        <td width="13%" class="borda_celula"><div  class="texto center"><a href="user_altera.php?id_usuario=<?= $id_usuario ?>">alterar</a></div></td>
        <td width="12%" class="borda_celula"><div  class="texto center"><a href="user_exclui.php?id_usuario=<?= $id_usuario ?>">excluir</a></div></td>
      </tr>
      <?php
        endwhile;
      ?>
</table>

<?php
  #Insere o rodape HTML#
  include_once '../inc/rodape.php';
?>