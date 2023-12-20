<?php
  include_once '../inc/conecta.php';
  include_once '../inc/funcoes.php';
  logado();
  $sql = "select * from noticias where ativo='s';";
  $result = mysqli_query($conn,$sql);

  #cabeçalho#
  include_once '../inc/cabecalho.php';
?>

<div  class="texto center" style="margin:50px 0;"> Sair <a href="admin.php" class="texto">Voltar</a></div>


	    <table width="70%" style="margin:auto"  >
          <tr>
            <td colspan="9" class="tabela_cabecalho"><div >Notícias</div></td>
          </tr>
          <tr>
            <td width="14%" class="texto_rotulo"><div  class="rotulo_tabela center">id_noticia</div></td>
            <td width="21%" class="texto_rotulo"><div  class="rotulo_tabela center">Data</div></td>
            <td width="23%" class="texto_rotulo"><div  class="rotulo_tabela center">Tipo</div></td>
            <td width="17%" class="texto_rotulo"><div  class="rotulo_tabela center">Título</div></td>
            <td width="13%" class="texto_rotulo"><div  class="rotulo_tabela center">Imagem</div></td>
            <td width="13%" class="texto_rotulo"><div  class="rotulo_tabela center">Destaque</div></td>
            <td colspan="2" class="borda_celula"><div  class="texto center">Inserir</div></td>
            </tr>
<?php while ($linha = mysqli_fetch_assoc($result)):
  extract($linha);  
?>
          <tr>
            <td class="fundo_celula"><div  class="texto center"><?=$id_noticia?></div></td>
            <td class="borda_celula"><div  class="texto center"><?=dataSqlToHml($data)?></div></td>
            <td class="borda_celula"><div  class="texto center"><?=$tipo ?></div></td>
            
            <td class="borda_celula"><div  class="texto center"><?=$titulo?></div></td>
            <td class="borda_celula"><div  class="texto center"><?=$imagem?></div></td>
            <td class="borda_celula"><div  class="texto center"><?=$destaque?></div></td>
            <td width="13%" class="borda_celula"><div  class="texto center">alterar</div></td>
            <td width="12%" class="borda_celula"><div  class="texto center">excluir</div></td>
          </tr>
<?php endwhile ?>
        </table>


<?php
  include_once '../inc/rodape.php';
?>
