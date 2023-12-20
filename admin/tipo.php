<?php
include_once '../inc/funcoes.php';
logado();
//conecta ao banco de dados
include '../inc/conecta.php';

//consulta
$sql    = "select * from tipos order by rotulo";
//manda consulta
$result = mysqli_query($conn,$sql);

//var_dump($result);
/*
$linha = mysqli_fetch_assoc($result);
var_dump($linha);

$linha = mysqli_fetch_assoc($result);
var_dump($linha);
*/


//inclui o cabeçalho HTML
include '../inc/cabecalho.php';


?>

<div  class="texto center" style="margin:50px 0;"> Sair <a href="admin.php" class="texto">Voltar</a></div>


	    <table width="48%"  style="margin:auto">
          <tr>
            <td colspan="5" class="tabela_cabecalho"><div >Tipo de
              Notícias</div></td>
          </tr>
          <tr>
            <td width="33%" class="texto_rotulo"><div  class="rotulo_tabela center">id_tipo</div></td>
            <td width="31%" class="texto_rotulo"><div  class="rotulo_tabela center">value</div></td>
            <td width="36%" class="texto_rotulo"><div  class="rotulo_tabela center">label</div></td>
            <td colspan="2" class="texto_rotulo"><div  class="texto center"><a href="tipo_insere.php">Inserir</a></div></td>
            </tr>
          <?php while($linha = mysqli_fetch_assoc($result)): ?>
          <tr>
            <td class="fundo_celula"><div  class="texto center"><?= $linha['idTipo'] ?></div></td>
            <td><div  class="texto center" ><?= $linha['Valor'] ?></div></td>
            <td><div  class="texto center" ><?= $linha['Rotulo'] ?></div></td>
            <td><div  class="texto center"><a href="tipo_altera.php?id_tipo=<?= $linha['idTipo'] ?>">alterar</a></div></td>
            <td><div  class="texto center"><a href="tipo_exclui.php?id_tipo=<?= $linha['idTipo'] ?>">excluir</a></div></td>
          </tr>

          <?php endwhile ?>
        </table>

<?php
//inclui o rodape HTML
include '../inc/rodape.php';
?>